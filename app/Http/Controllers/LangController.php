<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function lang($lang){
        if(in_array($lang,['en','ar'])){
            App::setlocale($lang);
            Session::put('lang',$lang);
        }
        return back();
    }
}
