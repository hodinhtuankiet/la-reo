<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Import the Session facade


class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Login',
        ]);
    }

    public function store(Request $request)
    {
        // get all input fields
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        // check nhập vào có khớp với data không
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            // Authentication successful, you can add your logic here
            return redirect()->route('admin');
        }
        Session::flash('error', 'Tài khoản hoặc mật khẩu không đúng');
        return redirect()->back();
    }
}
