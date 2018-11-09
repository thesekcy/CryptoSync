@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
    <style type="text/css">
    .loading {
    	width:100px;
    	height:100px;
    	position:absolute;
    	top:50%;
    	left:50%;
    	margin-top:-50px;
    	margin-left:-50px;
    	z-index: 1000;
    }
    </style>
    @yield('css')
@stop

@section('title', 'Cadastro Dados do Perfil')

@section('content_header')
	<h1>Detalhe do contrato<small>Preview</small></h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-file-text-o"></i> Contrato</a></li>
		<li><a href="#">Contrato</a></li>
    </ol>
@stop

@section('content')
<div class="loading">
	<!--<img id="loader" src="https://loading.io/spinners/double-ring/lg.double-ring-spinner.gif">-->
</div>
<div class="row">
	<div class="col-md-8">
		<!-- Block buttons -->
		<div class="box">
			<div class="box-body">
				<div class="post">
					<div class="user-block">
						<img class="img-circle img-bordered-sm" src="{!! asset('img/user/user7-128x128.jpg') !!}" alt="user image">
						<span class="username">
							<a href="#">{{ $contrato->A_nome }}</a>
						</span>
						<span class="description">
							<strong><i class="fa fa-book margin-r-5"></i> 0x987907687685765876</strong>
						</span>
					</div><!-- /.user-block -->
					<p id="contratante">
						{{ $contrato->A_nome }}, {{$contrato->A_nacionalidade}}, {{$contrato->A_estCivil}}, {{$contrato->A_proficao}}, Carteira de Identidade nº {{$contrato->A_rg}}, C.P.F. nº {{$contrato->A_cpf}}, residente e domiciliado na Rua {{$contrato->A_end}}, bairro {{$contrato->A_bairro}}, Cep {{$contrato->A_cep}}, Cidade {{$contrato->A_cidade}}, no Estado {{$contrato->A_estado}};
					</p>
				</div>
				<div class="post clearfix">
					<div class="user-block">
						<img class="img-circle img-bordered-sm" src="{!! asset('img/user/user1-128x128.jpg') !!}" alt="User Image">
						<span class="username">
							<a href="#">{{ $contrato->B_nome }}</a>
						</span>
						<span class="description">
							<strong><i class="fa fa-book margin-r-5"></i> 0x987907687685765876</strong>
						</span>
					</div><!-- /.user-block -->
					<p id="contratado">
						{{ $contrato->B_nome }}, {{$contrato->B_nacionalidade}}, {{$contrato->B_estCivil}}, {{$contrato->B_proficao}}, Carteira de Identidade nº {{$contrato->B_rg}}, C.P.F. nº {{$contrato->B_cpf}}, residente e domiciliado na Rua {{$contrato->B_end}}, bairro {{$contrato->B_bairro}}, Cep {{$contrato->B_cep}}, Cidade {{$contrato->B_cidade}}, no Estado {{$contrato->B_estado}};
					</p>
				</div>
				<div class="post clearfix">
					<div class="user-block">
						<span class="username">
							<a href="#">Detalhe do contrato</a>
						</span>
					</div><!-- /.user-block -->
					<p id="detalhe">Valor:.R${{ $contrato->valor }}, Pravo Viculo de trabalho:.{{ $contrato->prazo }} dias, Serviço:.{{ $contrato->servico }}</p>
				</div>
			</div>
			<div class="box-footer">
				<a class="btn btn-app" href="{{url("/contrato/list/contrato/print/{$contrato->id}")}}" ><i class="fa fa-print"></i> Print </a>
				<a id="result" class="btn btn-app pull-right" data-toggle="modal" data-target="#modal-default" style="display:none; color:#fff;border: 1px solid #997e07;background-color: #fece00;">	<i class="fa  fa-cogs "></i>Detalhe</a>
				<button type="button" id="deploy" class="btn btn-app pull-right" style="color:#fff;border: 1px solid #27701e;background-color: #00a55a;">	<i class="fa fa-retweet" id="button"></i> Deploy</button>
				<div class="callout callout-success">
					<p id="txt">Preparando Contrato Para Deploy no Etrereum.....</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<!-- Block buttons -->
		<div class="box">
			<div class="box-header">
				<div class="text-center">
					<img src="{!! asset('svg/doc.svg') !!}" class="rounded" style="width: 50%">
				</div>
			</div>
			<div class="box-body">
				<blockquote>
					<p>Smart Contracts</p>
					<small>Um smart contract (ou contrato inteligente), funciona como se fosse um contrato normal firmado entre duas partes, com a diferença de que ele é digital, não pode ser perdido ou adulterado, e é auto-executável. Em resumo, é um contrato que garante a execução de um acordo, utilizando a tecnologia blockchain.</small>
				</blockquote>
			</div>
			<div class="row">
				<div class="box-body">

					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group margin-bottom-none">
								<label>Dono do Contrato</label>
								<input type="text" value=""  id="Hconta" class="form-control input-sm" >
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-12">
							<div class="form-group margin-bottom-none">
								<label>Adress Contrato</label>
								<input type="text" value="" id="Hcontrato" class="form-control input-sm" >
							</div><!-- /.form-group -->
						</div>
					</div>

				</div>
			</div>
		</div><!-- /.box -->
	</div>
