@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-md-offset-2 center">
				<h1>Lista de articulos</h1>
			
				@foreach($posts as $post)
					<div class="card" style="margin-bottom: 8px">
						<div class="card-header bg-primary text-white">
							{{ $post->name }}
						</div>
						<div class="card-body">
							@if($post->file)
								<img class="card-img" src="{{ $post->file }}">
							@endif
							{{ $post->excerpt }}
							<a href="#" class="pull-right">Leer más</a>
						</div>
					</div>
				@endforeach
				{{ $posts->render() }}
			</div>
		</div>
	</div>
@endsection
