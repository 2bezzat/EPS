<?php

namespace App\Http\Controllers;

use Request;
use App\Account;
use Validator;
use App\Http\Requests\AccountRequest;


class accountController extends Controller
{

	public function index()
	{
		$accounts = Account::all();
		return view('accounts.index',compact('accounts'));
	}
	
	public function create()
	{
		return view('accounts.create');
	}

	public function show($id)
	{
		$Account = Account::findOrFail($id);
		return $Account;
	}

	public function  store(AccountRequest $request)
	{
		$this->createEdit('create');
		return redirect(action('accountController@index'));
	}
	
	public function edit($id)
	{
		$account = Account::findOrFail($id);
		return view('accounts.edit',compact('account'));

	}

	public function update(AccountRequest $request, $id)
	{
		$this->createEdit('edit', $id);
		return redirect(action('accountController@index'));
	}
	
	public function destroy()
	{
		
	}
	
	public function createEdit($action = 'create', $id = null)
	{
		$req = Request::all();
        $user = new Account();
        if($action == 'edit'){
        	$user = Account::find($id);
        }

        $user->type  	= $req['type'];
        $user->description = $req['description'] ?? '';
        $user->save();
	}
}
