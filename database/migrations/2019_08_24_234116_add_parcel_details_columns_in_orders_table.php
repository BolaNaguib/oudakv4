<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParcelDetailsColumnsInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('parcel_length');
            $table->string('parcel_width');
            $table->string('parcel_height');
            $table->string('parcel_weight');
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
            $table->dropColumn('parcel_length');
            $table->dropColumn('parcel_width');
            $table->dropColumn('parcel_height');
            $table->dropColumn('parcel_weight');
        });
    }
}
