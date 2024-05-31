<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;

class PersonagemController extends Controller
{
    public function index()
    {
        $personagens = Personagem::all();
        return view('personagens.index', compact('personagens'));
    }

    public function create()
    {
        return view('personagens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'imagem' => 'required|url',
            'historia' => 'required|string'
        ]);

        Personagem::create($request->all());

        return redirect()->route('personagens.index')->with('success', 'Personagem criado com sucesso!');
    }
    public function destroy($id)
    {
        $personagem = Personagem::findOrFail($id);
        $personagem->delete();

        return redirect()->route('personagens.index')->with('success', 'Personagem deletado com sucesso!');
    }
    public function edit($id)
    {
        $personagem = Personagem::findOrFail($id);
        return view('personagens.edit', compact('personagem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        ]);

        $personagem = Personagem::findOrFail($id);
        $personagem->update($request->all());

        return redirect()->route('personagens.index')->with('success', 'Personagem atualizado com sucesso.');
    }
}
