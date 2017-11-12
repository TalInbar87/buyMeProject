<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTask extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('tasks')->insert(array(
		    'todo'=>'wash floor',
            'is_done'=>1
        ));
		DB::table('tasks')->insert(array(
		    'todo'=>'shopping',
            'is_done'=>1
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('tasks')->where('todo','=','wash floor')->delete();
		DB::table('tasks')->where('todo','=','shopping')->delete();
	}

}
