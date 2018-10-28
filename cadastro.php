<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CryptoSync - Site Oficial!</title>
	<!-- Required meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="\CryptoSync\node_modules\bootstrap\compiler\bootstrap.css">
	<link rel="stylesheet" href="\CryptoSync\node_modules\bootstrap\compiler\cadastro.css">
	<link rel="stylesheet" href="jquery.toast.min.css">
	<!-- Icon Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
	<div class="content-wrapper">
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
					</div>
				</div>
				<div class="signup-form ">
					<div class="wrapper-2">
						<div class="form-title">Crie sua conta</div>
						<div class="form">
							<form class="form">

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
											<input type="text" class="input_email" required>
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Senha</label>
											<input type="password" class="input_senha" required>
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Repitir Senha</label>
											<input type="password" class="input_rsenha" required>
										</div>
									</p>
									<button type="submit"  class="signup cadastro1" data-element="#section_1">Avançar</button>
								</div>

								<div id="section_2">
									<p class="content-item">
										<div class="form-group">
											<label class="form-label" id="r">RG</label>
											<input type="text" id="ierg" class="input_nome" required>
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label" id="c">CPF</label>
											<input type="text" id="cpfcnpj" class="input_email" required>
										</div>
									</p>
									<p class="content-item">
										<div class="form-group">
											<label class="form-label">Data de Nascimento</label>
											<input id="data" class="form-input" type="text" />
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
									<button type="submit"  class="signup cadastro2" data-element="#section_2">Avançar</button>
								</div>

								<div id="section_3">
									<p class="content-item">
										<div class="row">
										  <div class="col-4">
										    <div class="form-group">
										      <label class="form-label" for="first">CEP</label>
										      <input class="form-input" id="cep" type="text" />
										    </div>
										  </div>
										  <div class="col-4">
										    <div class="form-group">
										      <label class="form-label" for="last">Numero</label>
										      <input class="form-input" id="numero" type="text"/>
										    </div>
										  </div>
										  <div class="col-4">
										    <div class="form-group">
										      <label class="form-label" for="last">Complemento</label>
										      <input class="form-input" id="complemento" type="text"/>
										    </div>
										  </div>
										</div>
									</p>

									<p class="content-item">
										<div class="row">
										  <div class="col-12">
										    <div class="form-group">
										      <label class="form-label cbSemAnimacao" for="last">Rua</label>
										      <input class="form-input disabledbutton" id="rua" type="text" readonly="readonly"/>
										    </div>
										  </div>
										</div>
									</p>

									<p class="content-item">
										<div class="row">
										  <div class="col-12">
										    <div class="form-group">
										      <label class="form-label cbSemAnimacao" for="first">Bairro</label>
										      <input class="form-input disabledbutton" id="bairro" type="text" readonly="readonly"/>
										    </div>
										  </div>
										</div>
									</p>

									<p class="content-item">
										<div class="row">
										  <div class="col-8">
										    <div class="form-group">
										      <label class="form-label cbSemAnimacao" for="first">Cidade</label>
										      <input class="form-input disabledbutton" id="cidade" type="text" readonly="readonly"/>
										    </div>
										  </div>
										  <div class="col-4">
										    <div class="form-group">
										      <label class="form-label cbSemAnimacao" for="last">UF</label>
										      <input class="form-input disabledbutton" id="uf" type="text" readonly="readonly"/>
										    </div>
										  </div>
										</div>
									</p>
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
												<input class="form-input tel" name="tel" id="tel" type="text"/>
										</div>
									</p>
									<button type="submit"  class="signup cadastro4" data-element="#section_4">Avançar</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<script src="jquery.min.js"></script>
	<script src="jquery.inputmask.bundle.js"></script>
	<script src="viacep.js"></script>
	<script src="cadastro.js"></script>
	<script src="jquery.toast.min.js"></script>


</body>
</html>


<!-- 'http://thecodeplayer.com/uploads/media/geometry.png' -->
