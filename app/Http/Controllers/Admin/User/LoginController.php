<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    }
}
