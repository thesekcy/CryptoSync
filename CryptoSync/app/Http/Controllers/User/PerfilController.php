<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Perfil\Perfil;
use App\Http\Requests\Perfil\PerfilFormRequest;

class PerfilController extends Controller
{
	private $perfil;

	public function __construct(Perfil $perfil)
	{
		$this->perfil = $perfil;
	}

    public function index()
    {
    	$perfils = $this->perfil->where('id_users',auth()->guard('web')->user()->id )->first();
    	
    	return view('user.perfil.index',compact('perfils'));
    }

    public function store(PerfilFormRequest $request)
    {
    	// Pega todos os dados que vem do Formulario
    	$dataForm = $request->all();

    	// Converte a data do form d-m-yyyy para yyyy-m-d padrão do mysql
    	$dataForm['dtNasc'] = date('Y-m-d', strtotime($dataForm['dtNasc']));

    	// Cadastrar no Banco de dados as informação do formulario
    	$insert = $this->perfil->create($dataForm);

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
    	$perfils = $this->perfil->find($id);
    	return view('user.perfil.index',compact('perfils'));
    }
}