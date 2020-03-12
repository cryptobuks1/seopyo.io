<?php

namespace App\Enums;

use App\Traits\Arrayable;
use App\Traits\Collectionable;

class UserStatus
{
    use Arrayable, Collectionable;

    const ACTIVE = 1;
    const PASSIVE = 2;
    const WAITING_ACTIVATION = 3;

    public static function getLabels()
    {
        return [
            self::ACTIVE => trans('Aktif'),
            self::PASSIVE => trans('Pasif'),
            self::WAITING_ACTIVATION => trans('Aktivasyon Bekliyor'),
        ];
    }
}
