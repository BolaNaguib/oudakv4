<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddButtontitleAndButtonLinkToMainslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_sliders', function (Blueprint $table) {
            //
            $table->string('button_title')->nullable();
            $table->string('button_link')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_sliders', function (Blueprint $table) {
            //
            $table->string('button_title')->nullable();
            $table->string('button_link')->nullable();
        });
    }
}
