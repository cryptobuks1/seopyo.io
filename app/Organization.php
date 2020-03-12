<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Organization
 *
 * @package App
 */
class Organization extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function collections()
    {
        return $this->morphMany(Collection::class, 'owner');
    }
}
