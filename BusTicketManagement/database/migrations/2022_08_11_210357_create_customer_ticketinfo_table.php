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
        Schema::create('customer_ticketinfo', function (Blueprint $table) {
            $table->id("ticket_id");
            $table->string("from");
            $table->string("to");
            $table->integer("seats");
            $table->unsignedBigInteger("user_id");
            $table->boolean("is_paid")->default(false);
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
        Schema::dropIfExists('customer_ticketinfo');
    }
};
