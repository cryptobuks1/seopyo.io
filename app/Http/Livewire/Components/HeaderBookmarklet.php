<?php

namespace App\Http\Livewire\Components;

use Exception;
use App\Bookmark;
use Livewire\Component;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class HeaderBookmarklet
 *
 * @package App\Http\Livewire\Components
 */
class HeaderBookmarklet extends Component
{
    /**
     * @var string
     */
    public $url = 'https://youtube.com';
    /**
     * @var string
     */
    public $collection_name;
    /**
     * @var \App\Bookmark
     */
    public $bookmark;
    /**
     * @var \Illuminate\Database\Eloquent\Collection
     */
    public $collections;

    /**
     * @return array
     */
    private function getValidationRules()
    {
        return [
            'url' => 'required|url|active_url',
        ];
    }

    /**
     * @param $field
     */
    public function updated($field)
    {
        //        $this->validateOnly($field, $this->getValidationRules());
    }

    /**
     * Create bookmark from typed url
     *
     * @noinspection PhpUnused
     */
    public function submit()
    {
        $validatedData = $this->validate($this->getValidationRules());
        $bookmark      = Bookmark::where($validatedData)->first();
        if (!$bookmark) {
            $bookmark = new Bookmark();
            $bookmark->fill($validatedData);

            if (!$bookmark->save()) {
                throw new HttpException(400, 'Bookmark failed to save!');
            }
        }

        $this->bookmark = $bookmark;

        $this->collections = auth()->user()->collections;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.components.header-bookmarklet');
    }

    /**
     * Add bookmark to selected collection
     *
     * @param int $collectionId
     *
     * @noinspection PhpUnused
     */
    public function addToCollection(int $collectionId)
    {
        /** @var \Illuminate\Database\Eloquent\Relations\MorphMany $userCollections */
        /** @var \Illuminate\Database\Eloquent\Relations\BelongsToMany $userBookmarks */

        try {
            $userCollections = auth()->user()->collections();
            $collection      = $userCollections->findOrFail($collectionId);

            $userBookmarks = $collection->bookmarks();
            $userBookmarks->attach($this->bookmark);
        } catch (Exception $e) {
            throw new HttpException(400, 'Bookmark cannot be added to collection!');
        }
    }

    /**
     * Create collection and add bookmark to this collection
     *
     * @noinspection PhpUnused
     */
    public function addToNewCollection()
    {
        /** @var \Illuminate\Database\Eloquent\Relations\MorphMany $userCollections */
        /** @var \Illuminate\Database\Eloquent\Relations\BelongsToMany $userBookmarks */

        try {
            $userCollections = auth()->user()->collections();
            $collection      = $userCollections->create(['name' => $this->collection_name]);

            $userBookmarks = $collection->bookmarks();
            $userBookmarks->attach($this->bookmark);

            $this->collections->push($collection);
            $this->collection_name = null;
        } catch (Exception $e) {
            throw new HttpException(400, 'Bookmark cannot be added to new collection!');
        }
    }

    /**
     * Remove bookmark from selected collection
     *
     * @param int $collectionId
     *
     * @noinspection PhpUnused
     */
    public function removeFromCollection(int $collectionId)
    {
        /** @var \Illuminate\Database\Eloquent\Relations\MorphMany $userCollections */
        /** @var \Illuminate\Database\Eloquent\Relations\BelongsToMany $userBookmarks */

        try {
            $userCollections = auth()->user()->collections();
            $collection      = $userCollections->findOrFail($collectionId);

            $userBookmarks = $collection->bookmarks();
            $userBookmarks->detach($this->bookmark);
        } catch (Exception $e) {
            throw new HttpException(400, 'Bookmark cannot be removed from collection!');
        }
    }

    /**
     * Reset state
     *
     * @noinspection PhpUnused
     */
    public function resetState()
    {
        $this->bookmark = null;
    }
}
