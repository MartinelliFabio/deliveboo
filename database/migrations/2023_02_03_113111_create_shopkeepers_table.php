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
        Schema::create('shopkeepers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('slug');
            $table->string('p_iva', 20)->required();
            $table->string('image')->nullable();
            $table->string('address', 100)->required();
            $table->time('hour_open')->required();
            $table->time('hour_close')->required();
            $table->foreignId('user_id')->cascadeOnUpdate()->nullOnDelete()->nullable()->constrained();
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
        Schema::dropIfExists('shopkeepers');
    }
};
