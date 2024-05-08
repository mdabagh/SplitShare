<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()

    {

        Schema::create('order_members', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('order_id');

            $table->unsignedBigInteger('user_id');

            $table->decimal('amount', 10, 2);

            $table->decimal('settled_amount', 10, 2)->default(0);

            $table->timestamps();


            $table->foreign('order_id')->references('id')->on('orders');

            $table->foreign('user_id')->references('id')->on('users');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_members');
    }
};
