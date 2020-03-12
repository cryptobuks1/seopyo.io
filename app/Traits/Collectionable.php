<?php

namespace App\Traits;

/**
 * Trait Collectionable
 *
 * @package App\Traits
 */
trait Collectionable {

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function toCollection()
    {
        if (!method_exists(self::class, 'getLabels')) return collect();

        return collect(self::getLabels())->map(function ($label, $value){
            return (object) [
                'value' => $value,
                'label' => $label,
            ];
        });
    }
}
