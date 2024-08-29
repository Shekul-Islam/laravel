<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users=User::with('roles')->get();
        // dd($users);
        // return $users;
        return view('user', compact('users'));
    }

    


}
