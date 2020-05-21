<?php

namespace App\Http\Controllers;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
class AdminsController extends Controller
{
    //

    public function index(){

        return view('admin.index');
    }


    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
