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

        Schema::create('orders', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->string('description');

            $table->unsignedBigInteger('group_id');

            $table->unsignedBigInteger('creator_id');

            $table->decimal('total_amount', 10, 2);


            $table->timestamps();

            $table->softDeletes();

            $table->foreign('group_id')->references('id')->on('groups');

            $table->foreign('creator_id')->references('id')->on('users');

        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
