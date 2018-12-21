@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Lista de Categorias
					<a href="{{ route('categories.create') }}" class="btn btn-primary float-right">Crear</a>
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nombre</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td width="10px">
									<a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-secondary">Ver</a>
								</td>
								<td width="10px">
									<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-secondary">Editar</a>
								</td>
								<td width="10px">
									<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										@csrf
										<button class="btn btn-sm btn-danger">Eliminar</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $categories->render() }}
				</div>
			</div>
		</div>	
	</div>
</div>	
@endsection