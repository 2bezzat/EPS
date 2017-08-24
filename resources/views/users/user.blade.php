@extends('template')

@section('main')

<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Users</h1>
    <p>{{$user->name}} </p>
    <p>{{$user->email}}</p>
    <a href={{action('userController@addUserToAccount')}}>Assign User to account</a>
  </div>
</div>


<a href={{route('users.create')}} class="btn btn-primary">Add New User</a>
<hr>

<h2>Accounts</h2>
<ul>
	@foreach($user->accounts as $account)
		<li>
			<a href={{action('accountController@show',$account->id)}}>
				{{$account->type}}	
			</a> 
		</li>
	@endforeach()
	
</ul>


@stop