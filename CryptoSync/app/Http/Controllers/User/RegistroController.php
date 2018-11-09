<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Perfil\RegistroFormRequest;
use App\Model\Perfil\Registro;

class RegistroController extends Controller
{

    private $Registro;

    public function __contruct(Registro $registro){
        $this->Registro = $registro;
    }
    //
    public function index(){
        return view('user.perfil.registro');
    }

    public function read(RegistroFormRequest $request){

        $dataForm = $request->all();
        dd($dataForm);

        $insert = $this->Registro->create($dataForm);
    } 
}
