<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
       $users=[
            ['id'=>'1','Nom'=>'NAJIB','Prenom'=>'AZMI'],
            ['id'=>'2','Nom'=>'HAMZA','Prenom'=>'BERCHIL'],
            ['id'=>'3','Nom'=>'MOUAD','Prenom'=>'BOURABAA'],
            ['id'=>'4','Nom'=>'MOHAMED','Prenom'=>'NAJID'],
       ];
        return view('home',compact('users'));
    }
}
