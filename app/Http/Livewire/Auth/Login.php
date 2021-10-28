<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;


    public function login(Request $request){

        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            
            return redirect('/students');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    
    }    

    public function render()
    {
        return view('livewire.auth.login');
    }
}

