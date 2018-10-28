@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard_theme_circles.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }} ">
    @yield('css')
@stop

@section('title', 'Cadastro Dados do Perfil')

@section('content_header')
	<h1>Personalização de Contrato<small>Preview</small></h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-file-text-o"></i> Contrato</a></li>
		<li><a href="#">Forms</a></li>
    </ol>
@stop

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="callout callout-info">
			<h4>I am an info callout!</h4>

			<p>Este modelo de contrato é aplicado, de forma igualitária. Seu formato já é adaptado para ser o mais enxuto possível para os nossos clientes, provendo-lhes a devida segurança e considerando os requisitos mínimos para a viabilidade do modelo comercial. Neste âmbito, não há possibilidade de serem realizadas alterações ou adendos.</p>
		</div>
		<div class="box box-success">
			<div class="row">
				<div class="col-md-6">
					<div class="box-header with-border">
						<h3 class="box-title">Detalamento do Contrato</h3>
					</div><!-- / box-header with-border -->
					<div class="box-body">
						<form action="/contrato/create" method="post" accept-charset="utf-8">
							@csrf
							<input type="hidden" name="id_contratante" value="{{$perfils->id}}"  class="form-control">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('id_contratado') ? 'has-error' : '' }}" >
									<label>* CPF do Contratanto:</label>
									<select class="form-control selectpicker" name="id_contratado" id="cpf_cnpj_Contratante" data-live-search="true" value="{{old('id_contratado')}}">
										<option value="">Selecione o Contratante</option>
										@foreach($query as $valor)
										<option value="{{$valor->id}}">{{$valor->cpf_cnpj}} - {{$valor->nmCompleto}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('valor') ? 'has-error' : '' }}" >
									<label>* Valor $:</label>
									<input type="text" name="valor" id="valor" class="form-control" value="{{old('valor')}}" >
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('prazo') ? 'has-error' : '' }}">
									<label>* Prazo de termino:</label>
									<input type="text" name="prazo" id="prazo" class="form-control" value="{{old('prazo')}}" >
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('servico') ? 'has-error' : '' }}">
									<label>* Serviço Prestado:</label>
									<input type="text" name="servico" id="servico" class="form-control" value="{{old('servico')}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('contrato') ? 'has-error' : '' }}">
									<label>* Contrato:</label>
									<select class="form-control selectpicker" id="contrato" name="contrato" data-live-search="true" value="{{old('contrato')}}">
										<option value="">Selecione o Contratante</option>
										<option value="Prestação de Serviço">Prestação de Serviço</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<button type="reset" class="btn btn-warning">
										<span>
											<i class=" fa fa-times"> Limpa Form</i>
										</span>
									</button>
									<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-default">
										<span>
											<i class="fa fa-list-alt"> Gerar contrato </i>
										</span>
									</button>
								</div>
							</div>
							<div class="modal fade" id="modal-default">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
											<p>ATENÇÃO: de acordo com o item b da cláusula, este Contrato de Prestação de Serviços possui prazo de vigência e prevê multa de 30% do valor restante do Contrato em caso de rescisão antecipada requerida pelo Contratante.</p>
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Enviar solicitação</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div>
						</form>
					</div><!-- / box-body -->
					<div class="box-footer">
					</div><!-- / box-footer -->
				</div><!-- / col-md-8 -->
				<div class="col-md-6">
					<div class="box-header with-border">
						<h3 class="box-title">Dados do Contratante</h3>
					</div><!-- / box-header with-border -->
					<div class="box-body">
						<div class="user-block">
							<img class="img-circle img-bordered-sm" src="{!! asset('img/user.png') !!}" alt="user image">
							<span class="username">
								<a href="#">{{ auth()->guard('web')->user()->name}}.</a>
							</span>
							<span class="description" style="border-bottom: 1px solid #3091be;">
								<strong><i class="fa fa-key margin-r-5"></i> 0x987907687685765876</strong>
							</span>

							<div class="row" style="padding-top: 15px">

								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* Estado Civil</label>
										<input type="text"  value="{{$perfils->estCivil}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-8">
									<div class="form-group margin-bottom-none">
										<label>* Profissão</label>
										<input type="text"  value="{{$perfils->proficao}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* CPF / CNPJ</label>
										<input type="text"  value="{{$perfils->cpf_cnpj}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* RG / IE</label>
										<input type="text"  value="{{$perfils->rg_ie}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* Nacionalidade</label>
										<input type="text"  value="{{$perfils->nascionalidade}}"  class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-8">
									<div class="form-group margin-bottom-none">
										<label>* Endereço:</label>
										<input type="text"  value="{{$perfils->end}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* Bairro</label>
										<input type="text"  value="{{$perfils->bairro}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* CEP</label>
										<input type="text"  value="{{$perfils->cep}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* Cidade</label>
										<input type="text"  value="{{$perfils->cidade}}" class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-4">
									<div class="form-group margin-bottom-none">
										<label>* Estado</label>
										<input type="text"  value="{{$perfils->estado}}"  class="form-control input-sm" placeholder="" disabled>
									</div><!-- /.form-group -->
								</div>

							</div><!-- / row -->
						</div><!-- / user-block -->
					</div><!-- / box-body -->

					<div class="box-footer">
					</div><!-- / box-footer -->
				</div><!-- / col-md-6 -->
			</div><!-- / row -->
		</div><!-- / box box-success -->
	</div><!-- / col-md-8 -->
</div><!-- / row -->

@stop

@section('smartwizard_js')
	<script src="{{ asset('vendor/adminlte/vendor/SmartWizard/js/jquery.smartWizard.js') }}"></script>
	<script src="{{ asset('vendor/adminlte/vendor/inputmask/js/jquery.inputmask.bundle.js') }}"></script>
	<script src="{{ asset('vendor/adminlte/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script  type="text/javascript" >
		$(document).ready(function(){

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
               	$("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
               	$("#next-btn").addClass('disabled');
               }else{
               	$("#prev-btn").removeClass('disabled');
               	$("#next-btn").removeClass('disabled');
               }
           });

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function(){ $('#smartwizard').smartWizard("reset"); });

            // Smart Wizard 2
            $('#smartwizard2').smartWizard({
            	selected: 0,
            	theme: 'circles',
            	transitionEffect:'fade',
            	showStepURLhash: false
            });

            $('#prazo').inputmask("datetime",{
				mask: "1-2-y", 
				placeholder: "dd-mm-yyyy", 
				leapday: "29-02-", 
				separator: "-", 
				alias: "yyyy-mm-dd"
			});

            $('#valor').inputmask('decimal', {
            	radixPoint:",",
            	groupSeparator: ".",
            	autoGroup: true,
            	digits: 2,
            	digitsOptional: false,
            	placeholder: '0',
            	rightAlign: false,
            	onBeforeMask: function (value, opts) {
            		return value;
            	}
            });


            $("#cpf_cnpj_Contratante").change(function(){
            	var cpf_cnpj_Contratante = jQuery('#cpf_cnpj_Contratante option:selected').val();
            	
            	$.ajax({
            		url: "{{ url('/contrato') }}",
            		method: 'post',
            		data: {
            			cpf_cnpj_Contratante: cpf_cnpj_Contratante
            		},
            		success: function(result){
            			console.log(result);
            	}});

            });

        });
	</script>
@yield('js')
@stop