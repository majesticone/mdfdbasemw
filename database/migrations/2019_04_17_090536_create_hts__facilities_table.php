<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtsFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hts__facilities', function (Blueprint $table) {
                $table->increments('id');            
                $table->integer('report_id');       
                
                $table->integer('hts_tot_ml_m');
                $table->integer('hts_tot_cv_m');
                $table->integer('hts_tot_unk_m');

                $table->integer('hts_tot_ml_f_non_preg');
                $table->integer('hts_tot_cv_f_non_preg');
                $table->integer('hts_tot_unk_f_non_preg');

                $table->integer('hts_tot_ml_f_preg');
                $table->integer('hts_tot_cv_f_preg');
                $table->integer('hts_tot_unk_f_preg');

                $table->integer('hts_tot_ml_pos');
                $table->integer('hts_tot_cv_pos');
                $table->integer('hts_tot_unk_pos');               
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
        Schema::dropIfExists('hts__facilities');
    }
}
