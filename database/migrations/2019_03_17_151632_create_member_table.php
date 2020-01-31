<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('member_id');
            $table->string('name',200);
            $table->string('designation',200);
            $table->tinyInteger('mbr_typ');
            $table->tinyInteger('an_mbr_typ');
            $table->text('address');
            $table->string('email',256);
            $table->integer('contact',15);
            $table->string('profession',150);
            $table->string('edu_bcgnd',150);
            $table->string('last_edu_insttd',150);
            $table->string('blood_group',20);
            $table->integer('moy_id');
            $table->longText('description');
            $table->text('profile_pic');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('member');
    }
}
