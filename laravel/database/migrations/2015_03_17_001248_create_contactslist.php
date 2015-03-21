<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createcontactslist extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactslist', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('mobileNo');
			$table->string('emailId');
			$table->string('firstName');
			$table->string('lastName');
			$table->string('gender');
			$table->string('groupname');
			$table->string('status');
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
		Schema::drop('contactslist');
	}


}
