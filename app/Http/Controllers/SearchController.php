<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){

    	return view('search');
    }
    public function staff(){

    	return view('pubs.staff');
    }
}
