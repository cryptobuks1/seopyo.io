<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait Hashidable
{
    /**
     * Retrieve the model for a bound value.
     *
     * @param string|int $value
     *
     * @return Model|null
     *
     * @noinspection PhpUnused
     */
    public function resolveRouteBinding($value)
    {
        return $this->findOrFail($this->resolveId($value));
    }

    /**
     * Check if the model needs to be booted and if so, do it.
     *
     * @return void
     *
     * @noinspection PhpUnused
     */
    public function bootIfNotBooted() : void
    {
        $this->appends[] = 'hid';

        parent::bootIfNotBooted();
    }

    /**
     * @param string $value
     *
     * @return int
     */
    public function resolveId(string $value) : int
    {
        return hash_decode($value, get_class($this)) ?: 0;
    }

    /**
     * @return string
     *
     * @noinspection PhpUnused
     */
    public function getHidAttribute() : string
    {
        return hash_encode($this->id, get_class($this));
    }

    /**
     * @param string $hid
     *
     * @return Model
     *
     * @noinspection PhpUnused
     */
    public function findByHid(string $hid) : Model
    {
        return $this->find($this->resolveId($hid));
    }
}
