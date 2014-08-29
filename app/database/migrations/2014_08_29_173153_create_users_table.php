<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users' , function(BluePrint $table)
        {
            $table->increments( 'id' );
            $table->string( 'first_name' , 100 );
            $table->string( 'last_name' , 100 );
            $table->string( 'email' , 100 );
            $table->string('picture', 255);
            $table->string( 'password' , 255 );
            $table->unsignedInteger('number_of_logins')->default('0');
            $table->string( 'remember_token' , 100 )->nullable();
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
		Schema::drop('users');
	}

}
