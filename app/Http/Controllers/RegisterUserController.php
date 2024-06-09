<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  public function store()
  {
    $validatedData = request()->validate([
      'first_name' => ['required'],
      'last_name' => ['required'],
      'email' => ['required', 'email'],
      'password' => [
        'required',
        'confirmed',
        Password::min(8)
      ],
    ]);

    $user = User::create($validatedData);

    Auth::login($user);

    return redirect('/jobs');
  }
}
