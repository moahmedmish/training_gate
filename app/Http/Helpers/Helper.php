<?php

namespace App\Http\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;


class Helper
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public static function base_url()
    {
        return config('app.url');
    }

    public static function getFilePath($file, $folder, $type = 'images')
    {
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $pathToUpload = public_path() . '/' . $folder;
//        dd($pathToUpload);

        if (!file_exists($pathToUpload)) {
            mkdir($pathToUpload, 0777, true);
            chmod($pathToUpload, 0777);

            @touch($pathToUpload . '/' . 'index.html');

        }
        $fileName = str_replace(' ', '_', $originalName) . '-' . uniqid() . '.' . $extension;

        if (in_array($extension, ['jpg','jpeg','bmp','png'])) {
            $img = Image::make($file);
            $img->save($pathToUpload . '/' . $fileName);
        } elseif (in_array($extension, ['pdf','xls','csv','xlsx','xlt'])) {
            $file->move($pathToUpload, $fileName);
        }

//        dd($pathToUpload . '/' . $fileName);
        return  $folder. '/' . $fileName;
    }
}
