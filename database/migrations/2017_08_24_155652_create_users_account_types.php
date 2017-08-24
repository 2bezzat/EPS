<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAccountTypes extends Migration
{
    /**
     * User ccounts Pivot table
     * indecates many to many realtions
     * @return void
     */
    public function up()
    {
        Schema::create('users_account_types', function (Blueprint $table) {
            $table->increments('id');
    
            // The user relation column
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                  ->references('id')  
                  ->on('users');
            
            // The Account relation column
            $table->integer('account_id')->unsigned()->nullable();
            $table->foreign('account_id')
                  ->references('id')  
                  ->on('accounts');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_account_types');
    }
}
