<?php


namespace App\Http\Controllers\helper;


trait ParseYoutubeLink
{
    public function youTubeImage ($videoLink){
        parse_str( parse_url( $videoLink, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['v'];
    }
}
