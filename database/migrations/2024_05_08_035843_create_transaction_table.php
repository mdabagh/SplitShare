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

        Schema::create('transactions', function (Blueprint $table) {

            $table->id(); // Use the id method to create an auto-incrementing primary key

            $table->unsignedBigInteger('payer_id'); // Use unsignedBigInteger for user IDs

            $table->unsignedBigInteger('receiver_id'); // Use unsignedBigInteger for user IDs

            $table->decimal('amount', 10, 2); // Use decimal for amount with precision and scale

            $table->unsignedBigInteger('order_member_id'); // Use unsignedBigInteger for order member ID

            $table->timestamp('paid_at')->useCurrent(); // Use timestamp for paid_at with default current timestamp

            $table->timestamps();

            $table->softDeletes(); 
            
            $table->foreign('payer_id')->references('id')->on('users'); // Add foreign key for payer_id

            $table->foreign('receiver_id')->references('id')->on('users'); // Add foreign key for receiver_id

            $table->foreign('order_member_id')->references('id')->on('order_members'); // Add foreign key for order_member_id

        });

    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
