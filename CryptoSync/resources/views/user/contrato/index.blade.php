{{ auth()->guard('web')->user()->name}}
@extends('adminlte::page')


@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard_theme_circles.css') }} ">
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

<div class="box box-default">
	<!-- /.box-header -->
	<div class="box-body">
		
			<form action="index_submit" method="get" accept-charset="utf-8">
				<div id="smartwizard2">
					<ul>
						<li><a href="#step-1">Step 1<br /><small>Dados Pessoais</small></a></li>
						<li><a href="#step-2">Step 2<br /><small>Endereço</small></a></li>
						<li><a href="#step-3">Step 3<br /><small>Naturalidade</small></a></li>
					</ul>
					<div>
						<div id="step-1" class="">
							<div class="col-md-6">
								<div class="form-group">
									<label>CPF/CNPJ</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
								<div class="form-group">
									<label>Data Nascimento</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
							</div><!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
									<label>Sexo</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
								<div class="form-group">
									<label>Estado Civil</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
							</div><!-- /.col -->
						</div><!-- /.step-1 -->
						<div id="step-2" class="">
							<div class="col-md-6">
								<div class="form-group">
									<label>CPF/CNPJ</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
								<div class="form-group">
									<label>Data Nascimento</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
							</div><!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
									<label>Sexo</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
								<div class="form-group">
									<label>Estado Civil</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
							</div><!-- /.col -->
						</div><!-- /.step-2 -->
						<div id="step-3" class="">
							<div class="col-md-6">
								<div class="form-group">
									<label>CPF/CNPJ</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
								<div class="form-group">
									<label>Data Nascimento</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
							</div><!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
									<label>Sexo</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
								<div class="form-group">
									<label>Estado Civil</label>
									<input type="text" name="rua" class="form-control" placeholder="Endereço">
								</div><!-- /.form-group -->
								
							</div><!-- /.col -->
						</div><!-- /.step-3 -->
					</div>
				</div><!-- /.smartwizart -->
			</form><!-- /.form -->
		
	</div><!-- /.box-body -->
</div><!-- /.box-default -->

@stop

@section('smartwizard_js')
	<script src="{{ asset('vendor/adminlte/vendor/SmartWizard/js/jquery.smartWizard.js') }}"></script>
	
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

        });
	</script>
@yield('js')
@stop