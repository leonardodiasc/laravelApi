<?php

namespace App\Http\Controllers;

class CadastroAnuidadesController
{
    public function index(Request $request){
        return view('cadastroAnuidades');
    }
}
