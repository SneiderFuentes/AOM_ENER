<?php

use App\Models\V1\SinOtherFee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinLevelOtherFee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sin_other_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId("network_operator_id")->constrained();
            $table->unsignedBigInteger("strata_id");
            $table->foreign('strata_id')->references('id')->on('strata');
            $table->enum("tax_type", [
                SinOtherFee::MONEY_FEE,
                SinOtherFee::PERCENTAGE_FEE,
            ]);
            $table->double("contribution")->default(0.0);
            $table->double("discount")->default(0.0);
            $table->double("tax")->default(0.0);
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
        Schema::dropIfExists('sin_other_fees');
    }
}
