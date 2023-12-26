<?php

namespace App\Http\Controllers;
use App\Models\SignUp;
use Illuminate\Http\Request;

class nsignupcontrollerlogi extends Controller
{
    public function store(Request $request) {
        $signup = new SignUp;
        $signup->username = $request->input('Username');
        $signup->email = $request->input('Email'); 
        $signup->password = $request->input('Password');   
        $signup->save();
        return redirect('/landingpg'); 
}
}
