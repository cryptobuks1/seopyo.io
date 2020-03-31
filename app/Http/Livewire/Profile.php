<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Profile extends Component
{
    /**
     * @var \App\User
     */
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.profile');
    }
}
