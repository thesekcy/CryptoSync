@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
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

<div class="row">
	<div class="col-md-8">
		<!-- Block buttons -->
		<div class="box">
			<div class="box-body">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs pull-right">
						<li class="active"><a href="#tab_1-1" data-toggle="tab">Contratante</a></li>
						<li><a href="#tab_2-2" data-toggle="tab">Contratado</a></li>
						<li><a href="#tab_3-2" data-toggle="tab">Detalhe</a></li>
						<li class="pull-left header"><i class="fa fa-th"></i> Dados a ser enviado para o contrato</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1-1">
							<!--*****************************
								Ifomações do Contrato
								*****************************-->
								<div class="box-body">
									<h4 class="page-header">Contratante</h4>
									<div class="col-md-6">
										<div class="form-group margin-bottom-none">
											<label>Nome</label>
											<input type="text"  value="{{ $contrato->A_nome }}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Estado Civil</label>
											<input type="text"  value="{{$contrato->A_estCivil}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>RG / IE</label>
											<input type="text"  value="{{$contrato->A_rg}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>CPF / CNPJ</label>
											<input type="text"  value="{{$contrato->A_cpf}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Profissão</label>
											<input type="text"  value="{{$contrato->A_proficao}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>End</label>
											<input type="text"  value="{{$contrato->A_end}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Bairro</label>
											<input type="text"  value="{{$contrato->A_bairro}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Cep</label>
											<input type="text"  value="{{$contrato->A_cep}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Nacionalidade</label>
											<input type="text"  value="{{$contrato->A_nacionalidade}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Cidade</label>
											<input type="text"  value="{{$contrato->A_cidade}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Estado</label>
											<input type="text"  value="{{$contrato->A_estado}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2-2">
								<div class="box-body">
								<!--**************
									dados do contratado
									**************-->
									<h4 class="page-header">Contratado</h4>
									<div class="col-md-6">
										<div class="form-group margin-bottom-none">
											<label>Nome</label>
											<input type="text"  value="{{ $contrato->B_nome }}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Estado Civil</label>
											<input type="text"  value="{{$contrato->B_estCivil}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>RG / IE</label>
											<input type="text"  value="{{$contrato->B_rg}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>CPF / CNPJ</label>
											<input type="text"  value="{{$contrato->B_cpf}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Profissão</label>
											<input type="text"  value="{{$contrato->B_proficao}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>End</label>
											<input type="text"  value="{{$contrato->B_end}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Bairro</label>
											<input type="text"  value="{{$contrato->B_bairro}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Cep</label>
											<input type="text"  value="{{$contrato->B_cep}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Nacionalidade</label>
											<input type="text"  value="{{$contrato->B_nacionalidade}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Cidade</label>
											<input type="text"  value="{{$contrato->B_cidade}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-4">
										<div class="form-group margin-bottom-none">
											<label>Estado</label>
											<input type="text"  value="{{$contrato->B_estado}}" class="form-control input-sm" disabled>
										</div><!-- /.form-group -->
									</div>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3-2">
								<div class="box-body">

									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Valor</label>
											<input type="text"  value="{{ $contrato->valor }}" class="form-control " disabled>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-2">
										<div class="form-group margin-bottom-none">
											<label>Prazo</label>
											<input type="text"  value="{{ $contrato->prazo }}" class="form-control " disabled>
										</div><!-- /.fom-group -->
									</div>
									<div class="col-md-8">
										<div class="form-group margin-bottom-none">
											<label>Serviço</label>
											<input type="text"  value="{{ $contrato->servico }}" class="form-control " disabled>
										</div><!-- /.form-group -->
									</div>
								</div>
							</div><!-- /.tab-pane -->
						</div><!-- /.tab-content -->
					</div>
					<div class="box-group" id="accordion">
						<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
						<div class="panel box box-primary">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										DO OBJETO DO CONTRATO
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="box-body">
									<p><strong>Cláusula 1ª.</strong> É objeto do presente contrato a prestação do serviço de ({{ $contrato->servico }}) (Descrever pormenorizadamente o serviço, com todas as suas especificidades, incluindo dados técnicos que possam vir a influir no entendimento do contrato, e, se possível for, dados decorrentes de perícia realizada envolvendo as situações em que serão realizadas o serviço).</p>
								</div>
							</div>
						</div>
						<div class="panel box box-danger">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										OBRIGAÇÕES DO CONTRATANTE
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="box-body">
									<p><strong>Cláusula 2ª.</strong> O <strong>CONTRATANTE</strong> deverá fornecer ao <strong>CONTRATADO</strong> todas as informações necessárias à realização do serviço, devendo especificar os detalhes necessários à perfeita consecução do mesmo, e a forma de como ele deve ser entregue.</p>
									<p><strong>Cláusula 3ª.</strong> O <strong>CONTRATANTE</strong> deverá efetuar o pagamento na forma e condições estabelecidas na cláusula 6ª.</p>
								</div>
							</div>
						</div>
						<div class="panel box box-success">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										OBRIGAÇÕES DO CONTRATADO
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="box-body">
									<p><strong>Cláusula 4ª.</strong> É dever do <strong>CONTRATADO</strong> oferecer ao contratante a cópia do presente instrumento, contendo todas as especificidades da prestação de serviço contratada.</p>
									<p><strong>Cláusula 5ª.</strong> O <strong>CONTRATADO</strong> deverá fornecer Nota Fiscal de Serviços, referente ao(s) pagamento(s) efetuado(s) pelo <strong>CONTRATANTE</strong>.</p>
								</div>
							</div>
						</div>
						<div class="panel box box-success">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
										DO PREÇO E DAS CONDIÇÕES DE PAGAMENTO
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="box-body">
									<p><strong>Cláusula 6ª.</strong> O presente serviço será remunerado pela quantia de R$ ({{ $contrato->valor }}) (valor expresso), referente aos serviços efetivamente prestados, devendo ser pago em dinheiro ou cheque, ou outra forma de pagamento em que ocorra a prévia concordância de ambas as partes.<strong><sup>3</sup></strong></p>
								</div>
							</div>
						</div>
						<div class="panel box box-success">
							<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
										DO INADIMPLEMENTO, DO DESCUMPRIMENTO E DA MULTA
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse">
								<div class="box-body">
									<p><strong>Cláusula 7ª.</strong> Em caso de inadimplemento por parte do <strong>CONTRATANTE</strong> quanto ao pagamento do serviço prestado, deverá incidir sobre o valor do presente instrumento, multa pecuniária de 2%, juros de mora de 1% ao mês e correção monetária.</p>
									<p><strong>Parágrafo único.</strong> Em caso de cobrança judicial, devem ser acrescidas custas processuais e 20% de honorários advocatícios.</p>
									<p><strong>Cláusula 8ª.</strong> No caso de não haver o cumprimento de qualquer uma das cláusulas, exceto a 6ª, do presente instrumento, a parte que não cumpriu deverá pagar uma multa de 10% do valor do contrato para a outra parte.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div><!-- /.box -->
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
								<label>Hast Conta</label>
								<input type="text"  value="" class="form-control input-sm" >
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-12">
							<div class="form-group margin-bottom-none">
								<label>Hast Conta</label>
								<input type="text"  value="" class="form-control input-sm" >
							</div><!-- /.form-group -->
						</div>
					</div>

				</div>
			</div>
			<div class="box-footer">
				<a class="btn btn-app" href="{{url("/contrato/list/contrato/print/{$contrato->id}")}}" ><i class="fa fa-print"></i> Print </a>
				<a class="btn btn-app" style="color:#fff;border: 1px solid #997e07;background-color: #fece00;">	<i class="fa  fa-cogs "></i> Detalhe</a>
				<a class="btn btn-app pull-right" style="color:#fff;border: 1px solid #27701e;background-color: #00a55a;">	<i class="fa fa-retweet "></i> Deploy</a>
			</div>
		</div><!-- /.box -->
	</div>
</div><!-- /.row -->

@stop

@section('smartwizard_js')
	<script src="{{ asset('vendor/adminlte/vendor/SmartWizard/js/jquery.smartWizard.js') }}"></script>
	<script  type="text/javascript" >
		
	</script>
@yield('js')
@stop