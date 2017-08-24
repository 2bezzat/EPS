@extends('template')

@section('main')

<div class="jumbotron">
  <div class="container">
	<h1>{{$account->type}}</h1>
  </div>
</div>


<a href={{route('accounts.create')}} class="btn btn-primary">Add New Account</a>
<hr>

<h3>Type: <i>{{$account->type}}</i></h3> 

<hr>
<h4>Description:</h4>
<p>{{$account->description}}</p>
<h3>Account users</h3>
<ul>
	@foreach($account->users as $user)
		<li>
			<a href={{action('userController@show',$user->id)}}>
				{{$user->name}}	
			</a> 
		</li>
	@endforeach()
	
</ul>

	
</ul>


@stop