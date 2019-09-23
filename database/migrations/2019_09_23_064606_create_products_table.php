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
            $table->bigIncrements('pid');
            $table->unsignedBigInteger('sid')->unsigned();
            $table->unsignedBigInteger('uid')->unsigned();
            $table->string('pname')->unique();
            $table->string('ptitle')->unique();
            $table->string('pslug')->unique();
            $table->binary('image');
            $table->string('description');
            $table->string('post');
            $table->string('brand');
            $table->bigInteger('model');
            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sid')->references('sid')->on('subsubcats')->onDelete('cascade')->onUpdate('cascade');
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
