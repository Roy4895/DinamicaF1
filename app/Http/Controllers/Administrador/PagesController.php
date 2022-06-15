<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function home(){  
    	return view('administrator.home-admin');
    }
}
