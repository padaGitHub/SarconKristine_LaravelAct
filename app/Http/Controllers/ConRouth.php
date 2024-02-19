<?php

namespace App\Http\Controllers;
use App\Http\Middleware\verifyAgeMiddleware;
use App\Models\modelSave;
use Illuminate\Http\Request;

class ConRouth extends Controller
{
    public function login(){
        return view(view: 'login');
    }
    public function checkverfication(){
        return view(view: 'checkverfication');
    }

    public function dashboard(){
        return view(view: 'dashboard');
    }

    public function register(){
        return view(view: 'register');
    }
    public function welcome(){
        return view(view: 'welcome');
    }

    public function saveData(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',

        ]);

        $dataRegister = modelSave::create($data);

        return redirect(route('login'));
    }
}
