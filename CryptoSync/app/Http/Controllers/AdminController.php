<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function _constructor()
    {
    	# code...
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function login()
    {
    	return view('auth.login-adm');
    }

    public function postLogin(Request $request)
    {
        $validator = validator($request->all() ,[
            'email'=>'required|min:3|max:100',
            'password'=>'required|min:3|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('admin/login')
                ->withERRORS($validator)
                ->withInput();
        }

        $credenciais = ['email'=> $request->get('email'),'password'=>$request->get('password')];

        if (auth()->guard('admin')->attempt($credenciais)) {
            return redirect('admin');
        }else{
            return redirect('admin/login')
                ->withERRORS(['erros'=>'Login Invalido!'])
                ->withInput();
        }
    	
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }
}
