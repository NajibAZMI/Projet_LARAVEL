<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informationsController extends Controller
{
    public function index(){
        return view('account');
    }
}
