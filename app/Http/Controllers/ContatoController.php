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
      $regras = [
        'nome' => 'required|min:3|max:40|unique:site_contatos',
        'telefone' => 'required',
        'email' => 'email',
        'motivo_contatos_id' => 'required',
        'mensagem' => 'required|max:1000'
      ];

      $feedback = [
        'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
        'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
        'nome.unique' => 'O nome informado já está em uso',
        'email.email' => 'O E-mail informado não é válido',
        'mensagem.max' => 'A mensagem deve conter no máximo 1000 caracteres',

        'required' => 'O campo :attribute deve ser preenchido'
      ];

      $request->validate($regras, $feedback);
      SiteContato::create($request->all());
      return redirect()->route('site.index');
    }
}
