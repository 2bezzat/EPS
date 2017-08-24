@extends('template')

@section('main')

<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Accounts</h1>
    <p>Accounts List </p>
  </div>
</div>


<a href={{route('accounts.create')}} class="btn btn-primary">Add New Account</a>
<hr>

<h2>Type</h2>
<ul>
	@foreach($accounts as $account)
		<li>
			<a href={{action('accountController@show',$account->id)}}>
				{{$account->type}}	
			</a> -
			<a href={{action('accountController@edit',$account->id)}}>
				Edit
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</li>
		<p>{{substr($account->description,0,20)}}..</p>

	@endforeach()
	
</ul>


@stop