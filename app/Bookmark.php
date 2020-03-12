<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bookmark
 *
 * @package App
 */
class Bookmark extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function collections()
    {
        return $this->belongsToMany(Collection::class);
    }
}
