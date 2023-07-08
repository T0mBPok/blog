<?php

namespace App\Http\Controllers;

use App\Models\enrollees;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class MainController extends Controller
{
    public function login(){
        return view('login');
    }


    public function sign(){
        return view('sign');
    }
    
    public function user(Request $request) {
        
    }

    public function login_check(Request $request){

    }

    public function sign_check(Request $request){
        // $valid = $request->validate([
        //     'email' => 'required|min:4|max:100', 
        //     'name' => 'required|min:3', 
        //     'username' => 'required|min:3', 
            
        // ]);

        $sign = new enrollees();
        $sign -> email = $request->input('email');
        $sign -> surname = $request->input('surname');
        $sign -> name = $request->input('name');
        $sign -> surname_2 = $request->input('surname_2');

        $sign->save();

        return redirect('user');
    }
}
