<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastroOrcamento(UsuarioRequest $request)
    {
        Orcamento::create($request->all());

        return redirect()->back();
    }
}
