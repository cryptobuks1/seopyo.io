<?php

namespace App\Http\Livewire\Account;

use App\User;
use Livewire\Component;

/**
 * Class Settings
 *
 * @package App\Http\Livewire\Account
 */
class Settings extends Component
{
    /**
     * @var \App\User
     */
    public $user;
    /**
     * @var string
     */
    public $section = 'profile';

    /**
     * @param \App\User $user
     */
    public function mount(User $user)
    {
        $this->user    = $user;
        $this->section = request()->input('section', $this->section);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.account.settings');
    }
}
