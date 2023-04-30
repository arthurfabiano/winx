<?php

namespace App\Http\Controllers;

use App\Services\CepService;
use Illuminate\Http\Request;

class CepController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($cep, CepService $cepService)
    {
        return $cepService->consultar($cep);
    }
}
