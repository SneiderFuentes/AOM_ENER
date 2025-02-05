<?php

use App\Models\V1\WorkOrder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelToWorkOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('work_orders', function (Blueprint $table) {
            $table->enum("level", [WorkOrder::WORK_ORDER_LEVEL_1, WorkOrder::WORK_ORDER_LEVEL_2])->default(WorkOrder::WORK_ORDER_LEVEL_1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_orders', function (Blueprint $table) {
            $table->dropColumn("level");
        });
    }
}
