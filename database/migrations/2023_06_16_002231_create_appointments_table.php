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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->foreignId('customer_service_id')->constrained('customer_services')->cascadeOnDelete(); // Update here appropriately
            $table->string('description')->nullable();
            $table->string('status', 20);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();  // Update here appropriately
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
