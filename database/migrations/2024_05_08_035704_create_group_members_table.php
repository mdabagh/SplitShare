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

        Schema::create('group_members', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('group_id');

            $table->unsignedBigInteger('user_id');


            $table->timestamps();

            $table->softDeletes();

            $table->foreign('group_id')->references('id')->on('groups');

            $table->foreign('user_id')->references('id')->on('users');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_members');
    }
};
