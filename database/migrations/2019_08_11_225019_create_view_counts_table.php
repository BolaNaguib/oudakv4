<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      \DB::statement('CREATE VIEW view_counts AS SELECT ip, country, state, city, DATE(created_at) AS day FROM visits GROUP BY day, country, state, city, ip;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      \DB::statement('DROP VIEW IF EXISTS view_counts;');
    }
}
