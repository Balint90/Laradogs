<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function getTokens() {
        
        return redirect('/');
    }

    public function generateToken()
    {
        //user logged in
        if (Auth::check()) {
            $user = Auth::user();

            $expires = now()->addMinutes(10);
        
            $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete'], $expires);
            $updateToken = $user->createToken('update-token', ['create', 'update'], $expires);
            $basicToken = $user->createToken('basic-token', ['none'], $expires);
        
                // return [
                //     'admin' => $adminToken->plainTextToken,
                //     'update' => $updateToken->plainTextToken,
                //     'basic' => $basicToken->plainTextToken,
                // ];
        }
        // user not logged in
        
        return redirect('/');
    }
}
