@extends('adminlte::page')

@section('smartWizard_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }} ">
    @yield('css')
@stop

@section('title', 'Cadastro Dados do Perfil')

@section('content_header')
	<h1>Perfil<small>Preview</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Forms</a></li>
		<li class="active">Perfil</li>
	</ol>
@stop

@section('content')
<div class="row"><!-- div row -->
	<div class="col-md-12"><!-- div col 12 -->
		<div class="box box-info"><!-- div box-info -->
			<div class="box-body"><!-- box-bory -->

				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-aqua-active">
						<h3 class="widget-user-username">{{ auth()->guard('web')->user()->name}}</h3>
						<h5 class="widget-user-desc">Conta Premiu</h5>
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="{!! asset('img/user.png') !!}" alt="User Avatar">
					</div>
				</div>
				<div class="box-footer">
					<form action="/perfil/create" method="post" accept-charset="utf-8">
						@csrf
						<div class="col-md-12 row">
							<input type="hidden" name="id_users" value="{{ auth()->guard('web')->user()->id}}"  class="form-control">
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('nmCompleto') ? 'has-error' : '' }}">
									<label id="c">* Nome Completo</label>
									<input type="text" name="nmCompleto" class="form-control" value="{{isset($perfils->name) ? $perfils->name: auth()->guard('web')->user()->name}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('cpf_cnpj') ? 'has-error' : '' }}">
									<label id="c">* CPF / CNPJ</label>
									<input type="text" name="cpf_cnpj" id="cpfcnpj" class="form-control" value="{{$perfils->cpfcnpj}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('rg_ie') ? 'has-error' : '' }}">
									<label id="r">* RG / IE</label>
									<input type="text" name="rg_ie" id="ierg" class="form-control" placeholder="RG ou IE para empresa" value="{{$perfils->ierg}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('sexo') ? 'has-error' : '' }}">
									<label>* Sexo:</label>
									<select class="form-control" name="sexo">
										<option value="1" {{$perfils->sexo == 1 ? selected : '' }}>Masculino</option>
										<option value="2" {{$perfils->sexo == 2 ? selected : '' }}>Feminino</option>
									</select>
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('dtnasc') ? 'has-error' : '' }}">
									<label>* Data de Nasc</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" name="dtNasc" id="dtNasc" class="form-control" placeholder="dd/mm/yyyy" value="{{$perfils->dtnasc}}">
									</div>
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('estCivil') ? 'has-error' : '' }}">
									<label>* Estado Civil</label>
									<select class="form-control" name="estCivil" >
										<option value="">  </option>
										<option value="Casado" >Casado</option>
										<option value="Solteiro" >Solteiro</option>
									</select>
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('tel') ? 'has-error' : '' }}">
									<label>* Telefone</label>
									<input type="text" name="tel" id="tel" class="form-control" placeholder="Telefone para contato" value="{{$perfils->telefone}}">>
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('profissao') ? 'has-error' : '' }}">
									<label>* Profissão:</label>
									<select class="form-control" name="profissao" data-live-search="true">
										<option value="" >selecione ume profissão</option>
									</select>
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-5">
								<div class="form-group {{ $errors->has('end') ? 'has-error' : '' }}">
									<label>* Endereço:</label>
									<input type="text" name="end" class="form-control" placeholder="Endereço Rua: ou AV:" value="{{$perfils->rua}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-5">
								<div class="form-group {{ $errors->has('bairro') ? 'has-error' : '' }}">
									<label>* Bairro</label>
									<input type="text" name="bairro" class="form-control" placeholder="Entre com seu Bairro" value="{{$perfils->bairro}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-2">
								<div class="form-group {{ $errors->has('cep') ? 'has-error' : '' }}">
									<label>* CEP</label>
									<input type="text" name="cep" id="cep" class="form-control" placeholder="Cep" value="{{$perfils->cep}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('estado') ? 'has-error' : '' }}">
									<label>* Estado</label>
									<input type="text" name="uf" id="uf" class="form-control" placeholder="UF" value="{{$perfils->uf}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('cidade') ? 'has-error' : '' }}">
									<label>* Cidade</label>
									<input type="text" name="cidade" id="cidade" class="form-control" placeholder="UF" value="{{$perfils->cidade}}">
								</div><!-- /.form-group -->
							</div>
							<div class="col-md-4">
								<div class="form-group {{ $errors->has('nascionalidade') ? 'has-error' : '' }}">
									<label>* Nacionalidade</label>
									<select class="form-control" name="nacionalidade" data-live-search="true">
										<option value="" >selecione uma nacionalidade</option>
									</select>
								</div><!-- /.form-group -->
							</div>
						</form><!--/ form -->
					</div><!--/ box-footer -->
					<div class="box-footer">
						<button type="#" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-info pull-right">Salvar</button>
					</div>
				</div><!-- /.box-body -->
			</div><!--/ div box-info -->
		</div><!--/ div col 12 -->
	</div><!--/ div row -->
@stop