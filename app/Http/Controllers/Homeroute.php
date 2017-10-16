<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homeroute extends Controller
{
    public function wel(){
    	return view('welcome');
    }

    public function admin(){
    	return view('admin/index');
    }

   public function create(){
    	return view('admin/student/create');
    }

    public function index(){
    	return view('admin/student/index');
    }

}
