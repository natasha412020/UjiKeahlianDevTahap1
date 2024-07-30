<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('new_session', 'Session Value.');
        $cookie = cookie('example_cookie', 'Cookie value.', 60); // 60 minutes expiration

        return view('dashboard', [
            'session' => $request->session()->get('new_session'),
            'cookie' => $request->cookie('example_cookie')
        ])->withCookie($cookie);
    }
}
