<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveSixSizesAndSixGiftoptionsFromGiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('gift_boxes', function (Blueprint $table) {
          $table->dropColumn('size_4');
          $table->dropColumn('size_5');
          $table->dropColumn('size_6');
          $table->dropColumn('price_4');
          $table->dropColumn('price_5');
          $table->dropColumn('price_6');
          $table->dropColumn('gift_1');
          $table->dropColumn('gift_2');
          $table->dropColumn('gift_3');
          $table->dropColumn('gift_4');
          $table->dropColumn('gift_5');
          $table->dropColumn('gift_6');
          $table->dropColumn('gift_price_1');
          $table->dropColumn('gift_price_2');
          $table->dropColumn('gift_price_3');
          $table->dropColumn('gift_price_4');
          $table->dropColumn('gift_price_5');
          $table->dropColumn('gift_price_6');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('gift_boxes', function (Blueprint $table) {
          $table->dropColumn('size_4');
          $table->dropColumn('size_5');
          $table->dropColumn('size_6');
          $table->dropColumn('price_4');
          $table->dropColumn('price_5');
          $table->dropColumn('price_6');
          $table->dropColumn('gift_1');
          $table->dropColumn('gift_2');
          $table->dropColumn('gift_3');
          $table->dropColumn('gift_4');
          $table->dropColumn('gift_5');
          $table->dropColumn('gift_6');
          $table->dropColumn('gift_price_1');
          $table->dropColumn('gift_price_2');
          $table->dropColumn('gift_price_3');
          $table->dropColumn('gift_price_4');
          $table->dropColumn('gift_price_5');
          $table->dropColumn('gift_price_6');
      });
    }
}
