<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

// API que será consumida pelo Vue.Js

class ContatosController extends Controller
{
    public function index()
    {
        return response()->json(['mensagem' => 'Dados resgatados com sucesso!', 'contatos' => Contato::all()]);
    }

    public function store(Request $request)
    {
        Contato::create($request->all());
        return response()->json(['mensagem' => 'Contato cadastrado com sucesso!']);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        Contato::findOrFail($id)->update($request->all());
        return response()->json(['mensagem' => 'Contato atualizado com sucesso!']);
    }

    public function destroy($id)
    {
        Contato::findOrFail($id)->delete();
        return response()->json(['mensagem' => 'Contato excluído com sucesso!']);
    }
}
