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
	<!-- Icon Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
	<div id="section_1" class="content-wrapper">
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
							<form>
								<p class="content-item">
									<label>Nome completo
										<input type="text" class="input_nome" placeholder="Nome"  required>
									</label>
								</p>
								<p class="content-item">
									<label>EMail
										<input type="text" class="input_email" placeholder="email@email.com" name="email" required>
									</label>
								</p>
								<p class="content-item">
									<label>Senha
										<input type="password" class="input_senha" placeholder="*********" name="senha" required>
									</label>
								</p>
								<p class="content-item">
									<label>repetir Senha
										<input type="password" class="input_rsenha" placeholder="*********" name="rsenha" required>
									</label>
								</p>
								<button type="submit"  class="signup" data-element="#section_1">Avnaçar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="section_2" class="perfil_informacoes">
		<!-- <header>
			<div class="bgHeader col-12">
				<div class="container col-8">
					<nav class="navbar navbar-expand-lg navHeaderTop">
					<a class="navbar-brand" href="#">
						<img src="<?=HOME_URL?>/img/logo.svg" width="120px" class="img-fluid" alt="">
					</a>
					</nav>
				</div>
			</div>
		</header> -->

		<div class="container col-12">
			
			<div class="row">
				<div class="col-3 left-bar">
				</div>
				<div class="col-5 mid-bar text-center">
					Informações de perfil
				</div>		
				<div class="col-4 right-bar text-center">
					informações gerais
				</div>
			</div>
			
			<!-- <form class="cf"> 
			<div class="half left cf">
				<div class="col-10"> 
					<div class="row">
						<div class="col-5">
							<div class="form-group">
								<input type="text" id="input-name" placeholder="* CPF / CNPJ">
							</div>
						</div>

						<div class="col-5">
							<div class="form-group">
								<input type="email" id="input-email" placeholder="* RG / IE">
							</div>
						</div>

						<div class="col-5">
							<div class="form-group">
								<input type="text" id="input-subject" placeholder="Subject">
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type="submit" value="Submit" id="input-submit">-->
			</form>
		</div>
	</div>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<script src="jquery.min.js"></script>

	<script>
		$(function(){
			$('#section_2').hide();
		});

		$(function(){
			$(".signup").click(function(){
				$('#section_1').hide();
				$('#section_2').show();
			});
		});
	</script>
</body>
</html>


<!-- 'http://thecodeplayer.com/uploads/media/geometry.png' -->
