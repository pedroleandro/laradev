<?php

namespace App\Support;

class Cropper
{
    public static function thumb(string $uri, int $width, $height = null)
    {
        $cropper = new \CoffeeCode\Cropper\Cropper('/cache');

        return $cropper->make(
            config('filesystems.disks.public.root') . '/' . $uri,
            $width,
            $height
        );
    }
}
