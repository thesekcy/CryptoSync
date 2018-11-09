@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
    <style type="text/css">
    </style>
    @yield('css')
@stop

@section('title', 'Busca de Contratos por has de Transação')

@section('content')
<div class="lockscreen-wrapper">
	<div class="lockscreen-logo">
		<b>Search</b>Contrato
	</div>

	<div class="lockscreen-item">
		<!-- lockscreen image -->
		<div class="lockscreen-image">
			<img src="{!! asset('img/ethereum.png') !!}" alt="User Image">
		</div>
		<!-- /.lockscreen-image -->

		<!-- lockscreen credentials (contains the form) -->
		<form class="lockscreen-credentials">
			<div class="input-group">
				<input type="password" class="form-control" placeholder="has de transação">

				<div class="input-group-btn">
					<button type="button" class="btn"><i class="fa fa-search text-muted"></i></button>
				</div>
			</div>
		</form>
		<!-- /.lockscreen credentials -->

	</div>

	<div class="lockscreen-footer text-center">
		<div class="form-group">
			<label>Detalhe do contrato</label>
			<textarea class="form-control" rows="10" id="detalhe" ></textarea>
		</div>
		<button type="button" class="btn btn-block btn-primary btn-sm">Get Valor</button>
	</div>
</div>
@stop

@section('smartwizard_js')
<script src="{{ asset('vendor/site/libs/solc.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/site/libs/web3.min.js') }}"></script>
<script  type="text/javascript" >

	// Conecte-se ao nó local do Ethereum
	web3 = new Web3(new Web3.providers.HttpProvider("http://192.168.1.34:8545"));


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