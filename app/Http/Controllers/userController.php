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
		return view('users.index');
	}
	
	public function create()
	{
		return view('users.create');
	}

	public function  store(UserRequest $request)
	{
		$this->createEdit('create');
	}
	
	public function update()
	{
		
	}
	
	public function destroy()
	{
		
	}
	
	public function createEdit($action = 'create', $id = null)
	{
		$req = Request::all();
        $validator    =  Validator::make($req, [
            'name'                 => 'required',
            'email'                 => 'required|email',
            'mobile'                 => 'required',
        ]);
        if ($validator->fails()) {
            $this->msg = $this->notValidRespond($validator->errors()->all());
            return false;
        }

	}
}
