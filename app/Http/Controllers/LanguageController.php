<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class LanguageController extends Controller
{
    public function switchLang(string $lang): RedirectResponse
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('appLocale', $lang);
        }
        return Redirect::back();
    }
}
