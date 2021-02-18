<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
      return view('auth.register');
    }

    public function store(Request $request)
    {
      // validate user
      $this->validate($request, [
        'name' => 'required|max:255',
        'username' => 'required:255',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed', /* Confirms password match */
      ]);

      // store user
      User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password), /* Hash is a facade that allows us to hash passwords */
      ]);

      // sign in user
      auth()->attempt($request->only('email', 'password'));

      // redirect user
      return redirect()->route('dashboard');

    }
}