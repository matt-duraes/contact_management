<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();

        return view('home.index', [
            'contatos' => $contatos
        ]);
    }

    public function create()
    {
        return view('contato.create');
    }
    
    public function store(Request $request)
    {
        $dados = $this->validate($request, [
            'nome' => 'required|min:5',
            'email' => 'required|email|unique:contatos|max:9',
            'contato' => 'required|max:255',
        ]);

        $contato = Contato::create($dados);

        return redirect('/')->with('msg', "{$contato->nome} cadastrado com sucesso!");
    }

    public function show($id)
    {
        try {
            $contato = Contato::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return redirect('/')->with('error', 'Contato não encontrado!');
        }

        return view ('contato.show', [
            'contato' => $contato
        ]);
    }

    public function destroy(string|int $id)
    {
        if (!$contato = Contato::find($id)) {
            return redirect('/')->with('error', 'Contato não encontrado!');
        }
        $contato->delete();

        return redirect('/')->with('msg', "Contato Deletado com sucesso!");
    }

    public function edit($id)
    {
        $contato = Contato::findOrFail($id);
        return view('contato.edit',[
            'contato' => $contato
        ]);
    }

    public function update(Request $request)
    {
        $dados = $this->validate($request, [
            'nome' => 'required|max:255',
            'email' => "required|email|unique:contatos,email,{$request->id},id",
            'contato' => "required|max:255|unique:contatos,contato,{$request->id},id",
        ]);
        Contato::findOrFail($request->id)->update($dados);

        return redirect('/')->with('msg', 'Contato editado com sucesso!');
    }

}