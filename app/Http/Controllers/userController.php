<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use Validator;
use App\Http\Requests\UserRequest;

class userController extends Controller
{

	public function __construct()
	{
	
	}
	
	public function index()
	{
		$users = User::all();
		return view('users.index',compact('users'));
	}
	
	public function create()
	{
		return view('users.create');
	}

	public function show($id)
	{
		$user = User::findOrFail($id);
		return $user;
	}

	public function  store(UserRequest $request)
	{
		$this->createEdit('create');
		return redirect(action('userController@index'));
	}
	
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('users.edit',compact('user'));

	}

	public function update($id)
	{
		$this->createEdit('edit', $id);
		return redirect(action('userController@index'));
	}
	
	public function destroy()
	{
		
	}
	
	public function createEdit($action = 'create', $id = null)
	{
		$req = Request::all();
        $user = new User();
        if($action == 'edit'){
        	$user = User::find($id);
        }

        $user->name  	= $req['name'];
        $user->email 	= $req['email'];
        $user->password = bcrypt($req['password']);
        $user->type 	= 'user';
        $user->save();

	}
}
