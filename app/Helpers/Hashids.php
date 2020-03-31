<?php

/** @noinspection PhpUndefinedClassInspection */

use Vinkla\Hashids\Facades\Hashids;

if (!function_exists('hash_encode')) {
    function hash_encode($id, $connection = "main")
    {
        return Hashids::connection($connection)->encode($id);
    }
}

if (!function_exists('hash_decode')) {
    function hash_decode($hid, $connection = "main")
    {
        try {
            return Hashids::connection($connection)->decode($hid)[0];
        } catch (ErrorException $e) {
            return null;
        }
    }
}
