@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Crear Categoria
				</div>
				<div class="card-body">
					<form action="{{ route('categories.store') }}" method="POST">
						@include('admin.categories.partials.form')
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>	
@endsection