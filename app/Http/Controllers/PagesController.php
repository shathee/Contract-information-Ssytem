<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

    	return view('pages.index');
    }

    public function whatWeDo(){

    	return view('pages.whatwedo');
    }

    public function staff(){

    	return view('pages.staff');
    }

  
    public function contact(){

        return view('pages.contact');
    }
 
}
