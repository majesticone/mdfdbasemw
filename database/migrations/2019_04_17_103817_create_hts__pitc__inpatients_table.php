<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtsPitcInpatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hts_pitc_inpatients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_id');
            //mllitary Data Variables
            $table->integer('pitc_ml_n_f_15_19');
            $table->integer('pitc_ml_n_f_20_24');
            $table->integer('pitc_ml_n_f_25_19');
            $table->integer('pitc_ml_n_f_30_34');
            $table->integer('pitc_ml_n_f_35_39');
            $table->integer('pitc_ml_n_f_40_49');
            $table->integer('pitc_ml_n_f_abv_50');
            $table->integer('pitc_ml_n_f_age_unk');

            $table->integer('pitc_ml_n_m_15_19');
            $table->integer('pitc_ml_n_m_20_24');
            $table->integer('pitc_ml_n_m_25_19');
            $table->integer('pitc_ml_n_m_30_34');
            $table->integer('pitc_ml_n_m_35_39');
            $table->integer('pitc_ml_n_m_40_49');
            $table->integer('pitc_ml_n_m_abv_50');
            $table->integer('pitc_ml_n_m_age_unk');

            $table->integer('pitc_ml_p_f_15_19');
            $table->integer('pitc_ml_p_f_20_24');
            $table->integer('pitc_ml_p_f_25_19');
            $table->integer('pitc_ml_p_f_30_34');
            $table->integer('pitc_ml_p_f_35_39');
            $table->integer('pitc_ml_p_f_40_49');
            $table->integer('pitc_ml_p_f_abv_50');
            $table->integer('pitc_ml_p_f_age_unk');

            $table->integer('pitc_ml_p_m_15_19');
            $table->integer('pitc_ml_p_m_20_24');
            $table->integer('pitc_ml_p_m_25_19');
            $table->integer('pitc_ml_p_m_30_34');
            $table->integer('pitc_ml_p_m_35_39');
            $table->integer('pitc_ml_p_m_40_49');
            $table->integer('pitc_ml_p_m_abv_50');
            $table->integer('pitc_ml_p_m_age_unk');

            //cvialian Data Variables
            $table->integer('pitc_cv_n_f_less_1');
            $table->integer('pitc_cv_n_f_1_4');
            $table->integer('pitc_cv_n_f_5_9');
            $table->integer('pitc_cv_n_f_10_14');
            $table->integer('pitc_cv_n_f_15_19');
            $table->integer('pitc_cv_n_f_20_24');
            $table->integer('pitc_cv_n_f_25_19');
            $table->integer('pitc_cv_n_f_30_34');
            $table->integer('pitc_cv_n_f_35_39');
            $table->integer('pitc_cv_n_f_40_49');
            $table->integer('pitc_cv_n_f_abv_50');
            $table->integer('pitc_cv_n_f_age_unk');

            $table->integer('pitc_cv_n_m_less_1');
            $table->integer('pitc_cv_n_m_1_4');
            $table->integer('pitc_cv_n_m_5_9');
            $table->integer('pitc_cv_n_m_10_14');
            $table->integer('pitc_cv_n_m_15_19');
            $table->integer('pitc_cv_n_m_20_24');
            $table->integer('pitc_cv_n_m_25_19');
            $table->integer('pitc_cv_n_m_30_34');
            $table->integer('pitc_cv_n_m_35_39');
            $table->integer('pitc_cv_n_m_40_49');
            $table->integer('pitc_cv_n_m_abv_50');
            $table->integer('pitc_cv_n_m_age_unk');

            $table->integer('pitc_cv_p_f_less_1');
            $table->integer('pitc_cv_p_f_1_4');
            $table->integer('pitc_cv_p_f_5_9');
            $table->integer('pitc_cv_p_f_10_14');
            $table->integer('pitc_cv_p_f_15_19');
            $table->integer('pitc_cv_p_f_20_24');
            $table->integer('pitc_cv_p_f_25_19');
            $table->integer('pitc_cv_p_f_30_34');
            $table->integer('pitc_cv_p_f_35_39');
            $table->integer('pitc_cv_p_f_40_49');
            $table->integer('pitc_cv_p_f_abv_50');
            $table->integer('pitc_cv_p_f_age_unk');

            $table->integer('pitc_cv_p_m_less_1');
            $table->integer('pitc_cv_p_m_1_4');
            $table->integer('pitc_cv_p_m_5_9');
            $table->integer('pitc_cv_p_m_10_14');
            $table->integer('pitc_cv_p_m_15_19');
            $table->integer('pitc_cv_p_m_20_24');
            $table->integer('pitc_cv_p_m_25_19');
            $table->integer('pitc_cv_p_m_30_34');
            $table->integer('pitc_cv_p_m_35_39');
            $table->integer('pitc_cv_p_m_40_49');
            $table->integer('pitc_cv_p_m_abv_50'); 
            $table->integer('pitc_cv_p_m_age_unk');           

           
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
        Schema::dropIfExists('hts_pitc_inpatients');
    }
}
