@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
    @yield('css')
@stop

@section('title', 'Cadastro Dados do Perfil')

@section('content_header')
	<h1>Perfil<small>Preview</small></h1>
    <ol class="breadcrumb">
    	<li>
    		<a href="#" >
				<i class="fa fa-user"></i>Perfil</a>
    	</li>
    </ol>
@stop

@section('content')

<div class="col-xs-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Lista de Contratos para ser Processados</h3>

			<div class="box-tools">
				<div class="input-group input-group-sm" style="width: 150px;">
					<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

					<div class="input-group-btn">
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
			<table class="table table-hover">
				<tbody><tr>
					<th>#</th>
					<th>Contratante</th>
					<th>Contratado</th>
					<th>Contrato</th>
					<th></th>
				</tr>
					@foreach($contrato as $valor)
					<tr>
						<td> {{$valor->id}}</td>
						<td> {{$valor->A_nome}}</td>
						<td> {{$valor->B_nome}}</td>
						<td> {{$valor->contrato}}</td>
						<td>
							<button type="button" class="btn bg-maroon margin " style="margin: 0px;" data-toggle="modal" data-target="#modal-default-{{$valor->id}}">
								<i class="fa fa-file-text">Visualizar</i>
							</button>
							<button type="button" class="btn bg-purple margin " style="margin: 0px;">
								<i class="fa fa-download">BlockChan</i>
							</button>
						</td>
					</tr>
					<div class="modal fade" id="modal-default-{{$valor->id}}" style="display: none;">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header with-border">
									<i class="fa fa-text-width"></i>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span></button>
										<h4 class="modal-title">CONTRATO DE PRESTAÇÃO DE SERVIÇOS</h4>
									</div>
									<div class="modal-body">
										<div >
											<!-- /.box-header -->
											<div class="box-body">
												<h4 class="box-title">IDENTIFICAÇÃO DAS PARTES CONTRATANTES</h4>

												<p ><strong>CONTRATANTE:</strong> {{ $valor->A_nome }}, {{$valor->A_nacionalidade}}, {{$valor->A_estCivil}}, {{$valor->A_proficao}}, Carteira de Identidade nº {{$valor->A_rg}}, C.P.F. nº {{$valor->A_cpf}}, residente e domiciliado na Rua {{$valor->A_end}}, bairro {{$valor->A_bairro}}, Cep {{$valor->A_cep}}, Cidade {{$valor->A_cidade}}, no Estado {{$valor->A_estado}};<strong><sup>1</sup></strong></p>
												<p><strong>CONTRATADO:</strong> {{ $valor->B_nome }}, {{$valor->B_nacionalidade}}, {{$valor->B_estCivil}}, {{$valor->B_proficao}}, Carteira de Identidade nº {{$valor->B_rg}}, C.P.F. nº {{$valor->B_cpf}}, residente e domiciliado na Rua {{$valor->B_end}}, bairro {{$valor->B_bairro}}, Cep {{$valor->B_cep}}, Cidade {{$valor->B_cidade}}, no Estado {{$valor->B_estado}};<strong><sup>2</sup></strong></p>
												<p><strong><em>As partes acima identificadas têm, entre si, justo e acertado o presente Contrato de Prestação de Serviços, que se regerá pelas cláusulas seguintes e pelas condições de preço, forma e termo de pagamento descritas no presente.</em></strong></p>

												<h4 class="box-title">DO OBJETO DO CONTRATO</h4>

												<p><strong>Cláusula 1ª.</strong> É objeto do presente contrato a prestação do serviço de ({{ $valor->servico }}) (Descrever pormenorizadamente o serviço, com todas as suas especificidades, incluindo dados técnicos que possam vir a influir no entendimento do contrato, e, se possível for, dados decorrentes de perícia realizada envolvendo as situações em que serão realizadas o serviço).</p>

												<h4 class="box-title">OBRIGAÇÕES DO CONTRATANTE</h4>

												<p><strong>Cláusula 2ª.</strong> O <strong>CONTRATANTE</strong> deverá fornecer ao <strong>CONTRATADO</strong> todas as informações necessárias à realização do serviço, devendo especificar os detalhes necessários à perfeita consecução do mesmo, e a forma de como ele deve ser entregue.</p>
												<p><strong>Cláusula 3ª.</strong> O <strong>CONTRATANTE</strong> deverá efetuar o pagamento na forma e condições estabelecidas na cláusula 6ª.</p>

												<h4 class="box-title">OBRIGAÇÕES DO CONTRATADO</h4>

												<p><strong>Cláusula 4ª.</strong> É dever do <strong>CONTRATADO</strong> oferecer ao contratante a cópia do presente instrumento, contendo todas as especificidades da prestação de serviço contratada.</p>
												<p><strong>Cláusula 5ª.</strong> O <strong>CONTRATADO</strong> deverá fornecer Nota Fiscal de Serviços, referente ao(s) pagamento(s) efetuado(s) pelo <strong>CONTRATANTE</strong>.</p>

												<h4 class="box-title">DO PREÇO E DAS CONDIÇÕES DE PAGAMENTO</h4>

												<p><strong>Cláusula 6ª.</strong> O presente serviço será remunerado pela quantia de R$ ({{ $valor->valor }}) (valor expresso), referente aos serviços efetivamente prestados, devendo ser pago em dinheiro ou cheque, ou outra forma de pagamento em que ocorra a prévia concordância de ambas as partes.<strong><sup>3</sup></strong></p>

												<h4 class="box-title">DO INADIMPLEMENTO, DO DESCUMPRIMENTO E DA MULTA</h4>

												<p><strong>Cláusula 7ª.</strong> Em caso de inadimplemento por parte do <strong>CONTRATANTE</strong> quanto ao pagamento do serviço prestado, deverá incidir sobre o valor do presente instrumento, multa pecuniária de 2%, juros de mora de 1% ao mês e correção monetária.</p>
												<p><strong>Parágrafo único.</strong> Em caso de cobrança judicial, devem ser acrescidas custas processuais e 20% de honorários advocatícios.</p>
												<p><strong>Cláusula 8ª.</strong> No caso de não haver o cumprimento de qualquer uma das cláusulas, exceto a 6ª, do presente instrumento, a parte que não cumpriu deverá pagar uma multa de 10% do valor do contrato para a outra parte.</p>

												<h4 class="box-title">DA RESCISÃO IMOTIVADA</h4>

												<p><strong>Cláusula 9ª.</strong> Poderá o presente instrumento ser rescindido por qualquer uma das partes, em qualquer momento, sem que haja qualquer tipo de motivo relevante, não obstante a outra parte deverá ser avisada previamente por escrito, no prazo de (3) dias.<strong><sup>4</sup></strong></p>
												<p><strong>Cláusula 10ª.</strong> Caso o <strong>CONTRATANTE</strong> já tenha realizado o pagamento pelo serviço, e mesmo assim, requisite a rescisão imotivada do presente contrato, terá o valor da quantia paga devolvido, deduzindo-se 2% de taxas administrativas.</p>
												<p><strong>Cláusula 11ª.</strong> Caso seja o <strong>CONTRATADO</strong> quem requeira a rescisão imotivada, deverá devolver a quantia que se refere aos serviços por ele não prestados ao <strong>CONTRATANTE</strong>, acrescentado de 2% de taxas administrativas.</p>

												<h4 class="box-title">OBRIGAÇÕES DO CONTRATADO</h4>

												<p><strong>Cláusula 12ª.</strong> O <strong>CONTRATADO</strong> assume o compromisso de realizar o serviço dentro da data ({{ $valor->prazo }}) <strong><sup>5</sup></strong>, de acordo com a forma estabelecida no presente contrato.</p>

												<h4 class="box-title">DAS CONDIÇÕES GERAIS</h4>

												<p><strong>Cláusula 13ª.</strong> Fica compactuado entre as partes a total inexistência de vínculo trabalhista entre as partes contratantes, excluindo as obrigações previdenciárias e os encargos sociais, não havendo entre <strong>CONTRATADO</strong> e <strong>CONTRATANTE</strong>qualquer tipo&nbsp;de relação de subordinação.</p>
												<p><strong>Cláusula 14ª.</strong> Salvo com a expressa autorização do <strong>CONTRATANTE</strong>, não pode o <strong>CONTRATADO</strong> transferir ou subcontratar os serviços previstos neste instrumento, sob o risco de ocorrer a rescisão imediata.</p>
												<p><strong>Cláusula 15ª.</strong> Este contrato deverá ser registrado no Cartório de Registro de Títulos e Documentos.</p>

											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
					@endforeach
			</tbody></table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>

@stop

@section('smartwizard_js')
	<script src="{{ asset('vendor/adminlte/vendor/SmartWizard/js/jquery.smartWizard.js') }}"></script>

	<script  type="text/javascript" >
		$(document).ready(function(){

		// se o web3 não for indefinido, usaremos currentProvider como nosso provedor
		if (typeof web3 !== 'undefined') {
			web3 = new Web3(web3.currentProvider);
		} else {
            // defina o provedor que você quer do Web3.providers
            web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
        }
        // especificar uma conta ethereum padrão
		web3.eth.defaultAccount = web3.eth.accounts[0];
		
		var CoursetroContract = web3.eth.contract(PASTE ABI HERE!);


    });
	</script>
@yield('js')
@stop