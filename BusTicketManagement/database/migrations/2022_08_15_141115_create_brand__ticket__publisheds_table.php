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
        Schema::create('brand__ticket__publisheds', function (Blueprint $table) {
            $table->id();
            $table->string("brand_ticket_from");
            $table->string("brand_ticket_to");
            $table->integer("brand_ticket_seat");
            $table->dateTime("brand_ticket_date");
            $table->integer("brand_ticket_price");
            $table->integer("brand_ticket_author_id");
            $table->string("brand_ticket_author_name");
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
        Schema::dropIfExists('brand__ticket__publisheds');
    }
};
