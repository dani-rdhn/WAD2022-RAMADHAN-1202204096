<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class RegisterController extends Controller
{
    public function create()
    {
        return view('product.Register-RAMADHAN');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'password' => 'required|confirmed|min:6',

        ]);
        
        $user = Users::create(request(['name', 'email', 'password', 'no_hp' ]));
        
        auth()->login($user);
        
        return redirect()->to('/login');
    }
} 
 
 
 
 
 
 
 
 
 
 
 
 
 
