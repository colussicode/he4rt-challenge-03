<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\FuckingUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FuckingUsersController extends Controller
{
    public function initCreateUser()
    {
        return view('create_user');
    }

    public function initLogin()
    {
        return view('login');
    }

    public function createUser(CreateUserRequest $request)
    {
        $payload = [
            'email' => $request->email,
            'password' => $request->password
        ];

         FuckingUser::create($payload);

        return redirect('/');
    }

    public function authUser(Request $request)
    {
        $payload = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($payload))
        {
            $request->session()->generate();

        }
        return redirect('dashboard');
    }
}
