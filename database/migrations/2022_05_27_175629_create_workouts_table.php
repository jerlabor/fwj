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
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Program::class)->references('id')->on('programs');
            $table->longText('url');
            $table->string('training_type');
            $table->string('muscle_group');
            $table->integer('week');
            $table->integer('day');
            $table->integer('rpe');
            $table->date('completed_on');
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
        Schema::dropIfExists('workouts');
    }
};
