<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>CryptoSync - Site Oficial!</title>
		<meta name="description" content="Plataforma web voltada a segurança utilizando uma tecnologia descentralizada. O Blockchain.">
		<meta name="keywords" content="Blockchain, Ethereum, Smart Contracts, Contratos inteligentes, Segurança, Facilidade, Plataforma descentralizada.">
		<meta name="robots" content="index, follow">
		<meta name="author" content="CryptoSync">
		<link rel="icon" href="{{ asset('svg/buffer.svg') }}">

		<!-- Icones
		================================================== -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<!-- Bootstrap | CSS
		================================================== -->
		<link href="{{ asset('vendor/site/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('vendor/site/bootstrap/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('vendor/site/bootstrap/css/particles.css') }}" rel="stylesheet">

	</head>
	<body>
		<!--==========================
		HEADER
		============================-->
		<div class="bgHeader col-12">
			<div class="container col-10">
				<!-- Primeira NavBar -->
				<nav class="navbar navbar-expand-lg navHeaderTop">
					<a class="navbar-brand" href="#">
						<!-- Logo -->
						<img src="{!! asset('svg/logo.svg') !!}" width="120px" class="img-fluid" alt="">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse navbarSite">
						<ul class="navbar-nav">
							<li class="nav-item ">
								<a class="nav-link" href="">INICIO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">COMO FUNCIONA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">CLIENTES</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">PREÇOS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">SUPORTE</a>
							</li>
						</ul>
					</div>

					<!-- NavBar alinhada a direita ml-auto ml > Left | mr > right (procurando o centro)-->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<!-- Botão de Login com Dropdown -->
							<a class="nav-link btn btn-outline-primary btnLogin" data-toggle="dropdown" id="navDrop" href="">Login <i class="fas fa-caret-down"></i></a>

							<!-- Dropdown formulario de login -->
							<div class="dropdown-menu">
								
								<form class="px-4 py-3" method="POST" action="{{ route('login') }}">
									@csrf
									<div class="form-group">
										<label for="email">{{ __('E-Mail Address') }}</label>
										<input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

										@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
										@endif
									</div>
									<div class="form-group">
										<label for="password" >{{ __('Password') }}</label>
										<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

										@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>

									<div class="form-check"></div>
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										{{ __('Manter conectado') }}
									</label>

									<button type="submit" class="btn btn-primary">
										{{ __('Login') }}
									</button>

								</form>
								<div class="dropdown-divider"></div>
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Esqueceu sua senha?') }}
								</a>
							</div>
						</li>
						<!-- Botão de Cadastre-se -->
						<li class="nav-item">
							<a class=" btn btn-primary ml-2 btnCadastrar "  data-toggle="dropdown"  href="{{ route('register') }}">Cadastre-se</a>
						</li>
					</ul>
				</nav>
				<!-- NavBar Menu com toggler expand -->
				<!-- Em telas menores os itens da lista ficam dentro de um botão -->
			</div>
		</div>
	
		<!--==========================
		PRIMEIRO - Inicio - Texto Titulo
		============================-->
		<section class="section first">
			<div id="particles-js">
				<div class="d-flex justify-content-center">
					<div class="jumbotron title">
						<h1>PLATAFORMA DE AUTENTICAÇÃO<br><strong>DESCENTRALIZADA</strong></h1>
						<a href="#" class="btn"><strong>Eu quero fazer parte da internet descentralizada!</strong></a>
					</div>
				</div>
			</div>
		</section><!-- .Inicio -->

		<!--==========================
		Sobre nós Section
		============================-->
		<section class="sobre">
			<div class="container">

				<div class="section-title text-center">
					<h2>Sobre Nós</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>

				<div class="row sobre-cols">
					<div class="col-md-4 wow fadeInUp">
						<div class="sobre-col">
							<div class="img">
								<img src="{!! asset('img/sobre-missao.jpg') !!}" alt="" class="img-fluid">
								<div class="icon"><i class="fas fa-bolt"></i></div>
							</div>
							<h2 class="title"><a href="#">Nossa Missão</a></h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
						<div class="sobre-col">
							<div class="img">
								<img src="{!! asset('img/sobre-plano.jpg') !!}" alt="" class="img-fluid">
								<div class="icon"><i class="fas fa-hands-helping"></i></div>
							</div>
							<h2 class="title"><a href="#">Nossos Valores</a></h2>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
							</p>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
						<div class="sobre-col">
							<div class="img">
								<img src="{!! asset('img/sobre-visao.jpg') !!}" alt="" class="img-fluid">
								<div class="icon"><i class="fas fa-eye"></i></div>
							</div>
							<h2 class="title"><a href="#">Nossa Visão</a></h2>
							<p>
								Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #sobre -->

		<!--==========================
		Call To Action Section
		============================-->
		<section id="call-to-action" class="wow fadeIn">
			<div class="container text-center">
				<h3>Call To Action</h3>
				<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a class="cta-btn" href="#">Call To Action</a>
			</div>
		</section><!-- #call-to-action -->
		<!--==========================
		FATOS - Inicio - Texto Titulo - COLOCAR NOME MELHOR E IMAGEM
		============================-->
		<section class="section fatos">
			<div class="container">
				<div class="section-title text-center">
					<h2>Fatos</h2>
					<p>texto bacana pros usuarios ficarem impressionados</p>
					<br><br><br><br>
					<div class="row counters">
						<div class="col-lg-3 col-6 text-center">
							<span data-toggle="counter-up">274</span>
							<p>Clientes</p>
						</div>
						<div class="col-lg-3 col-6 text-center">
							<span data-toggle="counter-up">421</span>
							<p>Contratos Registrados</p>
						</div>
						<div class="col-lg-3 col-6 text-center">
							<span data-toggle="counter-up">1,364</span>
							<p>Problemas Resolvidos</p>
						</div>
						<div class="col-lg-3 col-6 text-center">
							<span data-toggle="counter-up">18</span>
							<p>Arvores Poupadas</p>
						</div>
					</div>
					<div class="fatos-img">
						<img src="{!! asset('img/fatos-img.png') !!}" alt="" class="img-fluid" width="900px">
					</div>
				</div>
			</div>
		</section><!-- .fatos -->

		<!--==========================
		Features Section
		============================-->

		<section class="features text-center wow fadeInUp">
			<div class="container">
				<div class="section-title text-center">
					<h2>Features Increveis</h2>
					<p class="separator">Integer cursus bibendum augue ac cursus .</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>creative design</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>Retina Ready</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>easy to use</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>Free Updates</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>Free Updates</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>App store support</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>Perfect Pixel</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="feature-block">
							<img src="{!! asset('svg/cloud.svg') !!}" alt="img" class="img-fluid">
							<h4>clean codes</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
						</div>
					</div>

				</div>
				<br><br><br><br>
			</div>
		</section>



		<!--==========================
		  Clients Section
		  ============================-->
		  <section class="clients">
		  	<div class="container">
		  		<div class="section-title text-center">
		  			<h2>Nossos Clientes</h2>
		  		</div>

		  		<div class="d-flex justify-content-center clients-carousel">
		  			<div class="row">
		  				<div class="col-sm-4">
		  					<img src="{!! asset('img/clients/client-1.png') !!}" alt="">
		  				</div>
		  				<div class="col-sm-4">
		  					<img src="{!! asset('img/clients/client-2.png') !!}" alt="">
		  				</div>
		  				<div class="col-sm-4">
		  					<img src="{!! asset('img/clients/client-3.png') !!}" alt="">
		  				</div>
		  				<div class="col-sm-4">
		  					<img src="{!! asset('img/clients/client-4.png') !!}" alt="">
		  				</div>
		  				<div class="col-sm-4">
		  					<img src="{!! asset('img/clients/client-5.png') !!}" alt="">
		  				</div>
		  				<div class="col-sm-4">
		  					<img src="{!! asset('img/clients/client-6.png') !!}" alt="">
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		  </section><!-- #clients -->

		<!--==========================
		ULTIMO - Preços
		============================-->
		<section class="pricing py-5">
			<div class="container">
				<div class="section-title text-center">
					<h2>Preços</h2>
					<p>mini texto legal pro user</p>
					<br><br><br><br>
				</div>
				<div class="row">
					<!-- Standard Tier -->
					<div class="col-lg-4">
						<div class="card mb-5 mb-lg-0">
							<div class="card-body">
								<h5 class="card-title text-muted text-uppercase text-center">STANDARD STACK</h5>
								<h6 class="card-price text-center">R$20<span class="period">/mês</span></h6>
								<div class="price-icon d-flex justify-content-center">
									<img src="{!! asset('svg/premium.svg') !!}" alt="Stack" class="img-fluid img-responsive" width="50px">
								</div>
								<hr>
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fas fa-check"></i></span>5 Contratos</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
									<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
									<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
									<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
									<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
								</ul>
								<a href="#" class="btn btn-block btn-primary text-uppercase btnprice">Button</a>
							</div>
						</div>
					</div>
					<!-- Plus Tier -->
					<div class="col-lg-4">
						<div class="card mb-5 mb-lg-0">
							<div class="card-body">
								<h5 class="card-title text-muted text-uppercase text-center">PLUS STACK</h5>
								<h6 class="card-price text-center">R$70<span class="period">/mês</span></h6>
								<div class="price-icon d-flex justify-content-center">
									<img src="{!! asset('svg/premiumplus.svg') !!}" alt="Stack" class="img-fluid img-responsive" width="50px">
								</div>
								<hr>
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fas fa-check"></i></span><strong>20 Contratos</strong></li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
									<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
								</ul>
								<a href="#" class="btn btn-block btn-primary text-uppercase btnprice">Button</a>
							</div>
						</div>
					</div>

					<!-- Premium Tier -->
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-muted text-uppercase text-center">PREMIUM STACK</h5>
								<h6 class="card-price text-center">R$150 <span class="period">/mês</span></h6>
								<div class="price-icon d-flex justify-content-center">
									<img src="{!! asset('svg/max2.svg') !!}" alt="Stack" class="img-fluid img-responsive" width="50px">
								</div>
								<hr>
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fas fa-check"></i></span><strong>50 Contratos</strong></li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
									<li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
								</ul>
								<a href="#" class="btn btn-block btn-primary text-uppercase btnprice">Button</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br><br>

			<div class="container col-10">
				<div class="alert alert-light text-center orcamento-price" role="alert">
					Caso os planos acima não atenda suas necessidades <a href="#" class="alert-link"><strong>entre em contato com nossa equipe</strong></a> informando a sua necessidade para fazer o seu orçamento.
				</div>
			</div>
		</section>

		<!--==========================
		ULTIMO - FOOTER - NEWSLATTER - CONTATO
		============================-->

		<footer class="footer section third">
			<section class="contato section-bg-color-footer">
				<div class="row">
					<div class="container col-6	contato-section">
						<div class="section-title text-center">
							<h2>Entre em contato conosco.</h2>
							<br><br>
							<p>Envie uma mensagem relatando um problema ou um pedido de melhoria.</p>
						</div>
						<div class="form">
							<div id="menssagemenviada">Sua menssagem foi enviada com sucesso! Entraremos em contato em breve.</div>
							<div id="menssagemerro"></div>
							<form action="" method="post" role="form" class="contactForm">
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" class="form-control" name="name" id="name" placeholder="Seu Nome"/>
									</div>
									<div class="form-group col-md-6">
										<input type="email" class="form-control" name="email" id="email" placeholder="Seu Email"/>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto"/>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="menssagem" rows="5"></textarea>
								</div>
								<div class="text-center"><button type="submit">Enviar</button></div>
							</form>
						</div>
					</div>
					<div class="container col-6	newslatter-section">
						<div class="section-title text-center">
							<h2>Assine nossa NEWSLETTER</h2>
						</div>
						<br><br>
						<div class="form">
							<div id="menssagemenviada">Sua menssagem foi enviada com sucesso! Entraremos em contato em breve.</div>
							<div id="menssagemerro"></div>
							<form action="" method="post" role="form"  align="center" class="contactForm">
								<div class="form-row">
									<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
										<input type="email" class="form-control text-center form-newslatter" name="email" id="email" placeholder="Seu Email"/>
									</div>
								</div>
								<div class="text-center"><button type="submit">Assinar</button></div>
							</form>
						</div>
						<br><br><div class="divisor"></div><br><br>
						<div class="section-title text-center">
							<h2>Nos siga nas redes-sociais</h2>
						</div>
						<div class="icons-sociais text-center">
							<i class="fab fa-facebook-f"></i>
							<i class="fab fa-twitter"></i>
							<i class="fab fa-youtube"></i>
							<i class="fab fa-linkedin-in"></i>
							<i class="fab fa-instagram"></i>
						</div>
					</div>
				</div>
			</section><!-- .contato -->
			<div class="divisor"></div>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col coluna3">
							<img src="{!! asset('svg/logo2.svg') !!}" alt="" class="img-fluid" width="150px">
							<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="col coluna4">
							<div class="row">
								<div class="col-4 col-md">
									<h5>Companhia</h5>
									<ul class="list-unstyled text-small">
										<li><a class="text-muted" href="#">Comercial</a></li>
										<li><a class="text-muted" href="#">Empresarial</a></li>
									</ul>
								</div>
								<div class="col-4 col-md">
									<h5>Suporte</h5>
									<ul class="list-unstyled text-small">
										<li><a class="text-muted" href="#">Ajuda</a></li>
										<li><a class="text-muted" href="#">FAQ</a></li>
										<li><a class="text-muted" href="#">Contato</a></li>
									</ul>
								</div>
								<div class="col-4 col-md">
									<h5>Legal</h5>
									<ul class="list-unstyled text-small">
										<li><a class="text-muted" href="#">Termos</a></li>
										<li><a class="text-muted" href="#">Privacidade</a></li>
										<li><a class="text-muted" href="#">Reembolsos</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- .footer

		<!-- Arquivos JS
		================================================== -->

		 <script rel="stylesheet" src="{{ asset('vendor/site/popper/dist/popper.min.js') }}" defer></script>
		 <script rel="stylesheet" src="{{ asset('vendor/site/style/dist/js/particles.js/particles.js') }}" defer></script>
		 <script rel="stylesheet" src="{{ asset('vendor/site/style/dist/js/particles.js/app.js') }}" defer></script>
		 <script rel="stylesheet" src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
		 <script rel="stylesheet" src="{{ asset('vendor/site/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--- JS usado no particles.js -->
		<script rel="stylesheet" defer> 
			onkeyup=""
		 	particlesJS.load('particles-js', "{{ asset('vendor/site/Style/dist/js/particles.js/particles.json') }}", function() {});
		</script>

	</body>
</html>
