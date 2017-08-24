@extends('template')

@section('main')

	<div class="jumbotron">
	  <div class="container">
	    <h1 class="display-3">Users</h1>
	    <p>Assign User To Account </p>
	  </div>
	</div>

	{{Form::open(['action' => 'userController@storeUserToAccount','method' => 'POST'])}}
		{{Form::select('user',$users,null,['class' => 'form-control select' ,'placeholder' =>'user Name' ])}}
		<br><br>
		{{Form::select('account',$accounts,null,['class' => 'form-control  select' ,'placeholder' =>'Account type' ])}}
		<br><br>
		{{Form::submit('Assign User',['class' => 'form-control btn btn-primary'])}}
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

@push('scripts')

<script type="text/javascript">
  $('.select').select2();
</script>

@endpush