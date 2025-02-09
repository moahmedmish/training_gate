<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\SessionServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function changeLang($lang)
    {
        App::setLocale($lang);
        Session::put("locale", $lang);
        return redirect()->back();
    }

}
