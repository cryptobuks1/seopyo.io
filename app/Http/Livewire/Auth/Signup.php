<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Livewire\Component;

/**
 * Class Signup
 *
 * @package App\Http\Livewire\Auth
 */
class Signup extends Component
{
    /**
     * @var string
     */
    public $first_name;
    /**
     * @var string
     */
    public $last_name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $password;
    /**
     * @var bool
     */
    public $agreement_accepted = true;

    /**
     * @return array
     */
    private function getValidationRules()
    {
        return [
            'first_name'         => 'required|string',
            'last_name'          => 'required|string',
            'email'              => 'required|email|unique:users,email',
            'password'           => 'required|min:6|max:24',
            'agreement_accepted' => 'required|boolean',
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

    /**
     * Handle a signin request to the application.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     *
     * @noinspection PhpUnused
     */
    public function signup()
    {
        $validatedData = $this->validate($this->getValidationRules());
        unset($validatedData['agreement_accepted']);
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = new User();
        $user->fill($validatedData);

        if (!$user->save()) {
            $this->addError('email', trans('auth.failed'));
        }

        return redirect()->route('auth.signin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.auth.signup');
    }
}
