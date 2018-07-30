<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function(Blueprint $table) {
	$table->increments('id');
	$table->integer('user_id');
	$table->integer('file_id');
    $table->integer('status_id');
	$table->string('file_name');
	$table->string('file_type')->nullable;
	$table->string('file_path')->nullable;
    $table->string('url')->nullable;
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
        Schema::drop('uploads');
    }
}
