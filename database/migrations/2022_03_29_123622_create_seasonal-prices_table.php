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
        Schema::create('seasonal_prices', function (Blueprint $table) {
            $table->id();
            $table->float('price_factor');
            $table->dateTime('date_start');
            $table->dateTime('date_end');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasonal_prices');
    }
};
