<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Contracts\Service\Attribute\Required;

class Usercontroller extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);
        if(auth()->attempt(['name'=>$incomingFields['loginname'],'password' =>$incomingFields['loginpassword']])){
            $request->session()->regenerate();
        }

        return redirect('/');
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
    public function register (Request $request){
        $incomingFields = $request ->validate ([
            'name' => ['required', 'min:3', 'max:20', Rule::unique('users','name')],
            'email' => ['required', 'min:11', 'max:30', Rule::unique('users','email')],
            'phone' => ['required', 'min:6', 'max:13'],
            'password' => ['required', 'min:8']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);

        auth()->login($user);
        return redirect('/');


    }
}
