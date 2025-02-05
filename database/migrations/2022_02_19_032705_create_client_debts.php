<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDebts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_debts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("network_operator_id")->constrained();
            $table->foreignId("client_id")->constrained();
            $table->double("debt")->default(0.0);
            $table->text("description")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('client_debts');
    }
}
