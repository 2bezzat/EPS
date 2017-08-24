@extends('template')

@section('main')

<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Users</h1>
    <p>Users List </p>
  </div>
</div>


<a href={{route('users.create')}} class="btn btn-primary">Add New User</a>
<hr>

<h2>Name</h2>
<ul>
	@foreach($users as $user)
		<li>
			<a href={{action('userController@show',$user->id)}}>
				{{$user->name}}	
			</a> -
			<a href={{action('userController@edit',$user->id)}}>
				Edit
				<span class="glyphicon glyphicon-pencil"></span>
			</a>

			

		</li>

	@endforeach()
	
</ul>


@stop