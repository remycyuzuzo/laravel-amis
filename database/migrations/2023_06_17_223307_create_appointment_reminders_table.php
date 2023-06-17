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
        Schema::create('appointment_reminders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('appointment_id')->constrained('appointments')->cascadeOnDelete();
            $table->dateTime('sending_time'); // update here with appropriate default date settings
            $table->string('status', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_reminders');
    }
};
