@extends('template')

@section('main')

	<div class="jumbotron">
	  <div class="container">
	    <h1 class="display-3">Users</h1>
	    <p>Edit User </p>
	  </div>
	</div>
	
	{{Form::model($user,['action' => ['userController@update',$user->id],'method' => 'PATCH'])}}
		{{Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Name'])}}
		<br>
		{{Form::email('email',null,['class' => 'form-control', 'placeholder' => 'Email'])}}
		<br>
		{{Form::password('password',['class' => 'form-control', 'placeholder' => 'password'])}}
		<br>

		{{Form::submit('Edit User',['class' => 'form-control btn btn-primary'])}}
		@if ($errors->all())
			<div class="alert alert-danger" role="alert">
				@foreach ($errors->all() as $err)
					<p class="text-center">{{ $err }}</p>
				@endforeach
			</div>
        @endif

	{{Form::close()}}
	<hr>


@stop