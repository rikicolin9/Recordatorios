<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarRecordatorio;
use Illuminate\Http\Request;

class controladorVista extends Controller
{
    //
    public function procesarRecordatorio(validarRecordatorio $req){
        return redirect('Registro')->with('echo','Se guardo Correcto');


    }

    public function showIngresar(){
        return view('registro');
        
    }

    public function showRecordatorios(){

        return view('recordatorios');
    }
}
