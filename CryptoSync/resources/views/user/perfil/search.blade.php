{{!! Form::open(array( 'url'=>'/contrato', 'method'=>'GET','autocomplete'=>'off', 'role'=>'search' )) !!}}
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control" name="searchText" placeholder="Buscar por CPF" value="{{$searchText}}">
		</div>
	</div>
{{ Form::close() }}