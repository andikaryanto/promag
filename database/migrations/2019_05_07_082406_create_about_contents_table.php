<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->double('tahun');
            $table->string('title')->nullable();
            $table->string('picture')->nullable();
            $table->text('detail');
            $table->string('meta_title',500);
            $table->string('meta_description',1000);
            $table->string('meta_keyword',100);
            $table->string('meta_robot',500);
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
        Schema::dropIfExists('about_contents');
    }
}
