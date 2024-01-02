<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index ()
    {
        try{
            return view('app.fornecedor.index');
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
