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
<div class="row">
	<div class="col-md-6">
		<div class="box box-default">
			<!-- /.box-header -->
			<div class="box-body">
				<form action="/perfil/create" method="post" accept-charset="utf-8">
					@csrf
					@if(isset($errors) && count($errors) > 0 )
					<div class="alert alert-danger">
						<ul class="margin-bottom-none padding-left-lg">
							<li>Todos os campos com * são Obrigatorios.</li>
							<li>OBS: As informaçãoes serão usadas nos contratos .</li>
						</ul>
					</div>
					@else
					<div class="alert alert-info">
						<ul class="margin-bottom-none padding-left-lg">
							<li>Todos os campos com * são Obrigatorios.</li>
							<li>OBS: As informaçãoes serão usadas nos contratos .</li>
						</ul>
					</div>
					@endif
					<div class="col-md-12 row">
						<input type="hidden" name="id_users" value="{{ auth()->guard('web')->user()->id}}"  class="form-control">
						<div class="col-md-12">
							<div class="form-group {{ $errors->has('nmCompleto') ? 'has-error' : '' }}">
								<label id="c">* Nome Completo</label>
								<input type="text" name="nmCompleto" class="form-control" value="{{isset($perfils->nmCompleto) ? $perfils->nmCompleto: auth()->guard('web')->user()->name}}">
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('cpf_cnpj') ? 'has-error' : '' }}">
								<label id="c">* CPF / CNPJ</label>
								<input type="text" name="cpf_cnpj" id="cpfcnpj" class="form-control" placeholder="CPF ou CNPJ para empresa" value="{{isset($perfils->cpf_cnpj) ? $perfils->cpf_cnpj: old('cpf_cnpj')}}">
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('rg_ie') ? 'has-error' : '' }}">
								<label id="r">* RG / IE</label>
								<input type="text" name="rg_ie" id="ierg" class="form-control" placeholder="RG ou IE para empresa" value="{{ isset($perfils->rg_ie) ? $perfils->rg_ie :  old('rg_ie')}}">
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-4">
							<div class="form-group {{ $errors->has('sexo') ? 'has-error' : '' }}">
								<label>* Sexo:</label>
								<select class="form-control" name="sexo">
									<option value=""> </option>
									<option value="M">Masculino</option>
									<option value="F">Feminino</option>
								</select>
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-4">
							<div class="form-group {{ $errors->has('dtNasc') ? 'has-error' : '' }}">
								<label>* Data de Nasc</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="dtNasc" id="dtNasc" class="form-control" placeholder="dd/mm/yyyy" value="{{old('dtNasc')}}">
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
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('tel') ? 'has-error' : '' }}">
								<label>* Telefone</label>
								<input type="text" name="tel" id="tel" class="form-control" placeholder="Telefone para contato">
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('proficao') ? 'has-error' : '' }}">
								<label>* Profição:</label>
								<select class="form-control selectpicker" name="proficao" data-live-search="true">
									<option value="">Selecione a Profissão</option>
									<option value="Administrador(a)">Administrador(a)</option>
									<option value="Administrador(a) Condominial">Administrador(a) Condominial</option>
									<option value="Administrador(a) de Banco de Dados - DBA">Administrador(a) de Banco de Dados - DBA</option>
									<option value="Administrador(a) de Clínica de Estética">Administrador(a) de Clínica de Estética</option>
									<option value="Administrador(a) de Redes">Administrador(a) de Redes</option>
									<option value="Advogado(a)">Advogado(a)</option>
									<option value="Agente Administrativo">Agente Administrativo</option>
									<option value="Agente de Aeroporto">Agente de Aeroporto</option>
									<option value="Agente de Comércio Exterior">Agente de Comércio Exterior</option>
									<option value="Agente de Defesa Ambiental">Agente de Defesa Ambiental</option>
									<option value="Agente de Marketing">Agente de Marketing</option>
									<option value="Agente de Negócios">Agente de Negócios</option>
									<option value="Agente de Portaria">Agente de Portaria</option>
									<option value="Agente de Retenção">Agente de Retenção</option>
									<option value="Agente de Segurança">Agente de Segurança</option>
									<option value="Agente de Trânsito">Agente de Trânsito</option>
									<option value="Agente de Turismo">Agente de Turismo</option>
									<option value="Almoxarife">Almoxarife</option>
									<option value="Analista Comercial">Analista Comercial</option>
									<option value="Analista Contabil">Analista Contabil</option>
									<option value="Analista da Qualidade">Analista da Qualidade</option>
									<option value="Analista de Atendimento">Analista de Atendimento</option>
									<option value="Analista de Controladoria">Analista de Controladoria</option>
									<option value="Analista de Crédito">Analista de Crédito</option>
									<option value="Analista de Custos">Analista de Custos</option>
									<option value="Analista de Informação e Adminstração">Analista de Informação e Adminstração</option>
									<option value="Analista de Laboratório">Analista de Laboratório</option>
									<option value="Analista de Logística">Analista de Logística</option>
									<option value="Analista de Mercado">Analista de Mercado</option>
									<option value="Analista de O &amp; M">Analista de O &amp; M</option>
									<option value="Analista de Orçamento">Analista de Orçamento</option>
									<option value="Analista de PCP">Analista de PCP</option>
									<option value="Analista de Pesquisa">Analista de Pesquisa</option>
									<option value="Analista de Planejamento">Analista de Planejamento</option>
									<option value="Analista de Projetos">Analista de Projetos</option>
									<option value="Analista de R H - Recursos Humanos">Analista de R H - Recursos Humanos</option>
									<option value="Analista de Risco de Mercado">Analista de Risco de Mercado</option>
									<option value="Analista de Seguros">Analista de Seguros</option>
									<option value="Analista de Sistemas">Analista de Sistemas</option>
									<option value="Analista de Suporte">Analista de Suporte</option>
									<option value="Analista de Treinamento">Analista de Treinamento</option>
									<option value="Analista do Produto">Analista do Produto</option>
									<option value="Analista Financeiro">Analista Financeiro</option>
									<option value="Analista Fiscal">Analista Fiscal</option>
									<option value="Analista Jurídico">Analista Jurídico</option>
									<option value="Analista Tributário">Analista Tributário</option>
									<option value="Angariador de Seguros">Angariador de Seguros</option>
									<option value="Antropólogo(a)">Antropólogo(a)</option>
									<option value="Apontador(a) de Produção">Apontador(a) de Produção</option>
									<option value="Apontador(a) de Tráfego">Apontador(a) de Tráfego</option>
									<option value="Aposentado">Aposentado</option>
									<option value="Arquiteto">Arquiteto</option>
									<option value="Arquiteto Urbanista">Arquiteto Urbanista</option>
									<option value="Arquivista">Arquivista</option>
									<option value="Arte-finalista">Arte-finalista</option>
									<option value="Assessor(a)">Assessor(a)</option>
									<option value="Assessor(a) Adm. Financeiro">Assessor(a) Adm. Financeiro</option>
									<option value="Assessor(a) Administrativo">Assessor(a) Administrativo</option>
									<option value="Assessor(a) Comercial">Assessor(a) Comercial</option>
									<option value="Assessor(a) Comunitário">Assessor(a) Comunitário</option>
									<option value="Assessor(a) Contábil">Assessor(a) Contábil</option>
									<option value="Assessor(a) Cultural">Assessor(a) Cultural</option>
									<option value="Assessor(a) de Cliente">Assessor(a) de Cliente</option>
									<option value="Assessor(a) de Comunicação">Assessor(a) de Comunicação</option>
									<option value="Assessor(a) de Coordenação">Assessor(a) de Coordenação</option>
									<option value="Assessor(a) de Marketing">Assessor(a) de Marketing</option>
									<option value="Assessor(a) de Produção">Assessor(a) de Produção</option>
									<option value="Assessor(a) de Tecnologia">Assessor(a) de Tecnologia</option>
									<option value="Assessor(a) de Vendas">Assessor(a) de Vendas</option>
									<option value="Assessor(a) Financeiro">Assessor(a) Financeiro</option>
									<option value="Assessor(a) Jurídico">Assessor(a) Jurídico</option>
									<option value="Assistente Adm. Financeiro">Assistente Adm. Financeiro</option>
									<option value="Assistente Administrativo">Assistente Administrativo</option>
									<option value="Assistente Comercial">Assistente Comercial</option>
									<option value="Assistente Contábil">Assistente Contábil</option>
									<option value="Assistente de A &amp; B - Alimentos e Bebidas">Assistente de A &amp; B - Alimentos e Bebidas</option>
									<option value="Assistente de Administração Pessoal">Assistente de Administração Pessoal</option>
									<option value="Assistente de Atendimento">Assistente de Atendimento</option>
									<option value="Assistente de Avaliação">Assistente de Avaliação</option>
									<option value="Assistente de Biblioteca">Assistente de Biblioteca</option>
									<option value="Assistente de Bordo">Assistente de Bordo</option>
									<option value="Assistente de Compras">Assistente de Compras</option>
									<option value="Assistente de Comunicação">Assistente de Comunicação</option>
									<option value="Assistente de Consultoria">Assistente de Consultoria</option>
									<option value="Assistente de Controladoria">Assistente de Controladoria</option>
									<option value="Assistente de Cpd">Assistente de Cpd</option>
									<option value="Assistente de Crédito e Cobrança">Assistente de Crédito e Cobrança</option>
									<option value="Assistente de Depto. de Pessoal">Assistente de Depto. de Pessoal</option>
									<option value="Assistente de Depto. Fiscal">Assistente de Depto. Fiscal</option>
									<option value="Assistente de Diretoria">Assistente de Diretoria</option>
									<option value="Assistente de Gerência">Assistente de Gerência</option>
									<option value="Assistente de Imp. e Exportação">Assistente de Imp. e Exportação</option>
									<option value="Assistente de Marketing">Assistente de Marketing</option>
									<option value="Assistente de Mídia">Assistente de Mídia</option>
									<option value="Assistente de PCP">Assistente de PCP</option>
									<option value="Assistente de Pesquisa">Assistente de Pesquisa</option>
									<option value="Assistente de Projetos">Assistente de Projetos</option>
									<option value="Assistente de Publicidade e Propaganda">Assistente de Publicidade e Propaganda</option>
									<option value="Assistente de Qualidade">Assistente de Qualidade</option>
									<option value="Assistente de Rh - Recursos Humanos">Assistente de Rh - Recursos Humanos</option>
									<option value="Assistente de Tráfego">Assistente de Tráfego</option>
									<option value="Assistente de Treinamento">Assistente de Treinamento</option>
									<option value="Assistente de Vendas">Assistente de Vendas</option>
									<option value="Assistente do Terceiro Setor">Assistente do Terceiro Setor</option>
									<option value="Assistente Executiva Bilíingue">Assistente Executiva Bilíingue</option>
									<option value="Assistente Financeiro">Assistente Financeiro</option>
									<option value="Assistente Social">Assistente Social</option>
									<option value="Atendente">Atendente</option>
									<option value="Atendente de Cadastro">Atendente de Cadastro</option>
									<option value="Atendente de Call Center">Atendente de Call Center</option>
									<option value="Atendente de Clientes">Atendente de Clientes</option>
									<option value="Atendente de Crédito">Atendente de Crédito</option>
									<option value="Atendente de Help-Desk">Atendente de Help-Desk</option>
									<option value="Atendente de Reservas">Atendente de Reservas</option>
									<option value="Atendente Jurídico">Atendente Jurídico</option>
									<option value="Atendente Publicitário">Atendente Publicitário</option>
									<option value="Atuário">Atuário</option>
									<option value="Auditor(a)">Auditor(a)</option>
									<option value="Auditor(a) da Qualidade">Auditor(a) da Qualidade</option>
									<option value="Auxiliar Adm. Financeiro">Auxiliar Adm. Financeiro</option>
									<option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
									<option value="Auxiliar Comercial">Auxiliar Comercial</option>
									<option value="Auxiliar de Almoxarifado">Auxiliar de Almoxarifado</option>
									<option value="Auxiliar de Área">Auxiliar de Área</option>
									<option value="Auxiliar de Atendimento">Auxiliar de Atendimento</option>
									<option value="Auxiliar de Auditoria">Auxiliar de Auditoria</option>
									<option value="Auxiliar de Cadastro">Auxiliar de Cadastro</option>
									<option value="Auxiliar de Cobrança">Auxiliar de Cobrança</option>
									<option value="Auxiliar de Comércio Exterior">Auxiliar de Comércio Exterior</option>
									<option value="Auxiliar de Compras">Auxiliar de Compras</option>
									<option value="Auxiliar de Contabilidade">Auxiliar de Contabilidade</option>
									<option value="Auxiliar de Controle de Mercadoria">Auxiliar de Controle de Mercadoria</option>
									<option value="Auxiliar de Controle de Qualidade">Auxiliar de Controle de Qualidade</option>
									<option value="Auxiliar de Coordenação">Auxiliar de Coordenação</option>
									<option value="Auxiliar de Cozinha">Auxiliar de Cozinha</option>
									<option value="Auxiliar de Crédito">Auxiliar de Crédito</option>
									<option value="Auxiliar de Custos">Auxiliar de Custos</option>
									<option value="Auxiliar de Depto. de Pessoal">Auxiliar de Depto. de Pessoal</option>
									<option value="Auxiliar de Depto. Fiscal">Auxiliar de Depto. Fiscal</option>
									<option value="Auxiliar de Despachante">Auxiliar de Despachante</option>
									<option value="Auxiliar de Enfermagem">Auxiliar de Enfermagem</option>
									<option value="Auxiliar de Enfermagem do Trabalho">Auxiliar de Enfermagem do Trabalho</option>
									<option value="Auxiliar de Engenharia">Auxiliar de Engenharia</option>
									<option value="Auxiliar de Escritório">Auxiliar de Escritório</option>
									<option value="Auxiliar de Estilista">Auxiliar de Estilista</option>
									<option value="Auxiliar de Estoque">Auxiliar de Estoque</option>
									<option value="Auxiliar de Expedição">Auxiliar de Expedição</option>
									<option value="Auxiliar de Factoring">Auxiliar de Factoring</option>
									<option value="Auxiliar de Farmácia">Auxiliar de Farmácia</option>
									<option value="Auxiliar de Faturamento">Auxiliar de Faturamento</option>
									<option value="Auxiliar de Filmagem e Edição">Auxiliar de Filmagem e Edição</option>
									<option value="Auxiliar de Fretamento">Auxiliar de Fretamento</option>
									<option value="Auxiliar de Gerência">Auxiliar de Gerência</option>
									<option value="Auxiliar de Importação">Auxiliar de Importação</option>
									<option value="Auxiliar de Informática">Auxiliar de Informática</option>
									<option value="Auxiliar de Laboratório de Análises Clínicas">Auxiliar de Laboratório de Análises Clínicas</option>
									<option value="Auxiliar de Loja">Auxiliar de Loja</option>
									<option value="Auxiliar de Manutenção">Auxiliar de Manutenção</option>
									<option value="Auxiliar de Mecânico Naval">Auxiliar de Mecânico Naval</option>
									<option value="Auxiliar de O &amp; M">Auxiliar de O &amp; M</option>
									<option value="Auxiliar de Odontologia">Auxiliar de Odontologia</option>
									<option value="Auxiliar de Padaria">Auxiliar de Padaria</option>
									<option value="Auxiliar de Patrimônio">Auxiliar de Patrimônio</option>
									<option value="Auxiliar de Pcp">Auxiliar de Pcp</option>
									<option value="Auxiliar de Pesquisa">Auxiliar de Pesquisa</option>
									<option value="Auxiliar de Portaria">Auxiliar de Portaria</option>
									<option value="Auxiliar de Processamento">Auxiliar de Processamento</option>
									<option value="Auxiliar de Produção">Auxiliar de Produção</option>
									<option value="Auxiliar de Professor">Auxiliar de Professor</option>
									<option value="Auxiliar de R H - Recursos Humanos">Auxiliar de R H - Recursos Humanos</option>
									<option value="Auxiliar de Reservas">Auxiliar de Reservas</option>
									<option value="Auxiliar de Seção">Auxiliar de Seção</option>
									<option value="Auxiliar de Secretaria">Auxiliar de Secretaria</option>
									<option value="Auxiliar de Serrador">Auxiliar de Serrador</option>
									<option value="Auxiliar de Serviços Gerais">Auxiliar de Serviços Gerais</option>
									<option value="Auxiliar de Serviços Gráficos">Auxiliar de Serviços Gráficos</option>
									<option value="Auxiliar de Serviços Notariais">Auxiliar de Serviços Notariais</option>
									<option value="Auxiliar de Supervisão Técnica">Auxiliar de Supervisão Técnica</option>
									<option value="Auxiliar de Sushiman">Auxiliar de Sushiman</option>
									<option value="Auxiliar de Tesouraria">Auxiliar de Tesouraria</option>
									<option value="Auxiliar de Treinamento">Auxiliar de Treinamento</option>
									<option value="Auxiliar de Vendas">Auxiliar de Vendas</option>
									<option value="Auxiliar de Xaroparia">Auxiliar de Xaroparia</option>
									<option value="Auxiliar Financeiro">Auxiliar Financeiro</option>
									<option value="Auxiliar Técnico">Auxiliar Técnico</option>
									<option value="Balconista">Balconista</option>
									<option value="Bancário(a)">Bancário(a)</option>
									<option value="Barman">Barman</option>
									<option value="Bibliotecário(a)">Bibliotecário(a)</option>
									<option value="Biólogo(a)">Biólogo(a)</option>
									<option value="Biomédico(a)">Biomédico(a)</option>
									<option value="Bioquímico(a)">Bioquímico(a)</option>
									<option value="Bolsista">Bolsista</option>
									<option value="Bombeiro">Bombeiro</option>
									<option value="Boqueteiro(a)">Boqueteiro(a)</option>
									<option value="Cabeleleiro(a)">Cabeleleiro(a)</option>
									<option value="Cabo">Cabo</option>
									<option value="Cadastrador(a)">Cadastrador(a)</option>
									<option value="Cadista">Cadista</option>
									<option value="Caixa">Caixa</option>
									<option value="Caldereiro">Caldereiro</option>
									<option value="Camareiro(a)">Camareiro(a)</option>
									<option value="Capatazia">Capatazia</option>
									<option value="Captador(a) de Anúncios">Captador(a) de Anúncios</option>
									<option value="Chefe Administrativo">Chefe Administrativo</option>
									<option value="Chefe de Atendimento">Chefe de Atendimento</option>
									<option value="Chefe de Buffet">Chefe de Buffet</option>
									<option value="Chefe de Cobrança">Chefe de Cobrança</option>
									<option value="Chefe de Compras">Chefe de Compras</option>
									<option value="Chefe de Contabilidade">Chefe de Contabilidade</option>
									<option value="Chefe de Contas a Pagar e Receber">Chefe de Contas a Pagar e Receber</option>
									<option value="Chefe de Custos">Chefe de Custos</option>
									<option value="Chefe de Depto. de Pessoal">Chefe de Depto. de Pessoal</option>
									<option value="Chefe de Depto. de Turismo">Chefe de Depto. de Turismo</option>
									<option value="Chefe de Divisão">Chefe de Divisão</option>
									<option value="Chefe de Engenharia">Chefe de Engenharia</option>
									<option value="Chefe de Equipe">Chefe de Equipe</option>
									<option value="Chefe de Escritório">Chefe de Escritório</option>
									<option value="Chefe de Gabinete">Chefe de Gabinete</option>
									<option value="Chefe de Informática">Chefe de Informática</option>
									<option value="Chefe de Logística e Suprimentos">Chefe de Logística e Suprimentos</option>
									<option value="Chefe de Manutenção">Chefe de Manutenção</option>
									<option value="Chefe de Produção">Chefe de Produção</option>
									<option value="Chefe de R H - Recursos Humanos">Chefe de R H - Recursos Humanos</option>
									<option value="Chefe de Recepção">Chefe de Recepção</option>
									<option value="Chefe de Rouparia">Chefe de Rouparia</option>
									<option value="Chefe de Serviços">Chefe de Serviços</option>
									<option value="Chefe de Setor">Chefe de Setor</option>
									<option value="Chefe de Vendas">Chefe de Vendas</option>
									<option value="Churrasqueiro(a)">Churrasqueiro(a)</option>
									<option value="Cientista Político">Cientista Político</option>
									<option value="Cientista Social">Cientista Social</option>
									<option value="Cinegrafista">Cinegrafista</option>
									<option value="Cirurgião(ã) Dentista">Cirurgião(ã) Dentista</option>
									<option value="Cobrador(a)">Cobrador(a)</option>
									<option value="Comissário(a) de Vôo">Comissário(a) de Vôo</option>
									<option value="Comprador(a)">Comprador(a)</option>
									<option value="Comunicador(a) Social">Comunicador(a) Social</option>
									<option value="Conciliador(a) Contábil">Conciliador(a) Contábil</option>
									<option value="Confeccionista">Confeccionista</option>
									<option value="Confeiteiro(a)">Confeiteiro(a)</option>
									<option value="Conferente">Conferente</option>
									<option value="Construtor(a) Imobiliário">Construtor(a) Imobiliário</option>
									<option value="Consultor(a)">Consultor(a)</option>
									<option value="Consultor(a) Administrativo">Consultor(a) Administrativo</option>
									<option value="Consultor(a) Comercial">Consultor(a) Comercial</option>
									<option value="Consultor(a) Contábil">Consultor(a) Contábil</option>
									<option value="Consultor(a) de Implantação">Consultor(a) de Implantação</option>
									<option value="Consultor(a) de Negócio">Consultor(a) de Negócio</option>
									<option value="Consultor(a) de O &amp; M">Consultor(a) de O &amp; M</option>
									<option value="Consultor(a) de R H - Recursos Humanos">Consultor(a) de R H - Recursos Humanos</option>
									<option value="Consultor(a) de Tecnologia da Informação">Consultor(a) de Tecnologia da Informação</option>
									<option value="Consultor(a) de Telecomunicações">Consultor(a) de Telecomunicações</option>
									<option value="Consultor(a) de Vendas">Consultor(a) de Vendas</option>
									<option value="Consultor(a) Financeiro">Consultor(a) Financeiro</option>
									<option value="Consultor(a) Jurídico">Consultor(a) Jurídico</option>
									<option value="Consultor(a) Organizacional">Consultor(a) Organizacional</option>
									<option value="Consultor(a) Técnico">Consultor(a) Técnico</option>
									<option value="Consultor(a) Tributário">Consultor(a) Tributário</option>
									<option value="Contador(a)">Contador(a)</option>
									<option value="Contínuo (Office-Boy)">Contínuo (Office-Boy)</option>
									<option value="Controlador(a) de Cargas">Controlador(a) de Cargas</option>
									<option value="Controlador(a) de Estações e Pessoal">Controlador(a) de Estações e Pessoal</option>
									<option value="Controlador(a) de Rotas">Controlador(a) de Rotas</option>
									<option value="Controlador(a) de Tráfego">Controlador(a) de Tráfego</option>
									<option value="Controller">Controller</option>
									<option value="Coordenador(a)">Coordenador(a)</option>
									<option value="Coordenador(a) Adm. Financeiro">Coordenador(a) Adm. Financeiro</option>
									<option value="Coordenador(a) Administrativo">Coordenador(a) Administrativo</option>
									<option value="Coordenador(a) Comercial">Coordenador(a) Comercial</option>
									<option value="Coordenador(a) da Qualidade">Coordenador(a) da Qualidade</option>
									<option value="Coordenador(a) de Atendimento">Coordenador(a) de Atendimento</option>
									<option value="Coordenador(a) de Centro de Estágios">Coordenador(a) de Centro de Estágios</option>
									<option value="Coordenador(a) de Comércio Exterior">Coordenador(a) de Comércio Exterior</option>
									<option value="Coordenador(a) de Contas Especiais">Coordenador(a) de Contas Especiais</option>
									<option value="Coordenador(a) de Crédito Pessoal">Coordenador(a) de Crédito Pessoal</option>
									<option value="Coordenador(a) de Curso de Pós Graduação">Coordenador(a) de Curso de Pós Graduação</option>
									<option value="Coordenador(a) de Cursos e Serviços">Coordenador(a) de Cursos e Serviços</option>
									<option value="Coordenador(a) de Decoração">Coordenador(a) de Decoração</option>
									<option value="Coordenador(a) de Equipe">Coordenador(a) de Equipe</option>
									<option value="Coordenador(a) de Eventos">Coordenador(a) de Eventos</option>
									<option value="Coordenador(a) de Filial">Coordenador(a) de Filial</option>
									<option value="Coordenador(a) de Imprensa e Divulgação">Coordenador(a) de Imprensa e Divulgação</option>
									<option value="Coordenador(a) de Informática">Coordenador(a) de Informática</option>
									<option value="Coordenador(a) de Logística">Coordenador(a) de Logística</option>
									<option value="Coordenador(a) de Marketing">Coordenador(a) de Marketing</option>
									<option value="Coordenador(a) de Merchandising">Coordenador(a) de Merchandising</option>
									<option value="Coordenador(a) de Obras">Coordenador(a) de Obras</option>
									<option value="Coordenador(a) de Pessoal">Coordenador(a) de Pessoal</option>
									<option value="Coordenador(a) de Projetos">Coordenador(a) de Projetos</option>
									<option value="Coordenador(a) de R H  - Recursos Humanos">Coordenador(a) de R H  - Recursos Humanos</option>
									<option value="Coordenador(a) de Reservas">Coordenador(a) de Reservas</option>
									<option value="Coordenador(a) de Segurança">Coordenador(a) de Segurança</option>
									<option value="Coordenador(a) de Suporte">Coordenador(a) de Suporte</option>
									<option value="Coordenador(a) de Telemarketing">Coordenador(a) de Telemarketing</option>
									<option value="Coordenador(a) de Vendas">Coordenador(a) de Vendas</option>
									<option value="Coordenador(a) Financeiro">Coordenador(a) Financeiro</option>
									<option value="Coordenador(a) Jurídico">Coordenador(a) Jurídico</option>
									<option value="Coordenador(a) Operacional">Coordenador(a) Operacional</option>
									<option value="Coordenador(a) Pedagógico">Coordenador(a) Pedagógico</option>
									<option value="Coordenador(a) Regional">Coordenador(a) Regional</option>
									<option value="Copeiro(a)">Copeiro(a)</option>
									<option value="Copiador(a)">Copiador(a)</option>
									<option value="Corretor(a) de Imóveis">Corretor(a) de Imóveis</option>
									<option value="Corretor(a) de Previdência Privada">Corretor(a) de Previdência Privada</option>
									<option value="Corretor(a) de Seguros">Corretor(a) de Seguros</option>
									<option value="Corretor(a) de Veículos">Corretor(a) de Veículos</option>
									<option value="Cortador(a) de Carne (Açogueiro)">Cortador(a) de Carne (Açogueiro)</option>
									<option value="Costureiro(a)">Costureiro(a)</option>
									<option value="Cozinheiro(a)">Cozinheiro(a)</option>
									<option value="Criação Publicitária">Criação Publicitária</option>
									<option value="Cronoanalista">Cronoanalista</option>
									<option value="Cummin">Cummin</option>
									<option value="Datilógrafo(a)">Datilógrafo(a)</option>
									<option value="Defensor(a) Público">Defensor(a) Público</option>
									<option value="Demonstrador(a)">Demonstrador(a)</option>
									<option value="Demonstrador(a) de Veículos">Demonstrador(a) de Veículos</option>
									<option value="Desempregado">Desempregado</option>
									<option value="Desenhista">Desenhista</option>
									<option value="Desenhista Autocad">Desenhista Autocad</option>
									<option value="Desenhista Industrial">Desenhista Industrial</option>
									<option value="Designer Gráfico">Designer Gráfico</option>
									<option value="Diagramador(a) e Editoração Eletrônica">Diagramador(a) e Editoração Eletrônica</option>
									<option value="Digitador(a)">Digitador(a)</option>
									<option value="Diretor(a)">Diretor(a)</option>
									<option value="Diretor(a) Adm. Financeiro">Diretor(a) Adm. Financeiro</option>
									<option value="Diretor(a) Administrativo">Diretor(a) Administrativo</option>
									<option value="Diretor(a) Comercial">Diretor(a) Comercial</option>
									<option value="Diretor(a) de Arte">Diretor(a) de Arte</option>
									<option value="Diretor(a) de Divisão">Diretor(a) de Divisão</option>
									<option value="Diretor(a) de Escola">Diretor(a) de Escola</option>
									<option value="Diretor(a) de Logística">Diretor(a) de Logística</option>
									<option value="Diretor(a) de Marketing e Propaganda">Diretor(a) de Marketing e Propaganda</option>
									<option value="Diretor(a) de Planejamento">Diretor(a) de Planejamento</option>
									<option value="Diretor(a) de Provas">Diretor(a) de Provas</option>
									<option value="Diretor(a) de R H - Recursos Humanos">Diretor(a) de R H - Recursos Humanos</option>
									<option value="Diretor(a) de T I - Tecnologia da Informação">Diretor(a) de T I - Tecnologia da Informação</option>
									<option value="Diretor(a) de Vendas">Diretor(a) de Vendas</option>
									<option value="Diretor(a) Executivo">Diretor(a) Executivo</option>
									<option value="Diretor(a) Financeiro">Diretor(a) Financeiro</option>
									<option value="Diretor(a) Industrial">Diretor(a) Industrial</option>
									<option value="Diretor(a) Presidente">Diretor(a) Presidente</option>
									<option value="Diretor(a) Técnico">Diretor(a) Técnico</option>
									<option value="Diretor(a) Vice-Presidente">Diretor(a) Vice-Presidente</option>
									<option value="Doméstico(a)">Doméstico(a)</option>
									<option value="Economista">Economista</option>
									<option value="Editor(a) Gráfico">Editor(a) Gráfico</option>
									<option value="Editor(a) não Linear">Editor(a) não Linear</option>
									<option value="Educador(a) Social">Educador(a) Social</option>
									<option value="Eletricista">Eletricista</option>
									<option value="Eletricista Automotivo">Eletricista Automotivo</option>
									<option value="Eletrotécnico(a)">Eletrotécnico(a)</option>
									<option value="Emissor(a) de Passagens Áereas">Emissor(a) de Passagens Áereas</option>
									<option value="Empacotador(a)">Empacotador(a)</option>
									<option value="Empresário(a)">Empresário(a)</option>
									<option value="Encarregado(a)">Encarregado(a)</option>
									<option value="Encarregado(a) Adm. Financeiro">Encarregado(a) Adm. Financeiro</option>
									<option value="Encarregado(a) Administrativo">Encarregado(a) Administrativo</option>
									<option value="Encarregado(a) de Arquivo">Encarregado(a) de Arquivo</option>
									<option value="Encarregado(a) de Atendimento">Encarregado(a) de Atendimento</option>
									<option value="Encarregado(a) de Cobrança">Encarregado(a) de Cobrança</option>
									<option value="Encarregado(a) de Compras">Encarregado(a) de Compras</option>
									<option value="Encarregado(a) de Contabilidade">Encarregado(a) de Contabilidade</option>
									<option value="Encarregado(a) de Contas a Pagar e Receber">Encarregado(a) de Contas a Pagar e Receber</option>
									<option value="Encarregado(a) de Controles">Encarregado(a) de Controles</option>
									<option value="Encarregado(a) de Cpd">Encarregado(a) de Cpd</option>
									<option value="Encarregado(a) de Custos">Encarregado(a) de Custos</option>
									<option value="Encarregado(a) de Depósito">Encarregado(a) de Depósito</option>
									<option value="Encarregado(a) de Distrito">Encarregado(a) de Distrito</option>
									<option value="Encarregado(a) de Escritório">Encarregado(a) de Escritório</option>
									<option value="Encarregado(a) de Expedição e Tráfego">Encarregado(a) de Expedição e Tráfego</option>
									<option value="Encarregado(a) de Faturamento">Encarregado(a) de Faturamento</option>
									<option value="Encarregado(a) de Logística">Encarregado(a) de Logística</option>
									<option value="Encarregado(a) de Marketing">Encarregado(a) de Marketing</option>
									<option value="Encarregado(a) de Patrimônio">Encarregado(a) de Patrimônio</option>
									<option value="Encarregado(a) de PCP">Encarregado(a) de PCP</option>
									<option value="Encarregado(a) de Produção">Encarregado(a) de Produção</option>
									<option value="Encarregado(a) de Recepção de Pescado">Encarregado(a) de Recepção de Pescado</option>
									<option value="Encarregado(a) de Risco e Crédito">Encarregado(a) de Risco e Crédito</option>
									<option value="Encarregado(a) de Seção">Encarregado(a) de Seção</option>
									<option value="Encarregado(a) de Serviços Administrativos">Encarregado(a) de Serviços Administrativos</option>
									<option value="Encarregado(a) de Setor de Pessoal">Encarregado(a) de Setor de Pessoal</option>
									<option value="Encarregado(a) de Setor Fiscal">Encarregado(a) de Setor Fiscal</option>
									<option value="Encarregado(a) de Turma">Encarregado(a) de Turma</option>
									<option value="Encarregado(a) Financeiro">Encarregado(a) Financeiro</option>
									<option value="Enfermeiro(a)">Enfermeiro(a)</option>
									<option value="Engenheiro(a) Agrônomo">Engenheiro(a) Agrônomo</option>
									<option value="Engenheiro(a) Civil">Engenheiro(a) Civil</option>
									<option value="Engenheiro(a) da Qualidade">Engenheiro(a) da Qualidade</option>
									<option value="Engenheiro(a) de Alimentos">Engenheiro(a) de Alimentos</option>
									<option value="Engenheiro(a) de Aplicação">Engenheiro(a) de Aplicação</option>
									<option value="Engenheiro(a) de Áudio">Engenheiro(a) de Áudio</option>
									<option value="Engenheiro(a) de Automação">Engenheiro(a) de Automação</option>
									<option value="Engenheiro(a) de Eletricidade">Engenheiro(a) de Eletricidade</option>
									<option value="Engenheiro(a) de Eletrônica">Engenheiro(a) de Eletrônica</option>
									<option value="Engenheiro(a) de Pesca">Engenheiro(a) de Pesca</option>
									<option value="Engenheiro(a) de Petróleo">Engenheiro(a) de Petróleo</option>
									<option value="Engenheiro(a) de Produção">Engenheiro(a) de Produção</option>
									<option value="Engenheiro(a) de Produto">Engenheiro(a) de Produto</option>
									<option value="Engenheiro(a) de Segurança do Trabalho">Engenheiro(a) de Segurança do Trabalho</option>
									<option value="Engenheiro(a) de Sistemas">Engenheiro(a) de Sistemas</option>
									<option value="Engenheiro(a) de Telecomunicações">Engenheiro(a) de Telecomunicações</option>
									<option value="Engenheiro(a) Mecânico">Engenheiro(a) Mecânico</option>
									<option value="Engenheiro(a) Químico">Engenheiro(a) Químico</option>
									<option value="Entregador(a)">Entregador(a)</option>
									<option value="Escrevente">Escrevente</option>
									<option value="Escriturário(a)">Escriturário(a)</option>
									<option value="Estagiário(a)">Estagiário(a)</option>
									<option value="Estagiário(a) em Administração">Estagiário(a) em Administração</option>
									<option value="Estagiário(a) em Bibliotecomomia">Estagiário(a) em Bibliotecomomia</option>
									<option value="Estagiário(a) em Ciências Sociais">Estagiário(a) em Ciências Sociais</option>
									<option value="Estágiário(a) em Comunicação Social">Estágiário(a) em Comunicação Social</option>
									<option value="Estagiário(a) em Contabilidade">Estagiário(a) em Contabilidade</option>
									<option value="Estagiário(a) em Direito">Estagiário(a) em Direito</option>
									<option value="Estagiário(a) em Economia">Estagiário(a) em Economia</option>
									<option value="Estagiário(a) em Economia Doméstica">Estagiário(a) em Economia Doméstica</option>
									<option value="Estagiário(a) em Edificações">Estagiário(a) em Edificações</option>
									<option value="Estagiário(a) em Educação Física">Estagiário(a) em Educação Física</option>
									<option value="Estagiário(a) em Engenharia Civil">Estagiário(a) em Engenharia Civil</option>
									<option value="Estagiário(a) em Engenharia de Alimentos">Estagiário(a) em Engenharia de Alimentos</option>
									<option value="Estagiário(a) em Engenharia de Produção">Estagiário(a) em Engenharia de Produção</option>
									<option value="Estagiário(a) em Engenharia Elétrica">Estagiário(a) em Engenharia Elétrica</option>
									<option value="Estagiário(a) em Engenharia Mecânica">Estagiário(a) em Engenharia Mecânica</option>
									<option value="Estagiário(a) em Engenharia Química">Estagiário(a) em Engenharia Química</option>
									<option value="Estagiário(a) em Estilismo e Moda">Estagiário(a) em Estilismo e Moda</option>
									<option value="Estagiário(a) em Estoque">Estagiário(a) em Estoque</option>
									<option value="Estagiário(a) em Fisioterapia">Estagiário(a) em Fisioterapia</option>
									<option value="Estagiário(a) em Geografia">Estagiário(a) em Geografia</option>
									<option value="Estagiário(a) em Informática">Estagiário(a) em Informática</option>
									<option value="Estagiário(a) em Laboratório">Estagiário(a) em Laboratório</option>
									<option value="Estágiário(a) em Marketing">Estágiário(a) em Marketing</option>
									<option value="Estagiário(a) em Mecânica Industrial">Estagiário(a) em Mecânica Industrial</option>
									<option value="Estagiário(a) em Nutrição">Estagiário(a) em Nutrição</option>
									<option value="Estagiário(a) em Pedagogia">Estagiário(a) em Pedagogia</option>
									<option value="Estagiário(a) em Psicologia">Estagiário(a) em Psicologia</option>
									<option value="Estagiário(a) em R H - Recursos Humanos">Estagiário(a) em R H - Recursos Humanos</option>
									<option value="Estagiário(a) em Segurança do Trabalho">Estagiário(a) em Segurança do Trabalho</option>
									<option value="Estagiário(a) em Serviço Social">Estagiário(a) em Serviço Social</option>
									<option value="Estagiário(a) em Turismo">Estagiário(a) em Turismo</option>
									<option value="Estagiário(a) Técnico Metalúrgico">Estagiário(a) Técnico Metalúrgico</option>
									<option value="Estatístico(a)">Estatístico(a)</option>
									<option value="Estilista">Estilista</option>
									<option value="Estoquista">Estoquista</option>
									<option value="Estudante Ensino Fundamental">Estudante Ensino Fundamental</option>
									<option value="Estudante Ensino Médio">Estudante Ensino Médio</option>
									<option value="Estudante Ensino Superior">Estudante Ensino Superior</option>
									<option value="Executivo(a) de Negócios">Executivo(a) de Negócios</option>
									<option value="Extensionista de Nutrição">Extensionista de Nutrição</option>
									<option value="Facilitador(a) de Grupos">Facilitador(a) de Grupos</option>
									<option value="Farmacêutico(a)">Farmacêutico(a)</option>
									<option value="Faturista">Faturista</option>
									<option value="Fiscal Administrativo">Fiscal Administrativo</option>
									<option value="Fiscal de Caixa">Fiscal de Caixa</option>
									<option value="Fiscal de Eventos">Fiscal de Eventos</option>
									<option value="Fiscal de Loja">Fiscal de Loja</option>
									<option value="Fiscal de Serviços Públicos">Fiscal de Serviços Públicos</option>
									<option value="Fiscal de Terminal">Fiscal de Terminal</option>
									<option value="Fiscal de Tráfego">Fiscal de Tráfego</option>
									<option value="Fiscal de Trânsito">Fiscal de Trânsito</option>
									<option value="Fiscal de Tributos">Fiscal de Tributos</option>
									<option value="Fiscal de Vendas">Fiscal de Vendas</option>
									<option value="Fisioterapêuta">Fisioterapêuta</option>
									<option value="Fonoaudiólogo(a)">Fonoaudiólogo(a)</option>
									<option value="Forneiro(a)">Forneiro(a)</option>
									<option value="Fotógrafo(a)">Fotógrafo(a)</option>
									<option value="Frentista">Frentista</option>
									<option value="Garantista">Garantista</option>
									<option value="Garçom">Garçom</option>
									<option value="Geólogo(a)">Geólogo(a)</option>
									<option value="Geógrafo(a)">Geógrafo(a)</option>
									<option value="Gerente Adm. Financeiro">Gerente Adm. Financeiro</option>
									<option value="Gerente Administrativo">Gerente Administrativo</option>
									<option value="Gerente Auxiliar">Gerente Auxiliar</option>
									<option value="Gerente Comercial">Gerente Comercial</option>
									<option value="Gerente Contábil">Gerente Contábil</option>
									<option value="Gerente de A &amp; B - Alimentos e Bebidas">Gerente de A &amp; B - Alimentos e Bebidas</option>
									<option value="Gerente de Aquisição">Gerente de Aquisição</option>
									<option value="Gerente de Atendimento">Gerente de Atendimento</option>
									<option value="Gerente de Auditoria">Gerente de Auditoria</option>
									<option value="Gerente de Buffet">Gerente de Buffet</option>
									<option value="Gerente de Caixa">Gerente de Caixa</option>
									<option value="Gerente de Call Center">Gerente de Call Center</option>
									<option value="Gerente de Câmbio">Gerente de Câmbio</option>
									<option value="Gerente de Clínica de Estética">Gerente de Clínica de Estética</option>
									<option value="Gerente de Cobranças">Gerente de Cobranças</option>
									<option value="Gerente de Compras">Gerente de Compras</option>
									<option value="Gerente de Comunicação">Gerente de Comunicação</option>
									<option value="Gerente de Concessionária">Gerente de Concessionária</option>
									<option value="Gerente de Consultoria">Gerente de Consultoria</option>
									<option value="Gerente de Contas">Gerente de Contas</option>
									<option value="Gerente de Controladoria">Gerente de Controladoria</option>
									<option value="Gerente de Cpd">Gerente de Cpd</option>
									<option value="Gerente de Crédito">Gerente de Crédito</option>
									<option value="Gerente de Depto. Pessoal">Gerente de Depto. Pessoal</option>
									<option value="Gerente de Desenvolvimento">Gerente de Desenvolvimento</option>
									<option value="Gerente de Distribuição e Logística">Gerente de Distribuição e Logística</option>
									<option value="Gerente de Estatística">Gerente de Estatística</option>
									<option value="Gerente de Estoque">Gerente de Estoque</option>
									<option value="Gerente de Expediente">Gerente de Expediente</option>
									<option value="Gerente de Factoring">Gerente de Factoring</option>
									<option value="Gerente de Filial">Gerente de Filial</option>
									<option value="Gerente de Hotel">Gerente de Hotel</option>
									<option value="Gerente de Loja">Gerente de Loja</option>
									<option value="Gerente de Manutenção">Gerente de Manutenção</option>
									<option value="Gerente de Marketing">Gerente de Marketing</option>
									<option value="Gerente de Negócios">Gerente de Negócios</option>
									<option value="Gerente de Núcleo">Gerente de Núcleo</option>
									<option value="Gerente de Obras">Gerente de Obras</option>
									<option value="Gerente de Operações">Gerente de Operações</option>
									<option value="Gerente de Pcp">Gerente de Pcp</option>
									<option value="Gerente de Pista">Gerente de Pista</option>
									<option value="Gerente de Planejamento">Gerente de Planejamento</option>
									<option value="Gerente de Posto">Gerente de Posto</option>
									<option value="Gerente de Produção">Gerente de Produção</option>
									<option value="Gerente de Produto">Gerente de Produto</option>
									<option value="Gerente de Projetos">Gerente de Projetos</option>
									<option value="Gerente de Qualidade">Gerente de Qualidade</option>
									<option value="Gerente de R H - Recursos Humanos">Gerente de R H - Recursos Humanos</option>
									<option value="Gerente de Recepção e Reservas">Gerente de Recepção e Reservas</option>
									<option value="Gerente de Restaurante">Gerente de Restaurante</option>
									<option value="Gerente de Seção">Gerente de Seção</option>
									<option value="Gerente de Serviços">Gerente de Serviços</option>
									<option value="Gerente de Suprimentos">Gerente de Suprimentos</option>
									<option value="Gerente de Telecomunicações">Gerente de Telecomunicações</option>
									<option value="Gerente de TI - Tecnologia da Informação">Gerente de TI - Tecnologia da Informação</option>
									<option value="Gerente de Treinamento">Gerente de Treinamento</option>
									<option value="Gerente de Vendas">Gerente de Vendas</option>
									<option value="Gerente Executivo">Gerente Executivo</option>
									<option value="Gerente Financeiro">Gerente Financeiro</option>
									<option value="Gerente Geral">Gerente Geral</option>
									<option value="Gerente Industrial">Gerente Industrial</option>
									<option value="Gerente Jurídico">Gerente Jurídico</option>
									<option value="Gerente Operacional">Gerente Operacional</option>
									<option value="Gerente Regional">Gerente Regional</option>
									<option value="Gerente Técnico">Gerente Técnico</option>
									<option value="Gerente Trainee">Gerente Trainee</option>
									<option value="Gestor Ambiental">Gestor Ambiental</option>
									<option value="Governanta">Governanta</option>
									<option value="Guia Turístico">Guia Turístico</option>
									<option value="Habilitador de Telefone Celular">Habilitador de Telefone Celular</option>
									<option value="Impressor de Off Set">Impressor de Off Set</option>
									<option value="Impressor de Serigrafia">Impressor de Serigrafia</option>
									<option value="Informante de Spc">Informante de Spc</option>
									<option value="Informante de Turismo">Informante de Turismo</option>
									<option value="Inspetor(a) de Aeronaves">Inspetor(a) de Aeronaves</option>
									<option value="Inspetor(a) de Controle de Qualidade">Inspetor(a) de Controle de Qualidade</option>
									<option value="Inspetor(a) de Embalagem">Inspetor(a) de Embalagem</option>
									<option value="Inspetor(a) de Produtos de Origem Animal">Inspetor(a) de Produtos de Origem Animal</option>
									<option value="Inspetor(a) de Segurança">Inspetor(a) de Segurança</option>
									<option value="Inspetor(a) de Seguros">Inspetor(a) de Seguros</option>
									<option value="Instalador de Cerca Eletrificada">Instalador de Cerca Eletrificada</option>
									<option value="Instalador(a)  Rep. de Linhas e Aparelhos (Irla)">Instalador(a)  Rep. de Linhas e Aparelhos (Irla)</option>
									<option value="Instrutor(a)">Instrutor(a)</option>
									<option value="Instrutor(a) de Informática">Instrutor(a) de Informática</option>
									<option value="Intérprete">Intérprete</option>
									<option value="Jornalista">Jornalista</option>
									<option value="Juiz(a) de Direito">Juiz(a) de Direito</option>
									<option value="Laboratorista">Laboratorista</option>
									<option value="Laboratorista Fotográfica">Laboratorista Fotográfica</option>
									<option value="Leiloeiro(a)">Leiloeiro(a)</option>
									<option value="Lider de Segurança">Lider de Segurança</option>
									<option value="Locutor(a) de Rádio">Locutor(a) de Rádio</option>
									<option value="Logistica">Logistica</option>
									<option value="Maitre">Maitre</option>
									<option value="Manobrista">Manobrista</option>
									<option value="Marceneiro">Marceneiro</option>
									<option value="Massagista">Massagista</option>
									<option value="Masseiro(a)">Masseiro(a)</option>
									<option value="Mecânico(a)">Mecânico(a)</option>
									<option value="Mecânico(a) Industrial">Mecânico(a) Industrial</option>
									<option value="Mecânico(a) Regulador de Injeção Eletrônica">Mecânico(a) Regulador de Injeção Eletrônica</option>
									<option value="Mecanógrafo(a)">Mecanógrafo(a)</option>
									<option value="Médico(a)">Médico(a)</option>
									<option value="Médico(a) do Trabalho">Médico(a) do Trabalho</option>
									<option value="Meio Oficial de Almoxarife">Meio Oficial de Almoxarife</option>
									<option value="Mestre de Padaria e Confeitaria">Mestre de Padaria e Confeitaria</option>
									<option value="Microbiologista">Microbiologista</option>
									<option value="Militar">Militar</option>
									<option value="Missionário(a)">Missionário(a)</option>
									<option value="Modelista">Modelista</option>
									<option value="Monitor(a)">Monitor(a)</option>
									<option value="Monitor(a) de Informatica">Monitor(a) de Informatica</option>
									<option value="Monitor(a) de Produção">Monitor(a) de Produção</option>
									<option value="Monitor(a) de Telemarketing">Monitor(a) de Telemarketing</option>
									<option value="Motociclista">Motociclista</option>
									<option value="Motorista">Motorista</option>
									<option value="Motorista Carreteiro">Motorista Carreteiro</option>
									<option value="Nutricionista">Nutricionista</option>
									<option value="Odontólogo(a)">Odontólogo(a)</option>
									<option value="Oficial da Reserva">Oficial da Reserva</option>
									<option value="Operador(a) Comercial">Operador(a) Comercial</option>
									<option value="Operador(a) de Áudio">Operador(a) de Áudio</option>
									<option value="Operador(a) de Caixa">Operador(a) de Caixa</option>
									<option value="Operador(a) de Central de Crédito">Operador(a) de Central de Crédito</option>
									<option value="Operador(a) de Computador">Operador(a) de Computador</option>
									<option value="Operador(a) de Eletro Erosão">Operador(a) de Eletro Erosão</option>
									<option value="Operador(a) de Empilhadeira">Operador(a) de Empilhadeira</option>
									<option value="Operador(a) de Encaixe e Risco em Cad">Operador(a) de Encaixe e Risco em Cad</option>
									<option value="Operador(a) de Máquina">Operador(a) de Máquina</option>
									<option value="Operador(a) de Overend">Operador(a) de Overend</option>
									<option value="Operador(a) de Produção">Operador(a) de Produção</option>
									<option value="Operador(a) de Telecobrança">Operador(a) de Telecobrança</option>
									<option value="Operador(a) de Telecomunicações">Operador(a) de Telecomunicações</option>
									<option value="Operador(a) de Telemarketing (TMK)">Operador(a) de Telemarketing (TMK)</option>
									<option value="Operador(a) de Televendas">Operador(a) de Televendas</option>
									<option value="Orientador(a) Acadêmico">Orientador(a) Acadêmico</option>
									<option value="Orientador(a) de Pesquisas Educacionais">Orientador(a) de Pesquisas Educacionais</option>
									<option value="Orientador(a) Pedagógico">Orientador(a) Pedagógico</option>
									<option value="Orientador(a) Profissional">Orientador(a) Profissional</option>
									<option value="Ouvidor(a)">Ouvidor(a)</option>
									<option value="Padeiro">Padeiro</option>
									<option value="Paginador(a)">Paginador(a)</option>
									<option value="Paisagista">Paisagista</option>
									<option value="Palestrante">Palestrante</option>
									<option value="Pastor">Pastor</option>
									<option value="Pedagogo(a)">Pedagogo(a)</option>
									<option value="Pedreiro">Pedreiro</option>
									<option value="Perito(a)">Perito(a)</option>
									<option value="Perito(a) em Vistoria Veicular">Perito(a) em Vistoria Veicular</option>
									<option value="Personal Trainer">Personal Trainer</option>
									<option value="Pesquisador(a)">Pesquisador(a)</option>
									<option value="Piloto de Teste">Piloto de Teste</option>
									<option value="Pizzaiolo(a)">Pizzaiolo(a)</option>
									<option value="Piscineiro(a)">Piscineiro(a)</option>
									<option value="Porteiro(a)">Porteiro(a)</option>
									<option value="Preparador(a) de Documentos">Preparador(a) de Documentos</option>
									<option value="Preposto(a)">Preposto(a)</option>
									<option value="Prestador(a) de Serviço">Prestador(a) de Serviço</option>
									<option value="Procurador(a) de Justiça">Procurador(a) de Justiça</option>
									<option value="Professor(a)">Professor(a)</option>
									<option value="Professor(a) de Biologia">Professor(a) de Biologia</option>
									<option value="Professor(a) de Contabilidade">Professor(a) de Contabilidade</option>
									<option value="Professor(a) de Educação Física">Professor(a) de Educação Física</option>
									<option value="Professor(a) de Educação Infantil">Professor(a) de Educação Infantil</option>
									<option value="Professor(a) de Espanhol">Professor(a) de Espanhol</option>
									<option value="Professor(a) de Física">Professor(a) de Física</option>
									<option value="Professor(a) de Gaita">Professor(a) de Gaita</option>
									<option value="Professor(a) de Geografia">Professor(a) de Geografia</option>
									<option value="Professor(a) de Hipnose Clínica">Professor(a) de Hipnose Clínica</option>
									<option value="Professor(a) de História">Professor(a) de História</option>
									<option value="Professor(a) de Informática">Professor(a) de Informática</option>
									<option value="Professor(a) de Inglês">Professor(a) de Inglês</option>
									<option value="Professor(a) de Língua Portuguesa">Professor(a) de Língua Portuguesa</option>
									<option value="Professor(a) de Literatura">Professor(a) de Literatura</option>
									<option value="Professor(a) de Matemática">Professor(a) de Matemática</option>
									<option value="Professor(a) de Psicologia Organizacional">Professor(a) de Psicologia Organizacional</option>
									<option value="Professor(a) de Química">Professor(a) de Química</option>
									<option value="Professor(a) de Redação">Professor(a) de Redação</option>
									<option value="Professor(a) de Sociologia">Professor(a) de Sociologia</option>
									<option value="Professor(a) Particular">Professor(a) Particular</option>
									<option value="Professor(a) Universitário">Professor(a) Universitário</option>
									<option value="Programador(a)">Programador(a)</option>
									<option value="Programador(a) de Pcp">Programador(a) de Pcp</option>
									<option value="Programador(a) Visual">Programador(a) Visual</option>
									<option value="Promotor(a)">Promotor(a)</option>
									<option value="Projetista">Projetista</option>
									<option value="Promotor(a) de Eventos">Promotor(a) de Eventos</option>
									<option value="Promotor(a) de Justiça">Promotor(a) de Justiça</option>
									<option value="Promotor(a) de Marketing">Promotor(a) de Marketing</option>
									<option value="Promotor(a) de Merchandising">Promotor(a) de Merchandising</option>
									<option value="Promotor(a) de Vendas">Promotor(a) de Vendas</option>
									<option value="Propagandista">Propagandista</option>
									<option value="Prospector(a) Comercial">Prospector(a) Comercial</option>
									<option value="Psicólogo(a)">Psicólogo(a)</option>
									<option value="Psicopedagogo(a)">Psicopedagogo(a)</option>
									<option value="Químico">Químico</option>
									<option value="Recadastrador(a)">Recadastrador(a)</option>
									<option value="Recenseador(a)">Recenseador(a)</option>
									<option value="Recepcionista">Recepcionista</option>
									<option value="Recepcionista de Anúncios">Recepcionista de Anúncios</option>
									<option value="Recepcionista de Cia. Aérea">Recepcionista de Cia. Aérea</option>
									<option value="Recepcionista de Crediário">Recepcionista de Crediário</option>
									<option value="Recepcionista de Eventos">Recepcionista de Eventos</option>
									<option value="Recepcionista Hoteleiro">Recepcionista Hoteleiro</option>
									<option value="Recepcionista Orçamentista">Recepcionista Orçamentista</option>
									<option value="Recreador(a) Infantil">Recreador(a) Infantil</option>
									<option value="Recuperador(a) de Créditos">Recuperador(a) de Créditos</option>
									<option value="Redator(a)">Redator(a)</option>
									<option value="Relações Públicas">Relações Públicas</option>
									<option value="Relator(a)">Relator(a)</option>
									<option value="Repórter">Repórter</option>
									<option value="Repositor(a)">Repositor(a)</option>
									<option value="Repositor(a) de Gôndola">Repositor(a) de Gôndola</option>
									<option value="Repositor(a) de Horti-frut">Repositor(a) de Horti-frut</option>
									<option value="Representante Comercial">Representante Comercial</option>
									<option value="Representante de Serviços">Representante de Serviços</option>
									<option value="Revisor(a) Técnica">Revisor(a) Técnica</option>
									<option value="Salgadeiro(a)">Salgadeiro(a)</option>
									<option value="Secretário(a)">Secretário(a)</option>
									<option value="Secretário(a) de Administração">Secretário(a) de Administração</option>
									<option value="Secretário(a) de Administração e Finanças">Secretário(a) de Administração e Finanças</option>
									<option value="Secretário(a) de Finanças">Secretário(a) de Finanças</option>
									<option value="Secretário(a) Executivo(a)">Secretário(a) Executivo(a)</option>
									<option value="Secretário(a) Executivo(a) Bilíngüe">Secretário(a) Executivo(a) Bilíngüe</option>
									<option value="Segurança">Segurança</option>
									<option value="Serralheiro(a) de Construção">Serralheiro(a) de Construção</option>
									<option value="Serviço de Capatazia">Serviço de Capatazia</option>
									<option value="Serviço Voluntário">Serviço Voluntário</option>
									<option value="Serviços Gerais">Serviços Gerais</option>
									<option value="Síndico(a)">Síndico(a)</option>
									<option value="Sócio">Sócio</option>
									<option value="Sociólogo(a)">Sociólogo(a)</option>
									<option value="Soldador(a)">Soldador(a)</option>
									<option value="Somelier">Somelier</option>
									<option value="Sorveteiro(a)">Sorveteiro(a)</option>
									<option value="Sub-Comandante">Sub-Comandante</option>
									<option value="Sub-Contador(a)">Sub-Contador(a)</option>
									<option value="Sub-Gerente">Sub-Gerente</option>
									<option value="Sub-Gerente de Produção">Sub-Gerente de Produção</option>
									<option value="Superintendente">Superintendente</option>
									<option value="Superintendente de Informática">Superintendente de Informática</option>
									<option value="Supervisor(a)">Supervisor(a)</option>
									<option value="Supervisor(a) Adm. Financeiro">Supervisor(a) Adm. Financeiro</option>
									<option value="Supervisor(a) Administrativo">Supervisor(a) Administrativo</option>
									<option value="Supervisor(a) Comercial">Supervisor(a) Comercial</option>
									<option value="Supervisor(a) Contábil">Supervisor(a) Contábil</option>
									<option value="Supervisor(a) de Almoxarifado">Supervisor(a) de Almoxarifado</option>
									<option value="Supervisor(a) de Atendimento">Supervisor(a) de Atendimento</option>
									<option value="Supervisor(a) de Call Center">Supervisor(a) de Call Center</option>
									<option value="Supervisor(a) de Campo">Supervisor(a) de Campo</option>
									<option value="Supervisor(a) de Controle de Qualidade">Supervisor(a) de Controle de Qualidade</option>
									<option value="Supervisor(a) de Desenvolvimento">Supervisor(a) de Desenvolvimento</option>
									<option value="Supervisor(a) de Digitação">Supervisor(a) de Digitação</option>
									<option value="Supervisor(a) de Ensino">Supervisor(a) de Ensino</option>
									<option value="Supervisor(a) de Estágio">Supervisor(a) de Estágio</option>
									<option value="Supervisor(a) de Formulação">Supervisor(a) de Formulação</option>
									<option value="Supervisor(a) de Informática">Supervisor(a) de Informática</option>
									<option value="Supervisor(a) de Logística">Supervisor(a) de Logística</option>
									<option value="Supervisor(a) de Manutenção Elétrica">Supervisor(a) de Manutenção Elétrica</option>
									<option value="Supervisor(a) de Merchandising">Supervisor(a) de Merchandising</option>
									<option value="Supervisor(a) de Monitoramento (telecom)">Supervisor(a) de Monitoramento (telecom)</option>
									<option value="Supervisor(a) de Montagem Elétrica">Supervisor(a) de Montagem Elétrica</option>
									<option value="Supervisor(a) de Obras">Supervisor(a) de Obras</option>
									<option value="Supervisor(a) de PCP">Supervisor(a) de PCP</option>
									<option value="Supervisor(a) de Postos">Supervisor(a) de Postos</option>
									<option value="Supervisor(a) de Produção">Supervisor(a) de Produção</option>
									<option value="Supervisor(a) de R H - Recursos Humanos">Supervisor(a) de R H - Recursos Humanos</option>
									<option value="Supervisor(a) de Riscos">Supervisor(a) de Riscos</option>
									<option value="Supervisor(a) de Segurança">Supervisor(a) de Segurança</option>
									<option value="Supervisor(a) de Telemarketing">Supervisor(a) de Telemarketing</option>
									<option value="Supervisor(a) de Vendas">Supervisor(a) de Vendas</option>
									<option value="Supervisor(a) Financeiro">Supervisor(a) Financeiro</option>
									<option value="Supervisor(a) Técnico">Supervisor(a) Técnico</option>
									<option value="Suporte Técnico em Informática">Suporte Técnico em Informática</option>
									<option value="Sushiman">Sushiman</option>
									<option value="Tabelião(ã)">Tabelião(ã)</option>
									<option value="Técnico(a) Administrativo">Técnico(a) Administrativo</option>
									<option value="Técnico(a) Agricola">Técnico(a) Agricola</option>
									<option value="Técnico(a) Bibliotecário">Técnico(a) Bibliotecário</option>
									<option value="Técnico(a) de Natação">Técnico(a) de Natação</option>
									<option value="Técnico(a) de Nível Superior">Técnico(a) de Nível Superior</option>
									<option value="Tecnico(a) de Processos">Tecnico(a) de Processos</option>
									<option value="Técnico(a) em Alimentos">Técnico(a) em Alimentos</option>
									<option value="Técnico(a) em Arquitetura">Técnico(a) em Arquitetura</option>
									<option value="Técnico(a) em AutoCad">Técnico(a) em AutoCad</option>
									<option value="Técnico(a) em Classificação e Degustação">Técnico(a) em Classificação e Degustação</option>
									<option value="Técnico(a) em Comércio Exterior">Técnico(a) em Comércio Exterior</option>
									<option value="Técnico(a) em Conectividade">Técnico(a) em Conectividade</option>
									<option value="Técnico(a) em Contabilidade">Técnico(a) em Contabilidade</option>
									<option value="Técnico(a) em Copiadoras">Técnico(a) em Copiadoras</option>
									<option value="Técnico(a) em Curtimento">Técnico(a) em Curtimento</option>
									<option value="Técnico(a) em Edificações">Técnico(a) em Edificações</option>
									<option value="Técnico(a) em Eletromecânica">Técnico(a) em Eletromecânica</option>
									<option value="Técnico(a) em Eletrônica de Aviação">Técnico(a) em Eletrônica de Aviação</option>
									<option value="Técnico(a) em Embalagem">Técnico(a) em Embalagem</option>
									<option value="Técnico(a) em Energia Eólica">Técnico(a) em Energia Eólica</option>
									<option value="Técnico(a) em Enfermagem">Técnico(a) em Enfermagem</option>
									<option value="Técnico(a) em Estradas">Técnico(a) em Estradas</option>
									<option value="Técnico(a) em Geotecnologia">Técnico(a) em Geotecnologia</option>
									<option value="Técnico(a) em Informática (Manut. Hardware)">Técnico(a) em Informática (Manut. Hardware)</option>
									<option value="Técnico(a) em Informática e Proc. de Dados">Técnico(a) em Informática e Proc. de Dados</option>
									<option value="Técnico(a) em Laboratório">Técnico(a) em Laboratório</option>
									<option value="Técnico(a) em Manutenção">Técnico(a) em Manutenção</option>
									<option value="Técnico(a) em Máq. de Escrever e Calculadoras">Técnico(a) em Máq. de Escrever e Calculadoras</option>
									<option value="Técnico(a) em Mecânica Industrial">Técnico(a) em Mecânica Industrial</option>
									<option value="Técnico(a) em Mineração">Técnico(a) em Mineração</option>
									<option value="Técnico(a) em Nutrição e Dietética">Técnico(a) em Nutrição e Dietética</option>
									<option value="Técnico(a) em Pesquisa">Técnico(a) em Pesquisa</option>
									<option value="Técnico(a) em Planej. de Manut. Elétrica">Técnico(a) em Planej. de Manut. Elétrica</option>
									<option value="Técnico(a) em Processo (Senior)">Técnico(a) em Processo (Senior)</option>
									<option value="Técnico(a) em Qualidade">Técnico(a) em Qualidade</option>
									<option value="Técnico(a) em Rádio, Som, Vídeo e Televisão">Técnico(a) em Rádio, Som, Vídeo e Televisão</option>
									<option value="Técnico(a) em Radiologia (Radioterapia)">Técnico(a) em Radiologia (Radioterapia)</option>
									<option value="Técnico(a) em Rede Elétrica">Técnico(a) em Rede Elétrica</option>
									<option value="Técnico(a) em Redes de Computadores">Técnico(a) em Redes de Computadores</option>
									<option value="Técnico(a) em Refrigeração e Ar Condicionado">Técnico(a) em Refrigeração e Ar Condicionado</option>
									<option value="Técnico(a) em Segurança do Trabalho">Técnico(a) em Segurança do Trabalho</option>
									<option value="Técnico(a) em Seguros">Técnico(a) em Seguros</option>
									<option value="Técnico(a) em Suprimentos">Técnico(a) em Suprimentos</option>
									<option value="Técnico(a) em Telecomunicações">Técnico(a) em Telecomunicações</option>
									<option value="Técnico(a) em Turismo">Técnico(a) em Turismo</option>
									<option value="Técnico(a) Têxtil">Técnico(a) Têxtil</option>
									<option value="Telefonista">Telefonista</option>
									<option value="Telemarketing">Telemarketing</option>
									<option value="Terapeuta Ocupacional">Terapeuta Ocupacional</option>
									<option value="Tesoureiro(a)">Tesoureiro(a)</option>
									<option value="Topógrafo">Topógrafo</option>
									<option value="Tornearia em Geral">Tornearia em Geral</option>
									<option value="Traçador">Traçador</option>
									<option value="Tradutor(a)">Tradutor(a)</option>
									<option value="Vendedor(a)">Vendedor(a)</option>
									<option value="Trainee">Trainee</option>
									<option value="Vendedor(a) de Passagens">Vendedor(a) de Passagens</option>
									<option value="Vendedor(a) Externo">Vendedor(a) Externo</option>
									<option value="Vendedor(a) Interno">Vendedor(a) Interno</option>
									<option value="Vendedor(a) Técnico">Vendedor(a) Técnico</option>
									<option value="Vice-Prefeito(a)">Vice-Prefeito(a)</option>
									<option value="Vigilante">Vigilante</option>
									<option value="Vistoriador(a)">Vistoriador(a)</option>
									<option value="Voluntário(a)">Voluntário(a)</option>
									<option value="Web Designer ">Web Designer </option>
									<option value="Web Developer">Web Developer</option>
									<option value="Web Master">Web Master</option>
								</select>
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-12">
							<div class="form-group {{ $errors->has('end') ? 'has-error' : '' }}">
								<label>* Endereço:</label>
								<input type="text" name="end" class="form-control" placeholder="Endereço Rua: ou AV:" value="{{ old('end')}}">
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-12">
							<div class="form-group {{ $errors->has('bairro') ? 'has-error' : '' }}">
								<label>* Bairro</label>
								<input type="text" name="bairro" class="form-control" placeholder="Entre com seu Bairro" value="{{old('bairro')}}">
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('cep') ? 'has-error' : '' }}">
								<label>* CEP</label>
								<input type="text" name="cep" id="cep" class="form-control" placeholder="Cep" value="{{old('cep')}}">
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('estado') ? 'has-error' : '' }}">
								<label>* Estado</label>
								<select class="form-control selectpicker" name="estado" id="lista_estados" data-live-search="true"></select>
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('cidade') ? 'has-error' : '' }}">
								<label>* Cidade</label>
								<select class="form-control " name="cidade" id="lista_cidades"></select>
							</div><!-- /.form-group -->
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('nascionalidade') ? 'has-error' : '' }}">
								<label>* Nacionalidade</label>
								<input type="text" name="nascionalidade" class="form-control" placeholder="Sua Nacionalidade" value="{{old('nascionalidade')}}">
							</div><!-- /.form-group -->
						</div>
					</div><!-- /.col -->
					<div class="box-footer">
						<button type="#" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-info pull-right">Salvar</button>
					</div>

				</form><!-- /.form -->
			</div><!-- /.box-body -->
		</div><!-- /.box-default -->
	</div>
	<div class="col-md-6">
		<div class="box box-info">
			<!-- form start -->
			<form class="form-horizontal">
				<div class="box-body">
						<!-- Widget: user widget style 1 -->
						<div class="box box-widget widget-user">
							<!-- Add the bg color to the header using any of the bg-* classes -->
							<div class="widget-user-header bg-aqua-active">
								<h3 class="widget-user-username">{{ auth()->guard('web')->user()->name}}</h3>
								<h5 class="widget-user-desc">Conta Premiu</h5>
							</div>
							<div class="widget-user-image">
								<img class="img-circle" src="{!! asset('img/user.png') !!}" alt="User Avatar">
							</div>
							<div class="box-footer">
								<div class="row">
									<div class="col-sm-6 border-right">
										<div class="description-block">
											<h5 class="description-header">20</h5>
											<span class="description-text">Contratos</span>
										</div>
										<!-- /.description-block -->
									</div>
									<!-- /.col -->
									<div class="col-sm-6 border-right">
										<div class="description-block">
											<h5 class="description-header">5</h5>
											<span class="description-text">Contratos no BlockChan</span>
										</div>
										<!-- /.description-block -->
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
						</div>
						<!-- /.widget-user -->
					</div>
				</div>
				<!-- /.box-body -->
			</form>
		</div>
		
	</div>
