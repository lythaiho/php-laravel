<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListstudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liststudent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name",255);
            $table->tinyInteger("age",4);
            $table->string("address",200);
            $table->string("telephone",20);
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
        Schema::dropIfExists('liststudent');
    }
}
