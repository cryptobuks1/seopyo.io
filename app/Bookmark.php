<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bookmark
 *
 * @property int id
 * @property string url
 * @property string title
 * @property string image
 * @property array metadata
 *
 * @package App
 */
class Bookmark extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'title', 'image', 'metadata',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function collections()
    {
        return $this->belongsToMany(Collection::class);
    }
}
