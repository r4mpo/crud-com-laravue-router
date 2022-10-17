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
        try {
            Contato::create($request->all());
            return response()->json(['mensagem' => 'Contato cadastrado com sucesso!']);    
        } catch(\Exception $e) {
            return response()->json(['mensagem' => 'Não foi possível cadastrar o contato.']);    
        }
    }

    public function show($id)
    {
        try {
            return response()->json(['contato' => Contato::findOrFail($id)]);
        } catch (\Exception $e) {
            return response()->json(['mensagem' => 'Não foi possível recuperar o contato.']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            Contato::findOrFail($id)->update($request->all());
            return response()->json(['mensagem' => 'Contato atualizado com sucesso!']);    
        } catch (\Exception $e) {
            return response()->json(['mensagem' => 'Não foi possível atualizar o contato.']);
        }
    }

    public function destroy($id)
    {
        try {
            Contato::findOrFail($id)->delete();
            return response()->json(['mensagem' => 'Contato excluído com sucesso!']);
        } catch (\Exception $e) {
            return response()->json(['mensagem' => 'Não foi possível excluir o contato.']);
        }
    }
}
