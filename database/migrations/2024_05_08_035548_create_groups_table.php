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

        Schema::create('groups', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('creator_id');

            $table->string('default_currency');

            $table->string('default_calendar_type');

            $table->string('invite_link');

            $table->timestamp('invite_expiry')->nullable();


            $table->timestamps();

            $table->softDeletes();

            $table->foreign('creator_id')->references('id')->on('users');

        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
