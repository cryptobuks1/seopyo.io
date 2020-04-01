<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Collection
 *
 * @package App
 */
class Collection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'icon_image', 'cover_image',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bookmarks()
    {
        return $this->belongsToMany(Bookmark::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function owner()
    {
        return $this->morphTo();
    }

    /**
     * @param \App\Bookmark $bookmark
     *
     * @return bool
     *
     * @noinspection PhpUnused
     */
    public function hasBookmark(Bookmark $bookmark)
    {
        return $this->bookmarks()->where('id', $bookmark->id)->count() > 0;
    }
}
