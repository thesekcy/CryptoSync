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
								<form action="/registro" method="POST" accept-charset="utf-8" class="form" >
	
									<div id="section_1">
										<p class="content-item">
											<div class="form-group">
												<label class="form-label">Nome completo</label>
												<input type="text" class="input_nome" required>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="email" class="input_email" required>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label">Senha</label>
												<input type="password" autocomplete="password" class="input_senha" required>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label">Repitir Senha</label>
												<input type="password" autocomplete="password" class="input_rsenha" required>
											</div>
										</p>
										<button type="submit"  class="signup cadastro1" data-element="#section_1">Avançar</button>
									</div>
	
									<div id="section_2">
										<p class="content-item">
											<div class="form-group">
												<label class="form-label" id="r">RG</label>
												<input type="text" id="ierg" class="input_rg" required>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label" id="c">CPF</label>
												<input type="text" id="cpfcnpj" class="input_cpf" required>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label">Data de Nascimento</label>
												<input id="data" class="form-input input_dtNasc" type="text" />
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label cbSemAnimacao">Sexo</label>
												<select name="potencial"  class="custom-select sources">
											  <option value="M" selected>Masculino</option>
											  <option value="F">Feminino</option>
											</select>
											</div>
										</p>
										<button type="submit" id="btnVoltar_1" class="signup btnvoltar1">Voltar</button>
										<button type="submit"  class="signup cadastro2" data-element="#section_2">Avançar</button>
									</div>
	
									<div id="section_3">
										<p class="content-item">
											<div class="row">
											  <div class="col-4">
												<div class="form-group">
												  <label class="form-label" for="first">CEP</label>
												  <input class="form-input input_cep" id="cep" type="text" />
												</div>
											  </div>
											  <div class="col-4">
												<div class="form-group">
												  <label class="form-label" for="last">Numero</label>
												  <input class="form-input input_num" id="numero" type="text"/>
												</div>
											  </div>
											  <div class="col-4">
												<div class="form-group">
												  <label class="form-label" for="last">Complemento</label>
												  <input class="form-input input_complemento" id="complemento" type="text"/>
												</div>
											  </div>
											</div>
										</p>
	
										<p class="content-item">
											<div class="row">
											  <div class="col-12">
												<div class="form-group">
												  <label class="form-label cbSemAnimacao" for="last">Rua</label>
												  <input class="form-input disabledbutton input_rua" id="rua" type="text" readonly="readonly"/>
												</div>
											  </div>
											</div>
										</p>
	
										<p class="content-item">
											<div class="row">
											  <div class="col-12">
												<div class="form-group">
												  <label class="form-label cbSemAnimacao" for="first">Bairro</label>
												  <input class="form-input disabledbutton input_bairro" id="bairro" type="text" readonly="readonly"/>
												</div>
											  </div>
											</div>
										</p>
	
										<p class="content-item">
											<div class="row">
											  <div class="col-8">
												<div class="form-group">
												  <label class="form-label cbSemAnimacao" for="first">Cidade</label>
												  <input class="form-input disabledbutton input_cidade" id="cidade" type="text" readonly="readonly"/>
												</div>
											  </div>
											  <div class="col-4">
												<div class="form-group">
												  <label class="form-label cbSemAnimacao" for="last">UF</label>
												  <input class="form-input disabledbutton input_uf" id="uf" type="text" readonly="readonly"/>
												</div>
											  </div>
											</div>
										</p>
										<button type="submit" id="btnVoltar_2" class="signup btnvoltar2">Voltar</button>
										<button type="submit"  class="signup cadastro3" data-element="#section_3">Avançar</button>
										
									</div>
	
									<div id="section_4">
										<p class="content-item">
											<div class="form-group">
												<label class="form-label cbSemAnimacao">Profissão</label>
												<select name="potencial"  class="custom-select sources">
													<option value="1" selected>Programador</option>
													<option value="2">Garoto de Programa</option>
												</select>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label cbSemAnimacao">Estado Civil</label>
												<select name="potencial"  class="custom-select sources">
													<option value="1" selected>Solteiro(a)</option>
													<option value="2">Casado(a)</option>
													<option value="2">Divorciado(a)</option>
													<option value="2">Viuvo(a)</option>
												</select>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label cbSemAnimacao	">Nacionalidade</label>
												<select name="potencial"  class="custom-select sources">
													<option value="1" selected>Brasileira</option>
													<option value="2">Americana</option>
													<option value="2">Argentina</option>
													<option value="2">Francesa</option>
												</select>
											</div>
										</p>
										<p class="content-item">
											<div class="form-group">
												<label class="form-label">Telefone</label>
													<input class="form-input input_tel tel" name="tel" id="tel" type="text"/>
											</div>
										</p>
										<button type="submit" id="btnVoltar_3" class="signup btnvoltar3">Voltar</button>
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
