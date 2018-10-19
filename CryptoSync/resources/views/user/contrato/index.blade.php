@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard_theme_circles.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }} ">
    @yield('css')
@stop

@section('title', 'Cadastro Dados do Perfil')

@section('content_header')
	<h1>Perfil<small>Preview</small></h1>
    <ol class="breadcrumb">
    	<li>
    		<a href="#" ><i class="fa fa-user"></i>Perfil</a>
    	</li>
    </ol>
@stop

@section('content')

<div class="box box-default">
	<!-- /.box-header -->
	<div class="box-body">
		@if(isset($errors) && count($errors) > 0 )
		<div class="alert alert-danger">
			<ul class="margin-bottom-none padding-left-lg">
				<li>Todos os campos com * são Obrigatorios.</li>
			</ul>
		</div>
		</div>
		@endif
		<div id="smartwizard2">
			<ul>
				<li><a href="#step-1">1º<br /><small>CONTRATANTE</small></a></li>
				<li><a href="#step-2">2º<br /><small>CONTRATADO</small></a></li>
			</ul>
			<div>
				<div id="step-1" class="">
					<div class="col-md-8">
						<div class="form-group">
							<label>* Nome Completo:</label>
							<input type="text"  class="form-control" value="{{ auth()->guard('web')->user()->name}}" disabled>
						</div><!-- /.form-group -->
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label>* Estado Civil</label>
							<input type="text"  value="{{$perfils->estCivil}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>* Profissão</label>
							<input type="text"  value="{{$perfils->proficao}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>* CPF / CNPJ</label>
							<input type="text"  value="{{$perfils->cpf_cnpj}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>* RG / IE</label>
							<input type="text"  value="{{$perfils->rg_ie}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>* Nacionalidade</label>
							<input type="text"  value="{{$perfils->nascionalidade}}"  class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label>* Endereço:</label>
							<input type="text"  value="{{$perfils->end}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>* Bairro</label>
							<input type="text"  value="{{$perfils->bairro}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>* CEP</label>
							<input type="text"  value="{{$perfils->cep}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>* Cidade</label>
							<input type="text"  value="{{$perfils->cidade}}" class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>* Estado</label>
							<input type="text"  value="{{$perfils->estado}}"  class="form-control" placeholder="" disabled>
						</div><!-- /.form-group -->
					</div>
				</div><!-- /.step-1 -->
				<div id="step-2" class="">
					<form action="/contrato/create" method="post" accept-charset="utf-8">
						@csrf
						<input type="hidden" name="id_contratante" value="{{$perfils->id}}"  class="form-control">
						<div class="col-md-6">
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
						<div class="col-md-3">
							<div class="form-group {{ $errors->has('valor') ? 'has-error' : '' }}" >
								<label>* Valor $:</label>
								<input type="text" name="valor" id="valor" class="form-control" value="{{old('valor')}}" >
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-3">
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
								<button type="submit" class="btn btn-info pull-right">Salvar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

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