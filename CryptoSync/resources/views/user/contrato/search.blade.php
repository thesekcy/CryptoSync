{!! Form::open(['url'=>'/contrato/search', 'method'=>'post','autocomplete'=>'off', 'role'=>'search' ]) !!}
	@csrf
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control" name="search" placeholder="Buscar por CPF">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</div>
	</div>
{{ Form::close() }}