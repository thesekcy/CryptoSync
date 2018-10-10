@extends('adminlte::page')

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
			<br>
			<div class="col-md-12">
				<div id="gender" class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
						<input type="radio" name="gender" value="fisica"> &nbsp; Pessoa Fisica &nbsp;
					</label>
					<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
						<input type="radio" name="gender" value="juridica">Pessoa Juridica
					</label>
				</div>
			</div>
			<br><br><br>
			<div class="col-md-6">
				<div class="col-md-6">
					<div class="row">
					<div class="form-group">
						<label id="c">* CPF</label>
						<input type="text" name="cpfcnfpj" id="cpfcnpj" class="form-control" placeholder="Endereço">
					</div><!-- /.form-group -->
					</div>
				</div>
				<div class="col-md-6">
					
					<div class="form-group">
						<label>* Sexo:</label>
						<select class="form-control">
							<option>Masculino</option>
							<option>Feminino</option>
						</select>
					</div><!-- /.form-group -->
				
				</div>
				<div class="form-group">
					<label>* Data de Nascimento</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" id="data" class="form-control" >
					</div>
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* End:</label>
					<input type="text" name="end" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* Bairro</label>
					<input type="text" name="bairro" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* Pais</label>
					<input type="text" name="pais" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
			</div><!-- /.col -->
			<div class="col-md-6">
				<div class="form-group">
					<label id="r">* RG</label>
					<input type="text" name="ierg" id="ierg" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* Estado Civil</label>
					<select class="form-control">
						<option>Casado</option>
						<option>Solteiro</option>
					</select>
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* CEP</label>
					<input type="text" name="cep" id="cep" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* Nacionalidade</label>
					<input type="text" name="nascionalidade" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* Estado</label>
					<input type="text" name="estado" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* UF</label>
					<input type="text" name="uf" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
				<div class="form-group">
					<label>* Telefone</label>
					<input type="text" name="tel" id="tel" class="form-control" placeholder="Endereço">
				</div><!-- /.form-group -->
			</div><!-- /.col -->
		</form><!-- /.form -->
	</div><!-- /.box-body -->
</div><!-- /.box-default -->

@stop

@section('smartwizard_js')
	<script src="{{ asset('vendor/adminlte/vendor/inputmask/js/jquery.inputmask.bundle.js') }}"></script>
	<script  type="text/javascript" >
		$(document).ready(function(){
			(function($){ 
				$('#data').inputmask("datetime",{
					mask: "1-2-y", 
					placeholder: "dd-mm-yyyy", 
					leapday: "-02-29", 
					separator: "/", 
					alias: "dd/mm/yyyy"
				});
				$("input[id*='cpfcnpj']").inputmask({ mask: ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true });
				$("input[id*='ierg']").inputmask({ mask: ['99.999.999-9', '999999999-0'], keepStatic: true });
				$("input[id*='cep']").inputmask({ mask: ['99999-999'], keepStatic: true });
				$("input[id*='tel']").inputmask({ mask: ['(99)9999-9999', '(99)99999-9999'], keepStatic: true });

				$("input:radio").change(function(){
        			var valor = $("input[name='gender']:checked").val();
        			
        			if(valor == 'fisica'){
        				$("#c").html('* CPF');
        				$("#r").html('* RG');
        			}else{
        				$("#c").html('* CNPJ');
        				$("#r").html('* Inscrição Estadual');
        			}
    			});

			})(jQuery)
		});
	</script>
@yield('js')
@stop