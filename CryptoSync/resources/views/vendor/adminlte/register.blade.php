<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>CryptoSync - Site Oficial!</title>
	<meta name="description" content="Plataforma web voltada a segurança utilizando uma tecnologia distribuida. O Blockchain.">
	<meta name="keywords" content="Blockchain, Ethereum, Smart Contracts, Contratos inteligentes, Segurança, Facilidade, Plataforma distribuida.">
	<meta name="robots" content="index, follow">
	<meta name="author" content="CryptoSync">
	<link rel="icon" href="{{ asset('svg/buffer.svg') }}">

	<!-- Icones
	================================================== -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<!-- Bootstrap | CSS
	================================================== -->
	<link href="{{ asset('vendor/site/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/site/Style/dist/css/cadastro.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/site/Style/dist/css/jquery.toast.min.css') }}" rel="stylesheet">


</head>
<body>
	<div class="content-wrapper" id="teste">
		<div class="content">
			<div class="signup-wrapper shadow-box">
				<div class="company-details ">
					<div class="shadow"></div>
					<div class="wrapper-1">
						<div class="logo">
							<div class="icon-food">
							</div>
						</div>
						<h1 class="title">Plataforma Distribuida</h1>
						<div class="slogan">Crie sua conta e faça parte do novo mundo!</div>
						<br><br><br>
						<div class="col-md-12 d-flex justify-content-center">
							<div id="gender" class="btn-group" data-toggle="buttons">
								<label class="btn btntypeacc btntypeacc_fisi" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" class="fisica" name="gender" value="fisica"> &nbsp; Pessoa Fisica &nbsp;
								</label>
								<label class="btn btntypeacc btntypeacc_juri" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" class="juridico" name="gender" value="juridica">Pessoa Juridica
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="signup-form ">
					<div class="wrapper-2">
						<div class="form-title">Crie sua conta</div>
						<div class="form">
							<form action="{{ url(config('adminlte.register_url', 'register')) }}" method="POST" accept-charset="utf-8" class="form">
								{!! csrf_field() !!}
								<div id="section_1">
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Nome completo</label>
											<input type="text" name="name" value="{{old('name')}}" class="input_nome" required>
											@if ($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Email</label>
											<input type="email" name="email" value="{{old('email')}}" class="input_email" required>
											@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Senha</label>
											<input type="password" name="password" value="{{old('password')}}" autocomplete="password" class="input_senha" required>
											@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Repitir Senha</label>
											<input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" autocomplete="password" class="input_rsenha" required>
											@if ($errors->has('password_confirmation'))
											<span class="help-block">
												<strong>{{ $errors->first('password_confirmation') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<button type="button"  class="signup cadastro1" data-element="#section_1">Avançar</button>
								</div>

								<div id="section_2">
									<p class="content-item">
										<div class="form-group">
											<label class="form-label" id="r">RG</label>
											<input type="text" name="ierg" value="{{old('ierg')}}" id="ierg" class="input_rg" required/>
											@if ($errors->has('ierg'))
											<span class="help-block">
												<strong>{{ $errors->first('ierg') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label" id="c">CPF</label>
											<input type="text" name="cpfcnpj" value="{{old('cpfcnpj')}}" id="cpfcnpj" class="input_cpf" required/>
											@if ($errors->has('cpfcnpj'))
											<span class="help-block">
												<strong>{{ $errors->first('cpfcnpj') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Data de Nascimento</label>
											<input id="data" name="dtnasc" value="{{old('dtnasc')}}" class="form-input input_dtNasc" type="text" />
											@if ($errors->has('dtnasc'))
											<span class="help-block">
												<strong>{{ $errors->first('dtnasc') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label cbSemAnimacao">Sexo</label>
											<select name="sexo" value="{{old('sexo')}}" class="custom-select sources">
												<option value="" selected>Selecione o Sexo</option>
												<option value="M">Masculino</option>
												<option value="F">Feminino</option>
											</select>
											@if ($errors->has('sexo'))
											<span class="help-block">
												<strong>{{ $errors->first('sexo') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<button type="button" id="btnVoltar_1" class="signup btnvoltar1">Voltar</button>
									<button type="button"  class="signup cadastro2" data-element="#section_2">Avançar</button>
								</div>

								<div id="section_3">
									<p class="content-item">
										<div class="row">
											<div class="col-4">
												<div class="form-group">
													<label class="form-label" for="first">CEP</label>
													<input class="form-input input_cep" name="cep" value="{{old('cep')}}" id="cep" type="text" />
													@if ($errors->has('cep'))
													<span class="help-block">
														<strong>{{ $errors->first('cep') }}</strong>
													</span>
													@endif
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label class="form-label" for="last">Numero</label>
													<input class="form-input input_num" name="endnum" value="{{old('endnum')}}" id="numero" type="text"/>
													@if ($errors->has('endnum'))
													<span class="help-block">
														<strong>{{ $errors->first('endnum') }}</strong>
													</span>
													@endif
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label class="form-label" for="last">Complemento</label>
													<input class="form-input input_complemento" name="complemento" value="{{old('complemento')}}" id="complemento" type="text"/>
													@if ($errors->has('complemento'))
													<span class="help-block">
														<strong>{{ $errors->first('complemento') }}</strong>
													</span>
													@endif
												</div>
											</div>
										</div>
									</p>

									<p class="content-item">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label class="form-label cbSemAnimacao" for="last">Rua</label>
													<input class="form-input disabledbutton input_rua" name="rua" value="{{old('rua')}}" id="rua" type="text" readonly="readonly"/>
													@if ($errors->has('rua'))
													<span class="help-block">
														<strong>{{ $errors->first('rua') }}</strong>
													</span>
													@endif
												</div>
											</div>
										</div>
									</p>

									<p class="content-item">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label class="form-label cbSemAnimacao" for="first">Bairro</label>
													<input class="form-input disabledbutton input_bairro" name="bairro" value="{{old('bairro')}}" id="bairro" type="text" readonly="readonly"/>
													@if ($errors->has('bairro'))
													<span class="help-block">
														<strong>{{ $errors->first('bairro') }}</strong>
													</span>
													@endif
												</div>
											</div>
										</div>
									</p>

									<p class="content-item">
										<div class="row">
											<div class="col-8">
												<div class="form-group">
													<label class="form-label cbSemAnimacao" for="first">Cidade</label>
													<input class="form-input disabledbutton input_cidade" name="cidade" value="{{old('cidade')}}" id="cidade" type="text" readonly="readonly"/>
													@if ($errors->has('cidade'))
													<span class="help-block">
														<strong>{{ $errors->first('cidade') }}</strong>
													</span>
													@endif
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label class="form-label cbSemAnimacao" for="last">UF</label>
													<input class="form-input disabledbutton input_uf" name="uf" value="{{old('uf')}}" id="uf" type="text" readonly="readonly"/>
													@if ($errors->has('uf'))
													<span class="help-block">
														<strong>{{ $errors->first('uf') }}</strong>
													</span>
													@endif
												</div>
											</div>
										</div>
									</p>
									<button type="button" id="btnVoltar_2" class="signup btnvoltar2">Voltar</button>
									<button type="button"  class="signup cadastro3" data-element="#section_3">Avançar</button>

								</div>

								<div id="section_4">
									<p class="content-item">
										<div class="form-group">
											<label class="form-label cbSemAnimacao">Profissão</label>
											<select name="profissao" value="{{old('profissao')}}" class="custom-select sources">
												<option value="" selected>Selecione sua profissão </option>
												<option value="1">Programador</option>
												<option value="2">Garoto de Programa</option>
											</select>
											@if ($errors->has('profissao'))
											<span class="help-block">
												<strong>{{ $errors->first('profissao') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label cbSemAnimacao">Estado Civil</label>
											<select name="estadocivil" value="{{old('estadocivil')}}" class="custom-select sources">
												<option value="" selected>Selecione o seu Estado Civil</option>
												<option value="1">Solteiro(a)</option>
												<option value="2">Casado(a)</option>
												<option value="2">Divorciado(a)</option>
												<option value="2">Viuvo(a)</option>
											</select>
											@if ($errors->has('estadocivil'))
											<span class="help-block">
												<strong>{{ $errors->first('estadocivil') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label cbSemAnimacao">Nacionalidade</label>
											<select name="nacionalidade"  value="{{old('nacionalidade')}}" class="custom-select sources">
												<option value="1">Brasileira</option>
												<option value="2">Americana</option>
												<option value="2">Argentina</option>
												<option value="2">Francesa</option>
											</select>
											@if ($errors->has('nacionalidade'))
											<span class="help-block">
												<strong>{{ $errors->first('nacionalidade') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Telefone</label>
											<input class="form-input input_tel tel" name="telefone" value="{{old('telefone')}}" name="tel" id="tel" type="text"/>
											@if ($errors->has('telefone'))
											<span class="help-block">
												<strong>{{ $errors->first('telefone') }}</strong>
											</span>
											@endif
										</div>
									</p>
									<button type="button" id="btnVoltar_3" class="signup btnvoltar3">Voltar</button>
									<button type="submit"  class="signup cadastro4" id="cadastrar" data-element="#section_4">Finalizar</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Arquivos JS
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<script rel="text/javascript" src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}" defer></script>
	<script rel="text/javascript" src="{{ asset('vendor/adminlte/vendor/inputmask/js/jquery.inputmask.bundle.js') }}" defer></script>
	<script rel="text/javascript" src="{{ asset('vendor/site/Style/dist/js/viacep.js') }}" defer></script>
	<script rel="text/javascript" src="{{ asset('vendor/site/Style/dist/js/cadastro.js') }}" defer></script>
	<script rel="text/javascript" src="{{ asset('vendor/site/Style/dist/js/jquery.toast.min.js') }}" defer></script>
	<script rel="text/javascript" src="{{ asset('vendor/site/popper/dist/popper.min.js') }}" defer></script>
	<script rel="text/javascript" src="{{ asset('vendor/site/bootstrap/js/bootstrap.min.js') }}" defer></script>
</body>
</html>
