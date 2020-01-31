<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteruserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeruser', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('username',100);
            $table->string('email',250);
            $table->string('password');
            $table->string('repass');
            $table->string('country',100);
            $table->string('city',100);
            $table->integer('contact');
            $table->string('address');
            $table->string('img');
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
        Schema::dropIfExists('registeruser');
    }
}
