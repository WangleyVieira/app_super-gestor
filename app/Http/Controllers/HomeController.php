<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function principal()
    {
        try{
            return view('site.principal');
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    public function sobreNos()
    {
        try{
            return view('site.sobre-nos');
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
    public function contato()
    {
        try{
            return view('site.contato');
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
