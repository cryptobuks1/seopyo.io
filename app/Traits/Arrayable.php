<?php

namespace App\Traits;

/**
 * Trait Arrayable
 *
 * @package App\Traits
 */
trait Arrayable {

    /**
     * @return array
     */
    public static function toArray()
    {
        if (!method_exists(self::class, 'getLabels')) return [];

        return collect(self::getLabels())->map(function ($label, $value){
            return (object) [
                'value' => $value,
                'label' => $label,
            ];
        })->toArray();
    }
}
