<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEasypostShipmentIdColumnInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * THIS MIGRAtION IS FOR EASYPOST SHIPMENTS INTEGRATION
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('easy_post_shipment_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('easy_post_shipment_id');
        });
    }
}
