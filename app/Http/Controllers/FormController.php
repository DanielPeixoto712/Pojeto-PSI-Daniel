<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function loginForm(){
    	return view('login');
    }

    public function mostrarForm(){
    	return view('contactos');
    }

    public function empresaForm(){
        return view('empresa');
    }

    public function ondeForm(){
        return view('onde');
    }

    public function noticiasForm(){
        return view('noticias');
    }

    public function processarForm(Request $request)
    {
    $nome=$request->nome;
    $morada=$request->morada;
    $telemovel=$request->telemovel;


    return view('form-enviado' ,[
    	'nome'=>$nome,
    	'morada'=>$morada,
    	'telemovel'=>$telemovel
     
    ]);

}
    public function index(){
    return view('entrada');
}

 public function turbosForm(){
        return view('turbos');
    }
}


 


?>
    