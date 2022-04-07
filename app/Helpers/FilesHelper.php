<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\File;

class FilesHelper
{
    public static function save(string $path, File $file): string
    {
        Storage::disk('s3')->put($path, $file);

        return  $path . '/' . $file->hashName();
    }
}
