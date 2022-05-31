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
        Schema::create('user_habit_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_habit_id');
            $table->foreignIdFor(\App\Models\Value::class)->references('id')->on('values');
            $table->timestamps();
            $table->foreign('user_habit_id')->references('id')->on('user_habits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_habit_values');
    }
};
