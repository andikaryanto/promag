<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('email_to');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('facebook_gazero');
            $table->string('twitter_gazero');
            $table->string('youtube_gazero');
            $table->string('instagram_gazero');
            $table->string('footer_word');
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
        Schema::dropIfExists('generals');
    }
}
