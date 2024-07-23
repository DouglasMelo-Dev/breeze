<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function store(Request $request)
    {
        $created = $this->user->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        if($created){
            return redirect()->back()->with('message', 'Usuário cadastrado com sucesso!');
        }else{
            return redirect()->back()->with('message', 'Erro: Usuário não foi cadastrado.');
        }
    }

}
