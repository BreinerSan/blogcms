@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-md-offset-2 center">
				<h1>{{ $post->name }}</h1>
			
				<div class="card" style="margin-bottom: 8px">
					<div class="card-header bg-primary text-white">
						Categorias
						<a href="{{ route('category', $post->category->slug) }}" class="text-white">{{ $post->category->name }}</a>
					</div>
					<div class="card-body">
						@if($post->file)
							<img class="card-img" src="{{ $post->file }}">
						@endif
						{{ $post->excerpt }}
						<hr>
						{!! $post->body !!}
						<hr>
						Etiquetas
						@foreach($post->tags as $tag)
							<a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
						@endforeach
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection
