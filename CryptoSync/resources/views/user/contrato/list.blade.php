@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/SmartWizard/css/smart_wizard.css') }} ">
    @yield('css')
@stop

@section('title', 'Cadastro Dados do Perfil')

@section('content_header')
	<h1>Lista de Contrato<small>Preview</small></h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-file-text-o"></i> Contrato</a></li>
		<li><a href="#">Lista</a></li>
    </ol>
@stop

@section('content')
	@foreach($contrato as $valor)
	<div class="col-md-3">

		<!-- Profile Image -->
		<div class="box {{ ($valor->status == 0) ? 'box-default' : 'box-primary' }}">
			<div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" src="{!! asset('img/user.png') !!}" alt="User profile picture">
				<h3 class="profile-username text-center">{{ $valor->B_nome }}</h3>
				<p class="text-muted text-center">00{{$valor->id}} - {{$valor->contrato}}</p>
				<ul class="list-group list-group-unbordered">
					<li class="list-group-item text-center" >
						<b>{{ ($valor->status == 0) ? 'Aguardando aprovação para Prosseguir' : 'Contrato Aprovado podemos prosseguir' }}</b>
					</li>
				</ul>
				<a href="{{url("/contrato/list/contrato/{$valor->id}")}}" class="btn btn-block  {{ ($valor->status == 0) ? 'btn-default disabled' : 'btn-primary' }}"><b>Segue</b></a>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
	@endforeach
@stop

@section('smartwizard_js')
	<script src="{{ asset('vendor/adminlte/vendor/SmartWizard/js/jquery.smartWizard.js') }}"></script>
	<script  type="text/javascript" >
		
	</script>
@yield('js')
@stop