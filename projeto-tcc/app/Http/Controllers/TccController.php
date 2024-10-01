<?php

namespace App\Http\Controllers;

use App\Models\BusioClientes;
use Illuminate\Http\Request;


class TccController extends Controller
{
    // pag inicial de serviços
public function index(){
    $clientes=BusioClientes::all();
    return view('cadastros.index', compact('clientes'));

}

//pag do formulário cadastro
public function cadastro(){
    return view('cadastros.cadastro');
}

public function login(){
    return view('cadastros.login');
}


//rota com ação de salvar um serviço
public function recCadastro(Request $request){
    BusioClientes::create(
        $request->all()
    );
    return redirect('/cadastros'); 
}

}
