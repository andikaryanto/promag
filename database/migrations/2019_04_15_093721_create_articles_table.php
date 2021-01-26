<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->text('description');
            $table->string('picture')->nullable();
            $table->text('detail');
            $table->integer('view');
            $table->integer('status')->default(0);
            $table->string('tags')->nullable();
            $table->string('slug')->nullable();
            $table->integer('article_categories_id');
            $table->string('meta_title',500);
            $table->string('meta_description',1000);
            $table->string('meta_keyword',100);
            $table->string('meta_robot',500);
            $table->string('alt_image',500);
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
        Schema::dropIfExists('articles');
    }
}
