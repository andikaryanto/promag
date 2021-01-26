<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('picture')->nullable();
            $table->string('color')->nullable();
            $table->string('font_color')->nullable();
            $table->string('button_bgcolor')->nullable();
            $table->string('button_forecolor')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('products');
    }
}
