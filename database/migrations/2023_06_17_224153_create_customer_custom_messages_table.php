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
        Schema::create('customer_custom_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('message');
            $table->string('language');
            $table->foreignId('appointment_reminder_id')->constrained('appointment_reminders')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_custom_messages');
    }
};
