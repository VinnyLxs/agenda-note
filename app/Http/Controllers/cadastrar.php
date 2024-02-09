<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarModel;

class cadastrar extends Controller
{
    public function index()
    {
        $dados = cadastrarModel::all();

        return view('paginas.cadastrarTarefa')->With('dados',$dados);
    }

    public function store(Request $request)
    {
        $nomeUsuario     = $request->input('nome');
        $telefoneUsuario = $request->input('telefone');
        
        $model = new cadastrarModel();
        $model->nome = $nomeUsuario;
        $model->telefone = $telefoneUsuario;
        $model->save();

        return redirect('/cadastrarTarefa');
    }  

    public function consultar()
    {
        $ids = cadastrarModel::all();

        return view('paginas.consultar', compact('ids'));
    }

    public function editar($id)
    {
        $dado = cadastrarModel::findOrFail($id);

        return view('paginas.editar', compact('dado'));
    }

    public function atualizar(Request $request, $id)
    {
        cadastrarModel::where('id',$id)->update($request->all());

        return redirect('consultar');
    }

    public function excluir(Request $request, $id)
    {
        cadastrarModel::where('id',$id)->delete($request->all());

        return redirect('consultar');
    }


  
  
}