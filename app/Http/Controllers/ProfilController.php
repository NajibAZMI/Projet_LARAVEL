<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRquest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class ProfilController extends Controller
{
    public function index(){
       $profiles=Profile::paginate(10); 
        return view('profile\profile',compact('profiles'));
    }
    public function show(Profile $profile){//Route model binding
        // $id=(int)$request->id ; 
        // $profile=Profile::findOrFail($id);
        
         //dd($profile);
        return view('profile\show',compact('profile'));
    }
    public function create(){
        return view('profile\create');
    }

    public function store(ProfileRquest $request){
        

        $formFields=$request->validated();
         $password=$formFields['password'];
         $formFields['password']=Hash::make($password);
       
        //INSERTION
        Profile::create($formFields);
        return redirect()->route('profilename')->with('success','Votre Compte est bien crée');
    }
    public function Supprimer(Profile $profile){
        $profile->delete();
        return to_route('profilename')->with('success','Compte a etait Supprimer ');
    }

    public function edit(Profile $profile){
             return view('profile\edit',compact('profile'));
    }

    public function update(ProfileRquest $request,Profile $profile){
        $table=$request->validated();
        $profile->fill($table)->save();
        return to_route('profilename')->with('success','Compte a été bien modifié');
    }
}
