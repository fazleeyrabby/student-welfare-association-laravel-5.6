<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserjournalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userjournal', function (Blueprint $table) {
            $table->increments('journal_id');
            $table->string('journal_title',250);
            $table->integer('category_id');
            $table->integer('user_id');
            $table->longText('journal_description');
            $table->string('user_author_name',250);
            $table->string('blog_img');
            $table->string('filetoupload');
            $table->string('tran_num',12);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('userjournal');
    }
}
