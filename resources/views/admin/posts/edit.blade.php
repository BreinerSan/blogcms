@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Editar posts
				</div>
				<div class="card-body">
					<form action="{{ route('posts.update', $post->id) }}" method="POST">
						<input type="hidden" name="_method" value="PUT">
						@include('admin.posts.partials.form')
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>	
@endsection