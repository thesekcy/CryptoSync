<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Perfil\Perfil;
use App\Model\Contratos\Contrato;
use App\Http\Requests\Contrato\ContratoFormRequest;


class ContratoController extends Controller
{
	private $perfil;
	private $contrato;

	public function __construct(Perfil $perfil,Contrato $contrato)
	{
		$this->perfil   = $perfil;
		$this->contrato = $contrato;
	}

    public function index(Request $request)
    {
    	$perfils = $this->perfil->where('id_users',auth()->guard('web')->user()->id )->first();

    	//$valor = $request->cpf_cnpj_Contratante;

    	$query = $this->perfil->all();
    	
    	return view('user.contrato.index',compact('perfils','query'));
    }

    public function store(ContratoFormRequest $request)
    {
    	// Pega todos os dados que vem do Formulario
    	$dataForm = $request->all();

		$dataForm['valor'] = str_replace('.', '', $dataForm['valor']);
		$dataForm['valor'] = str_replace(',', '', $dataForm['valor']);

    	// Cadastrar no Banco de dados as informação do formulario
    	$insert = $this->contrato->create($dataForm);

    }

    public function list()
    {
    	$contrato = $this->contrato->select( 
										'A.nmCompleto AS A_nome',
									    'A.nascionalidade AS A_nacionalidade',
									    'A.estCivil AS A_estCivil',
									    'A.proficao AS A_proficao',
									    'A.rg_ie AS A_rg',
									    'A.cpf_cnpj AS A_cpf',
									    'A.end AS A_end',
									    'A.bairro AS A_bairro',
									    'A.cep AS A_cep',
									    'A.cidade AS A_cidade',
									    'A.estado AS A_estado',
									    'B.nmCompleto AS B_nome',
									    'B.nascionalidade AS B_nacionalidade',
									    'B.estCivil AS B_estCivil',
									    'B.proficao AS B_proficao',
									    'B.rg_ie AS B_rg',
									    'B.cpf_cnpj AS B_cpf',
									    'B.end AS B_end',
									    'B.bairro AS B_bairro',
									    'B.cep AS B_cep',
									    'B.cidade AS B_cidade',
									    'B.estado AS B_estado',
										'valor',
										'prazo',
										'servico',
										'contrato'
    	 							)
                                   ->join( 'perfils as A',   'A.id' ,  '=' , 'contratos.id_contratante' )
                                   ->join( 'perfils as B'  , 'B.id' ,  '=' , 'contratos.id_contratado'  )
                                   ->where('id_contratante',auth()->guard('web')->user()->id) 
                                   ->get();

    	return view('user.contrato.list',compact('contrato'));
    }
}