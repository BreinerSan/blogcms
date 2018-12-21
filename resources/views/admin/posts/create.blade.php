@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Crear Post
				</div>
				<div class="card-body">
					<form action="{{ route('posts.store') }}" method="POST">
						@include('admin.posts.partials.form')
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>	
@endsection