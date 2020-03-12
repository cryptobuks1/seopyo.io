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
}
