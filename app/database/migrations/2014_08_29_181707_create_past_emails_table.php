<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePastEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('past_emails', function(Blueprint $table)
		{
			$table->increments('id');
            $table->unsignedInteger( 'user_id' );
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name' , 100);
            $table->string('email' , 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('past_emails');
	}

}
