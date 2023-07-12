<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register', [
            'title' => 'Register Page'
        ]);
    }

    public function store(RegisterRequest $request, User $user)
    {
        $attr = $request->all();
        $attr['password'] = Hash::make($request->password);

        User::create($attr);
        return redirect('/login');
    }
}
