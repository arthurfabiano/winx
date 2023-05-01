<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutheticationController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function getUserEmail($email)
    {
        return User::where('email', $email)->get();
    }

    public function logar(Request $request)
    {
        $dados = $request->validate([
            'email' => 'required',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($dados)) {
            $request->session()->regenerate();

            $user = User::where('email', $dados['email'])->first();
            $orcamento = Orcamento::where('user_id', $user['id'])->first();

            return redirect()->route('show.orcamento', $orcamento);
        }

        return redirect()->back()->withErrors([
            'email' => 'O email e/ou senha não são válidos!'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login');
    }
}
