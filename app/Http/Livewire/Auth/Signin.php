<?php

namespace App\Http\Livewire\Auth;

use Auth;
use App\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;

/**
 * Class Signin
 *
 * @package App\Http\Livewire\Auth
 */
class Signin extends Component
{
    use ThrottlesLogins;

    public $email;
    public $password = '123456';
    public $remember = true;

    public function mount()
    {
        $this->email = User::inRandomOrder()->first()->email;
    }

    /**
     * @return array
     */
    private function getValidationRules()
    {
        return [
            $this->username() => 'required|email',
            'password'        => 'required|min:6|max:24',
        ];
    }

    /**
     * @param $field
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field, $this->getValidationRules());
    }

    public function username()
    {
        return 'email';
    }

    /**
     * Handle a signin request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function signin(Request $request)
    {
        $validatedData = $this->validate($this->getValidationRules());

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            $this->sendLockoutResponse($request);
        }

        if (Auth::guard()->attempt($validatedData, $request->filled('remember'))) {
            $request->session()->regenerate();

            $this->clearLoginAttempts($request);

            return redirect()->route('account.dashboard');
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        $this->addError($this->username(), trans('auth.failed'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.auth.signin');
    }
}
