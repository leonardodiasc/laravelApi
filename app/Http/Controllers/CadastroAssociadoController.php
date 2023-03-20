<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroAssociadoController extends Controller
{
    public function index(Request $request){
        return view('cadastroAssociado');
    }
}