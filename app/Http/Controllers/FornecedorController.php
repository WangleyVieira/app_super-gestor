<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index ()
    {
        try{
            $fornecedores = [
                0 => [
                    'nome' => 'Fornecedor 1',
                    'status' => 'N',
                    'cnpj' => '00.000.000/000-00',
                    'ddd' => '11', //SP
                    'telefone' => '0000-0000'
                ],
                1 => [
                    'nome' => 'Fornecedor 2',
                    'status' => 'S',
                    'ddd' => '85', //CE
                    'telefone' => '0000-0000'
                ],
                2 => [
                    'nome' => 'Fornecedor 2',
                    'status' => 'S',
                    'ddd' => '32', //MG
                    'telefone' => '0000-0000'
                ]
            ];

            return view('app.fornecedor.index', compact('fornecedores'));

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
