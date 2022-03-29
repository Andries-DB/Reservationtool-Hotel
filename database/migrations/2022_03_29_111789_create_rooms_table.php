<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('floor');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->string('src' , 255);
            $table->boolean('is_smokersroom');
            $table->boolean('has_balcony');
            $table->boolean('has_shower');
            $table->boolean('has_bath');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
