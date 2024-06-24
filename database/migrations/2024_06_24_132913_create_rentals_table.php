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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('heavy_equipment_id')->constrained('heavy_equipments')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('customer_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('rental_date');
            $table->date('return_date');
            $table->integer('total_rental_price');
            $table->integer('total_operator_price');
            $table->string('proof_of_payment')->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('rentals');
    }
};
