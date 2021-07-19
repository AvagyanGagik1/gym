<?php


namespace App\Http\Controllers\helper;


use DOMDocument;
use Illuminate\Support\Facades\Http;

trait ParseYoutubeLink
{
    public function youTubeImage ($videoLink){
        parse_str( parse_url( $videoLink, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['v'];
    }

    public function youtubeVideoName($vidId)
    {
        $url = "https://youtube.googleapis.com/youtube/v3/videos?part=snippet&id=".$vidId."&key=AIzaSyCKS9JT-jqnThIAL-Q2XQDyDSHzAGu8HKY";
        $response = Http::get($url);
        return $response['items'][0]['snippet']['title'];
    }
}
