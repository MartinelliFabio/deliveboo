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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nr_ord', 15)->unique();
            $table->string('slug');
            $table->float('price_tot', 6, 2)->unsigned();
            $table->string('email', 100)->required();
            $table->string('address', 255)->required();
            $table->string('phone',50);
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->string('status', 50);
            $table->string('datetime');
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
        Schema::dropIfExists('orders');
    }
};
