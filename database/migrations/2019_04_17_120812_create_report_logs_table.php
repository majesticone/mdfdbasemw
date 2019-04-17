<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_logs', function (Blueprint $table) {
            $table->increments('report_id');
            $table->string('site_id');
            $table->string('unit_id');
            $table->string('team_id');
            $table->string('lead_id');
            $table->string('month');
            $table->string('year');
            $table->string('quarter');
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
        Schema::dropIfExists('report_logs');
    }
}
