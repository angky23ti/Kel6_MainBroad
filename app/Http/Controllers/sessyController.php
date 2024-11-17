<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessyController extends Controller
{
    public function index(){
        return view('sessyData');
    }
}
