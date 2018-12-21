@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Editar Categoria
				</div>
				<div class="card-body">
					<form action="{{ route('categories.update', $category->id) }}" method="POST">
						<input type="hidden" name="_method" value="PUT">
						@include('admin.categories.partials.form')
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>	
@endsection