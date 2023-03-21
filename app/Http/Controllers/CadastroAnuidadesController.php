<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CadastroAnuidadesController
{
    public function index(Request $request){
        return view('cadastroAnuidades');
    }
}
