@extends('template')

@section('main')

	<div class="jumbotron">
	  <div class="container">
	    <h1 class="display-3">Accounts</h1>
	    <p>Edit Account </p>
	  </div>
	</div>
	
	{{Form::model($account,['action' => ['accountController@update',$account->id],'method' => 'PATCH'])}}
		{{Form::text('type',null,['class' => 'form-control', 'placeholder' => 'type'])}}
		<br>
		{{Form::textarea('description',null,['class' => 'form-control', 'placeholder' => 'description'])}}
		<br>
		{{Form::submit('Edit Account',['class' => 'form-control btn btn-primary'])}}
		<br>
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