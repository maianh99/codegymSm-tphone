<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateMenusTable.
 */
class CreateMenusTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->longText('data')->nullable();
            $table->unsignedInteger('user_id');
            $table->tinyInteger('status')->nullable();
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
		Schema::drop('menus');
	}
}