</div>
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
				<h4 class="modal-title">Detalhe do contrato</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
                  <label>Contrato address</label>
                  <input type="text" class="form-control" id="adress" value="">
                </div>
                <div class="form-group">
                  <label>Contrato block</label>
                  <input type="text" class="form-control" id="block" value="">
                </div>
                <div class="form-group">
                  <label>Estimativa Gas</label>
                  <input type="text" class="form-control" id="gas" value="">
                </div>
                <div class="form-group">
                  <label>ByteCode</label>
                  <textarea class="form-control" rows="3" id="bytecode" ></textarea>
                </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
@stop

@section('smartwizard_js')
<script src="{{ asset('vendor/site/libs/solc.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/site/libs/web3.min.js') }}"></script>
<script  type="text/javascript" >
	var exampleSource = "pragma solidity ^0.4.18; contract EtecEthereum { string Contratante; string Contratado; string valor; address Hcontrato; address dono; constructor() public{ Hcontrato = msg.sender; } modifier proprietario { require(msg.sender == Hcontrato); _; } event Contrato( string Contratante, string Contratado, string valor, address dono ); function setContrato(string _Contratante, string _Contratado, string _valor) proprietario public { Contratante = _Contratante; Contratado = _Contratado; valor = _valor; dono = address(this); Contrato( _Contratante, _Contratado, _valor, dono);} function getContrato() public view returns (string, string, string, address, address) { return ( Contratante, Contratado, valor, dono, Hcontrato ); } function kill() public{ require (msg.sender == Hcontrato); selfdestruct(Hcontrato); } }";
	var optimize = 1;
	var compiler;
	var account = '0xa2a7b7b8e38e39d3214e711b2fe3b24d1e54da2e';

	// Conecte-se ao nó local do Ethereum
	web3 = new Web3(new Web3.providers.HttpProvider("http://192.168.43.114:8545"));

	if(web3.isConnected()){
	 	alert('SIM');
	}else{
	 	alert('NÂO');
	}
		
	// Especificar uma conta ethereum padrão
	web3.eth.defaultAccount = account;

	window.onload = function() {

		if (typeof BrowserSolc == 'undefined') {
			console.log("Você tem que carregar browser-solc.js na página. Recomendamos usar uma tag <script>.");
			throw new Error();
		}

		function deploy(){
		     // Carregando versão do solc e complidao contrato
		    BrowserSolc.loadVersion("soljson-v0.4.25+commit.59dbf8f1.js", function(compiler) {
		     	var result = compiler.compile(exampleSource, optimize);
		     	$('#txt').html('Aguarde o processo de complilação do contrato.....' );
		     	var bytecode = result.contracts[':EtecEthereum'].bytecode;
		     	$('#txt').html('Verificando bytecode: ' + bytecode );
		     	var gasEstimate = web3.eth.estimateGas({data:'0x' + bytecode});
		     	$('#txt').html('Verikficando estimate Gas: ' + gasEstimate );
		     	var abi = JSON.parse(result.contracts[':EtecEthereum'].interface);
		     	var contract = web3.eth.contract(abi);
		     	$('#txt').html('Contrato Compilado: ' + contract );

		     	try{
			    	// Altenticação da conta
			    	web3.personal.unlockAccount(web3.eth.coinbase, "rootadm",600);
			    	$('#txt').html('autenticando no Endereço: ' + account );
				}catch(e){
					$('#txt').html('O correu um erro ao autenticar: ' + e );
				}

			    // Implantar a instância do contrato
			    contractInstance = contract.new({
			    	data: '0x' + bytecode,
			    	from: web3.eth.coinbase,
			    	gas: gasEstimate,
			    	chainId: 1
			    },(err, res) => {
			    	if (err) {
			    		console.log(err);
			    		return;
			    	}
			        // Registre o tx, você pode explorar o status com eth.getTransaction ()
			        console.log('FullHash Transaction: ' + res.transactionHash);
			        $('#txt').html('FullHash Transaction: ' + res.transactionHash);

			        // Se tivermos uma propriedade de endereço, o contrato foi implantado
			        if (res.address) {
			        	console.log('Contrato minado! endereço: ' + res.address + 'Has de Trasação: ' + res.transactionHash);
			        	$('#txt').html('Contrato Minerado! Endereço: ' + res.transactionHash);
			            // Vamos testar o contrato implantado
			            var CryptonContract = web3.eth.contract([
			            {
			            	"anonymous": false,
			            	"inputs": [
			            	{
			            		"indexed": false,
			            		"name": "Contratante",
			            		"type": "string"
			            	},
			            	{
			            		"indexed": false,
			            		"name": "Contratado",
			            		"type": "string"
			            	},
			            	{
			            		"indexed": false,
			            		"name": "valor",
			            		"type": "string"
			            	},
			            	{
			            		"indexed": false,
			            		"name": "dono",
			            		"type": "address"
			            	}
			            	],
			            	"name": "Contrato",
			            	"type": "event"
			            },
			            {
			            	"constant": false,
			            	"inputs": [],
			            	"name": "kill",
			            	"outputs": [],
			            	"payable": false,
			            	"stateMutability": "nonpayable",
			            	"type": "function"
			            },
			            {
			            	"constant": false,
			            	"inputs": [
			            	{
			            		"name": "_Contratante",
			            		"type": "string"
			            	},
			            	{
			            		"name": "_Contratado",
			            		"type": "string"
			            	},
			            	{
			            		"name": "_valor",
			            		"type": "string"
			            	}
			            	],
			            	"name": "setContrato",
			            	"outputs": [],
			            	"payable": false,
			            	"stateMutability": "nonpayable",
			            	"type": "function"
			            },
			            {
			            	"inputs": [],
			            	"payable": false,
			            	"stateMutability": "nonpayable",
			            	"type": "constructor"
			            },
			            {
			            	"constant": true,
			            	"inputs": [],
			            	"name": "getContrato",
			            	"outputs": [
			            	{
			            		"name": "",
			            		"type": "string"
			            	},
			            	{
			            		"name": "",
			            		"type": "string"
			            	},
			            	{
			            		"name": "",
			            		"type": "string"
			            	},
			            	{
			            		"name": "",
			            		"type": "address"
			            	},
			            	{
			            		"name": "",
			            		"type": "address"
			            	}
			            	],
			            	"payable": false,
			            	"stateMutability": "view",
			            	"type": "function"
			            }
			            ]);
					    // Referência ao contrato implantado
					    var token = contract.at(res.address);

					    var CryptonEvent = token.Contrato();

					    CryptonEvent.watch(function(error, result){
					    	if (!error){
					    		$("#button").addClass("fa fa-retweet");
					    		$("#button").removeClass("fa fa-spin fa-refresh");
					    		$('#adress').val(res.address);
					    		$('#block').val(web3.eth.blockNumber);
					    		$('#gas').val(gasEstimate);
					    		$('#bytecode').val(bytecode);
					    		$('#txt').html('Sucesso Endereço do Contrato na Blockchan : ' + result.args.dono);
					    		$('#Hconta').val( web3.eth.defaultAccount );
					    		$('#Hcontrato').val( result.args.dono );

					    		$('#deploy').hide();
          						$('#result').show();

          						alert(result.args.Contratante);

								var receipt2 = web3.eth.getTransactionReceipt({blockNumber:99});
								console.log(receipt2);
								console.log('-----------<<<<>>>>>-------------');
								var receipt = web3.eth.getTransactionReceipt(res.transactionHash);
								console.log(receipt);
								console.log('------------------------');
								var number = web3.eth.getTransactionCount(account);
								console.log(number);
								console.log('------------------------');

								for (var i = 0; i < 5; i++) {
									web3.eth.getBlock(number - i, function(error, result){
   										if(!error)
       										console.log(result.hash + '-' + result.number);
   										else
       										console.error(error);
									});

    								console.log(web3.eth.getBlock(number - i));
  								}
								console.log('------------------------');
								var transaction = web3.eth.getTransaction(res.transactionHash);
								console.log(transaction);
								console.log('------------------------');
								var transaction = web3.eth.getTransactionFromBlock(res.transactionHash, 2);
								console.log(transaction);

					    	}else{
					    		$("#button").removeClass("fa fa-spin fa-refresh");
					    		$("#button").addClass("fa fa-retweet");
					    		console.log(error);
					    	}
					    });


						token.setContrato('"'+ $('#contratante').html()+'"', '"'+$('#contratado' ).html()+'"', $('#detalhe' ).html(),
							{from: web3.eth.accounts[0], gas:3000000},
							(err, res) => {
								if (err){
									$("#button").removeClass("fa fa-spin fa-refresh");
									$("#button").addClass("fa fa-retweet");

									console.log('Ocorreu um erro!!'+ err);
								}
						});

					}else{
						console.log('Contrato está esperando para ser extraído no hash de transação: ' + res.transactionHash);
						$('#txt').html('Contrato está esperando para Minerar: ' + res.transactionHash);
					}
				});

		});
	}

	$('#button').click(function(){
		$("#deploy").addClass("disabled");
		$("#button").removeClass("fa fa-retweet");
		$("#button").addClass("fa fa-spin fa-refresh");
		deploy();
	});
}
</script>
@yield('js')
@stop