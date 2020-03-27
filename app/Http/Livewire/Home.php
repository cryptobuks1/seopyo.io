<?php

namespace App\Http\Livewire;

use Livewire\Component;

/**
 * Class Home
 *
 * @package App\Http\Livewire
 */
class Home extends Component
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.home');
    }
}
