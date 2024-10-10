<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.appuser');
    }

    public function admin(){
        return view('admin.admin.updates');
    }

    public function list(){
        $data['getRecord'] = User::getAdmin();
        return view('admin.admin.list',$data);
    }



    
}


