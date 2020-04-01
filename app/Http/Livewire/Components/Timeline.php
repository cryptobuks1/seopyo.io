<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

/**
 * Class Timeline
 *
 * @package App\Http\Livewire\Components
 */
class Timeline extends Component
{
    /**
     * @var
     */
    public $timelineData;

    /**
     * @param $timelineData
     */
    public function mount($timelineData = [])
    {
        $this->timelineData = $timelineData;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.components.timeline');
    }
}
