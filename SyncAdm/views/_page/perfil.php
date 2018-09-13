<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Cadastro <small>Usuario do Sistema</small></h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div id="menssagem" style="display: none;" class="alert alert-info">
							<ul>
								<li></li>
							</ul>
						</div>
						<br>
						<form  class="form-horizontal form-label-left" id="formUser">

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Nome Completo <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="nomeCompleto" name="nomeCompleto" required="required" class="form-control col-md-7 col-xs-12 ">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >E-mail <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Login <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="login" id="login" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" >Senha <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="senha" id="senha" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button class="btn btn-primary" id="limpar" type="reset">Limpar</button>
									<button type="submit" id="submit" value="gravar" class="btn btn-success ">Gravar</button>
									<span id="carregar" class="fa fa-refresh fa-spin fa-3x fa-fw" style="display: none;"></span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript" charset="utf-8" async defer>
	$(document).ready(function () {
		
		$('#formUser').validate({
			// Definir as regras
			rules:{
				nomeCompleto:{required: true},
				email:       {required: true, email: true},
				login:       {required: true},
				senha:       {required: true, minlength: 8}
			},
			// Define as mensagens de erro para cada regra
			messages:{
				nomeCompleto:{ required: "Digite o seu nome Completo" },
				email:       { required: "Digite o seu e-mail", email: "Digite um e-mail valido" },
				login:       { required: "Digite o seu Login de acesso" },
				senha:       { required: "Digite o sua Senha", minlength: "O sua senha deve ter, no minimo, 8 caracteres" }
			},
			// Envia o formulario quando valido
			submitHandler: function(form) {
				var nomeC = $('#nomeCompleto').val();
				var email = $('#email').val();
				var login = $('#login').val();
				var senha = $('#senha').val();
				var acao =  $('#submit').val();
				$.ajax({
					url:'<?=HOME_URL?>php/CRUD_User.php',
					type:'POST',
					data:{
						acao:acao,
						nomeC:nomeC,
						email:email,
						login:login,
						senha:senha
					},
					beforeSend: function()
					{
						$('#carregar').css({'display':'block'});
						$('#menssagem').css({'display':'block'});
					},
					success: function(data)
					{
						$('#carregar').css({'display':'none'});
						$('#menssagem').css({'display':'none'});
						$('#menssagem ul li').html(data);
					},
					error: function(data)
					{
						$('#menssagem').css({'display':'none'});
						$('#menssagem').css({'alert-info':'#991905 !important'});
					}
				});
			}

		});

	});
</script>