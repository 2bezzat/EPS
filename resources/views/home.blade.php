@extends('template')

@section('main')

<h1>Welcome to the EPS TASK</h1>
<h3>Intro:</h3>

<p>
	Hello, This is the task that was asked from me "AbdElRahman Ezzat - a.ezzat1997@gmail.com".
	The task was Requested by Dr Gamal & Dr Abd EL Qader.
	The Task bussiness is that we have an accounts (maybe bank account "The Task doucment wasn't clear about it") and to create tasks and assign it to users.
</p>
<hr>
<p>
	<i>My Approach to this task is.</i>
</p>
<p>
	I First made the user and useController files to be able to create and edit the user. <br>
	I then added the accounts and accoutController to add the accounts types. <br>
	I used Many to Many relationships to link the users with the accounts, as the user may have many account and the account itself may belong to many user.
</p>



<h3>Notes </h3>
<ul>
	<li>
		Edit .env file to match the database credintails to your record
	</li>
	<li>Run "php artisan migrate" to include the database design implemnted</li>
	<li>
		there is a dump of the data incase you want a ready data ie(data while working, as I didn't have time to make some factories)
	</li>
	<li>
		The Files that were created/Edited are 
		<ul>
			<li>
				Web (routes files)
			</li>
			<li>userController</li>
			<li>acountController</li>
			<li>UserRequest [to validate the User form]</li>
			<li>AccountRequest [to validate the Account form]</li>
			<li>The naming conventions is following  PSR-2</li>
		</ul>
	</li>
	<li>
		The used Packages are the following
		<ul>
			<li>
				Laravel Collections (for deailing with forms)
			</li>
		</ul>
	</li>
</ul>
@stop