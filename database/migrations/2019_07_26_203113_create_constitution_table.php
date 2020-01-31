<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constitution', function (Blueprint $table) {
            $table->increments('constuon_id');
            $table->string('constitution_heading',300);
            $table->longText('constitutiont_description');
            $table->string('filetoupload');
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
        Schema::dropIfExists('constitution');
    }
}
