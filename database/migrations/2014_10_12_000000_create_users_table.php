<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
<<<<<<< HEAD
            $table->boolean('ex');
            $table->string('session');
			$table->string('avatar')->default('default.jpg');
			$table->string('username')->unique();
=======
            $table->string('session');
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cf_handle');
            $table->string('dev_id');
            $table->string('uva_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
