<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function auth(Request $req) {
        if (Auth::attempt(['email'=>$req->email, 'password'=>$req->password])) {
            //jika ada nilai lain selain data user yang ingin disimpan di session, baru gunakan session disini
            return redirect('/products');
        }
        return redirect('/login')->with('error', 'Email / password salah');
    }  
}