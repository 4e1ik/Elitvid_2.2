<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()){
            if (Auth::user()['is_admin'] == true) {
                return redirect(route('admin'));
            }
        }
        return view('includes.elitvid.admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    public function login(Request $request){
        if (Auth::check()){
            if (Auth::user()['is_admin'] == true) {
                return redirect(route('admin'));
            }
        }

        $arr_data = [
            'email' => $request->all()['email'],
            'password' => $request->all()['password'],
        ];

        if (Auth::attempt($arr_data)){
            if (Auth::user()['is_admin'] == true){
                return redirect(route('admin'));
            }
        }

        return redirect(route('login'))->withInput();
    }
}
