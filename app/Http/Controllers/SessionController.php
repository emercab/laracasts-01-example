<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
  public function create()
  {
    return view('auth.login');
  }


  public function store()
  {
    $dataValidated = request()->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (!Auth::attempt($dataValidated)) {
      throw ValidationException::withMessages([
        'email' => 'Your provided credentials could not be verified.',
      ]);
    }

    request()->session()->regenerate();

    return redirect('/jobs')->with('status', 'You are now logged in');
  }


  public function destroy()
  {
    Auth::logout();

    return redirect('/')->with('status', 'You are now logged out');
  }
}
