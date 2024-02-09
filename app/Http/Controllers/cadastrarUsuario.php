<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    public function index()
    {
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar', compact('dados'));

    }//fim do metodo index
    public function home(){
        
        return view('paginas.home'); 

    }//fim do metodo index


    public function store(Request $request){
        $cadastrarTarefa = $request->input('nomeTarefa');
        $descTarefa = $request->input('descTarefa');

        $model = new cadastrarUsuarioModel();
        $model->cadastrar = $cadastrarTarefa;
        $model->tarefa = $descTarefa;
        $model->data_hora = $request->input('data_hora');
        $model->save();//Armazenar dados

        return redirect('/consultar'); 
    } 
    public function consultar(){
        $dados = cadastrarUsuarioModel::all();
     
        return view('paginas.consultar', compact('dados'));
    }
}
