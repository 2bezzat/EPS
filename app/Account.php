<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
    public function users()
    {
    	return $this->belongsToMany('App\User','users_account_types','account_id','user_id');
    }

    
}
