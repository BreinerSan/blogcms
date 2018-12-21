@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Lista de Etiquetas
					<a href="{{ route('tags.create') }}" class="btn btn-primary float-right">Crear</a>
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
							@foreach($tags as $tag)
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td width="10px">
									<a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-secondary">Ver</a>
								</td>
								<td width="10px">
									<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-secondary">Editar</a>
								</td>
								<td width="10px">
									<form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										@csrf
										<button class="btn btn-sm btn-danger">Eliminar</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $tags->render() }}
				</div>
			</div>
		</div>	
	</div>
</div>	
@endsection