<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
          
            $table->string('email');
            $table->enum('gender',['male','female']);
            $table->integer('phone');
            $table->integer('age');
            $table->string('address');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('price');
            $table->string('image');
            $table->foreignId('specility_id')->constrained('specilties','id');
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
        Schema::dropIfExists('doctors');
    }
}
