@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Lista de mis Posts
					<a href="{{ route('posts.create') }}" class="btn btn-primary float-right">Crear</a>
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
							@foreach($posts as $post)
							<tr>
								<td>{{ $post->id }}</td>
								<td>{{ $post->name }}</td>
								<td width="10px">
									<a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-secondary">Ver</a>
								</td>
								<td width="10px">
									<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-secondary">Editar</a>
								</td>
								<td width="10px">
									<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										@csrf
										<button class="btn btn-sm btn-danger">Eliminar</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $posts->render() }}
				</div>
			</div>
		</div>	
	</div>
</div>	
@endsection