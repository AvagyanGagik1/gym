<?php


namespace App\Http\Controllers\helper;
use Intervention\Image\Facades\Image;


trait CreateUserImage
{
    public function createUserImage(string $text): string
    {
//        return public_path('/fonts/RobotoMono.ttf');
        $img = Image::canvas(50, 50, '#f8bbd0');
        $img->text($text, 25, 15, function($font) {
            $font->file(public_path('/fonts/RobotoMono.ttf'));
            $font->color('#FFFFFF');
            $font->size(24);
            $font->align('center');
            $font->valign('top');
        });
        $img->save(public_path('/images/avatar/'.microtime().'.png'));
        return '/images/avatar/'.$img->filename.'.png';
    }
}
