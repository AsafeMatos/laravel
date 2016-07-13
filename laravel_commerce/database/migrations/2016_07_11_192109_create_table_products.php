<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name", 80);
            $table->text("description");
            $table->decimal("price"); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
