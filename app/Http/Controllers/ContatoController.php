<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

      $motivo_contatos = MotivoContato::all();
        

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);

    }

    public function salvar (Request $request) {
      // salvar 
      $request->validate([
        'nome' => 'required|min:3|max:40',
        'telefone' => 'required',
        'email' => 'email',
        'motivo_contatos_id' => 'required',
        'mensagem' => 'required|max:1000'
      ]);
      SiteContato::create($request->all());
      return redirect()->route('site.index');
    }
}