</div>
@stop

@section('smartwizard_js')
	<script src="{{ asset('vendor/adminlte/vendor/inputmask/js/jquery.inputmask.bundle.js') }}"></script>
	<script src="{{ asset('vendor/site/Style/dist/js/cidade-estados-brasil.min.js') }}"></script>
	<script src="{{ asset('vendor/adminlte/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script  type="text/javascript" >
		$(document).ready(function(){
			(function($){

				$('#dtNasc').inputmask("datetime",{
					mask: "1-2-y", 
					placeholder: "dd-mm-yyyy", 
					leapday: "29-02-", 
					separator: "-", 
					alias: "yyyy-mm-dd"
				});
			
				//$('#dtNasc').inputmask({ mask: ['9999-99-99']});

				$("input[id*='cpfcnpj']").inputmask({ mask: ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true });
				$("input[id*='ierg']").inputmask({ mask: ['99.999.999-9', '999999999-0'], keepStatic: true });
				$("input[id*='cep']").inputmask({ mask: ['99999-999'], keepStatic: true });
				$("input[id*='tel']").inputmask({ mask: ['(99)9999-9999', '(99)99999-9999'], keepStatic: true });

			})(jQuery)

		});

		new statesCitiesBR({
			states: {
				elementID: "lista_estados",
				defaultOption: "Selecione um Estado"
			},
			cities: {
				elementID: "lista_cidades",
				state: "auto",
				defaultOption: "Selecione uma Cidade"
			}
		});
	</script>
@yield('js')
@stop