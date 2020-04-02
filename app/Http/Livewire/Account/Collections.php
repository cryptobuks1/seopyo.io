<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;

/**
 * Class Collections
 *
 * @package App\Http\Livewire\Account
 */
class Collections extends Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var \Illuminate\Database\Eloquent\Collection
     */
    private $collections;

    /**
     * This method renders a defined template
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        /* @var \Illuminate\Database\Eloquent\Relations\MorphMany $qbCollections */
        $qbCollections = auth()->user()->collections();
        $qbCollections->latest();

        $this->collections = $qbCollections->paginate(12);

        return view('livewire.account.collections', [
            'collections' => $this->collections,
        ]);
    }

    /**
     * This method creates a new collection
     */
    public function createCollection()
    {
        /* @var \Illuminate\Database\Eloquent\Relations\MorphMany $qbCollections */
        $qbCollections = auth()->user()->collections();

        $qbCollections->create([
            'name' => $this->name,
        ]);

        $this->name = null;

        $this->collections = $qbCollections->paginate(12);
    }
}
