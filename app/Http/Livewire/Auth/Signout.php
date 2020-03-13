<?php

namespace App\Http\Livewire\Auth;

use Auth;
use Livewire\Component;
use Illuminate\Http\Request;

/**
 * Class Signout
 *
 * @package App\Http\Livewire\Auth
 */
class Signout extends Component
{
    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.auth.signout');
    }
}
