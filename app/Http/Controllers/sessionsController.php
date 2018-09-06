<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class sessionsController extends Controller
{

    public function __construct(){
        // $this->middleware('auth', ['except'=>'destroy']);
    }
      
    public function create()
    {
        return view('session.create');
    }
    public function store()
    {
       
        if ( auth()->attempt(request(['email', 'password']))== false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        else{
            $request=request();
             $users = User::where('email', $request->email)->first();
             $use=$users->is_admin;

            // $users=User::get(['verified']);
           if($use == true) {
             
            // dd($use,'jhgffdh');
            // dd($users->is_admin);
            return redirect('/admin');
           }
           else{
           // dd($users->is_admin,'hellokenya');
           return redirect('/userproposal');
       }
        }
        
        
    }

   
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect('/');
    }
}


