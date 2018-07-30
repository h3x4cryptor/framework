<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function(Blueprint $table) {
		$table->increments('id');
		$table->integer('user_id');
		$table->integer('parent_id')->nullable();
        $table->text('title');
		$table->text('body');
        $table->text('slug');
        $table->text('draft');
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
        Schema::drop('statuses');
    }
}
