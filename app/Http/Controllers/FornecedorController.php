<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
                0 => [
                 'nome' => 'fornecedor1',
                 'status' => 'online',
                 'ddd' => '11',                 //são paulo (S)
                 'telefone' => '8454-1234'
                ],
                1 => [
                 'nome' => 'fornecedor2',
                 'status' => 'offline',
                 'ddd' => '85',                //fortaleza 
                 'telefone' => '3215-8845'
                ],
                2 => [
                    'nome' => 'fornecedor3',
                    'status' => 'online',
                    'ddd' => '48',
                    'telefone' => '0000-0000' // floripa
                ],
                3 => [
                    'nome' => 'fornecedor4',
                    'status' => 'offline',
                    'ddd' => '32',
                    'telefone' => '1645-2202' // juiz de fora
                   ],
            
                
                
            
    
    ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
