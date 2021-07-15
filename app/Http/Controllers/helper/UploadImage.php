<?php


namespace App\Http\Controllers\helper;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait UploadImage
{
    /**
     * upload image
     * @param string $path
     * @param $image
     * @param string|null $color
     * @return string
     */
    public function uploadImage(string $path, $image, string $color = null): string
    {
        $filename = $path . '/' . time() . microtime(true) . '.' . $image->getClientOriginalExtension();
        $image = Image::make($image);

        $width = 500;
        $height = 500;
        $image->width() > $image->height() ? $height = null : $width = null;
        $img = Image::make($image)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->resizeCanvas(500, 500, 'center', false, $color);
        $img->save(public_path($filename));
        return $filename;
    }

    /**
     * remove image
     * @param $image
     * @return bool
     **/
    public function deleteImage($image): bool
    {
        $file = public_path($image);
        if ($file) {
            File::delete($file);
            return true;
        }
        return false;
    }

    public function uploadSliderImage(string $path, $image): string
    {
        $filename = $path . '/' . time() . microtime(true) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path($filename));
        return $filename;
    }
    public function uploadImageDataUrl(string $path, $image): string
    {
        $filename = $path . '/' . time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
        Image::make($image)->resize(300, 400)->save(public_path($filename));
        return $filename;
    }

    /**
     * @param string $path
     * @param $image
     */
    public function imageResizeFit(string $path, $image): string
    {
        $filename = $path . '/' . time() . microtime(true) . '.' . $image->getClientOriginalExtension();
        $image = Image::make($image);
        $img = Image::make($image);
        $img->fit(800,600,function ($constrain){
            $constrain->upsize();
        });
        $img->save(public_path($filename));
        return $filename;
    }

}
