@csrf
<div class="form-group">
	<label for="name">Nombre de la categoria</label>
	<input type="text" class="form-control" id="name" name="name">
</div>

<div class="form-group">
	<label for="slug">URL Amigable</label>
	<input type="text" class="form-control" id="slug" name="slug">
</div>

<div class="form-group">
	<label for="slug">Descripcion</label>
	<input type="textarea" class="form-control" id="body" name="body">
</div>

<div class="form-group">
	<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
</div>

@section('scripts')
	<script src="{{ asset('vendor/StringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});
	</script>
@endsection
