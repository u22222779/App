<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LenguajeController extends Controller
{
    public function switchLang($lang){
    	Session::set('applocale', $lang);
    	return Redirect::back();
    }
}