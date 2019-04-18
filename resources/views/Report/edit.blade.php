
@extends('layouts.app')
    @section('content')
	{!! Form::open(['action' => ['ReportController@update' , $hts_fac->report_id ] , 'method'=>'POST']) !!}
    <h3 >Edit Report Details </h3> 
<div class="ui-alt-icon">   
    <a href="/report/create" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">New</a>   
</div>
<table data-role="table"  id="table-custom-2"  class="ui-body-d ui-shadow table-stripe ui-responsive">
    <thead>
          <tr class="ui-bar-d">
                <th data-priority="1">Report No : {{$report->id}}</th>
                <th data-priority="1">Site Name : {{$report->site_id}}</th>
                <th data-priority="2">Unit : {{$report->unit_id}}</th>
                <th data-priority="2">Team : {{$report->team_id}} </th> 
                <th data-priority="2">Lead : {{$report->lead_id}}</th>
        </tr>
        <tr>                
                <th data-priority="2">Quarter : {{$report->quarter}}</th>
                <th data-priority="2">Month : {{$report->month}}</th>
                <th data-priority="2">Year :: {{$report->year}} </th>
                <th data-priority="3">Collected on : {{$report->created_at}}</th>
                <th data-priority="4">Modified On : {{$report->updated_at}}</th>
        </tr>               
    </tr> 
    </thead>  
    </table> 
    <div class ="form-group">
                    {{Form::label('section', 'Quick Edit Sections')}}
                    <select name = "section" class ="form-control" id ="section">
                        <option value = "">--Select-Edit Sections-Section--</option>    
                        <option value = "htstot">HTS Facility Based</option>  
                        <option value = "htspitc">HTS TST PITC (Inpatient Section)</option>               
                    </select>
     </div>
     <div id ="one">
        <table id ="sectdata">  
            <tr>
            <td id ="no_border"></td><td>Millitary</td><td>Civilian</td><td>Unknown</td>
            </tr>
            <tr>
                <td>Total Male</td>
                <td> {{Form::text('hts_tot_mil_male',$hts_fac->hts_tot_ml_m, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_civ_male',$hts_fac->hts_tot_cv_m, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_unk_male',$hts_fac->hts_tot_unk_m, ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>Total Female (Non Preg)</td>
                <td> {{Form::text('hts_tot_mil_female_non_preg',$hts_fac->hts_tot_ml_f_non_preg, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_civ_female_non_preg',$hts_fac->hts_tot_cv_f_non_preg, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_unk_female_non_preg',$hts_fac->hts_tot_unk_f_non_preg, ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>Total Female (Preg)</td>
                <td> {{Form::text('hts_tot_mil_female_preg',$hts_fac->hts_tot_ml_f_preg, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_civ_female_preg',$hts_fac->hts_tot_cv_f_preg, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_unk_female_preg',$hts_fac->hts_tot_unk_f_preg, ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>Total New Positives</td>
                <td> {{Form::text('hts_tot_mil_pos',$hts_fac->hts_tot_ml_pos, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_civ_pos',$hts_fac->hts_tot_cv_pos, ['class' => 'form-control'])}}</td>
                <td> {{Form::text('hts_tot_unk_pos',$hts_fac->hts_tot_unk_pos, ['class' => 'form-control'])}}</td>
            </tr>           
        </table>
        <table id="tcontrols">
             <tr>
                <td>{{Form::button('Next', ['class'=>'btn btn-primary','id'=>'to_two'])}}</td>
            </tr>             
        </table>  
        </div>  

        <br/>
        <div id ="two" >
        <table id ="pitcdata">  
            <tr>
            <td  rowspan="3">Age</td><td colspan ="4" >Military</td> <td colspan ="4">Civilian</td>
            </tr> 
            <tr>
            <td colspan ="4">Negative</td><td colspan ="4">Positive</td>
            </tr>
            <tr>
            <td>Female</td><td>Male</td><td>Female</td><td>Male</td><td>Female</td><td>Male</td><td>Female</td><td>Male</td>
            </tr>
            <tr>
                <td>< 1</td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td>{{Form::text('hts_civ_neg_female_less_1',$hts_pitc->pitc_cv_n_f_less_1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_less_1',$hts_pitc->pitc_cv_n_m_less_1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_less_1',$hts_pitc->pitc_cv_p_f_less_1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_less_1',$hts_pitc->pitc_cv_p_m_less_1, ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <td>1 - 4</td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td>{{Form::text('hts_civ_neg_female_1_4',$hts_pitc->pitc_cv_n_f_1_4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_1_4',$hts_pitc->pitc_cv_n_m_1_4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_1_4',$hts_pitc->pitc_cv_p_f_1_4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_1_4',$hts_pitc->pitc_cv_p_m_1_4, ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <td>5 - 9</td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td>{{Form::text('hts_civ_neg_female_5_to_9',$hts_pitc->pitc_cv_n_f_5_9 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_5_to_9',$hts_pitc->pitc_cv_n_m_5_9 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_5_to_9',$hts_pitc->pitc_cv_p_f_5_9 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_5_to_9',$hts_pitc->pitc_cv_p_m_5_9 , ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <td>10 - 14</td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td>{{Form::text('hts_civ_neg_female_10_to_14',$hts_pitc->pitc_cv_n_f_10_14 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_10_to_14',$hts_pitc->pitc_cv_n_m_10_14 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_10_to_14',$hts_pitc->pitc_cv_p_f_10_14 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_10_to_14',$hts_pitc->pitc_cv_p_m_10_14 , ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <td>15 -19</td>
                <td>{{Form::text('hts_mil_neg_female_15_to_19', $hts_pitc->pitc_ml_n_f_15_19 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_15_to_19', $hts_pitc->pitc_ml_n_m_15_19 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_15_to_19', $hts_pitc->pitc_ml_n_f_15_19 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_15_to_19',$hts_pitc->pitc_ml_p_m_15_19 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_15_to_19',$hts_pitc->pitc_cv_n_f_15_19 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_15_to_19',$hts_pitc->pitc_cv_n_m_15_19 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_15_to_19',$hts_pitc->pitc_cv_p_f_15_19 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_15_to_19',$hts_pitc->pitc_cv_p_m_15_19 , ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>20 - 24</td>
                <td>{{Form::text('hts_mil_neg_female_20_to_24',$hts_pitc->pitc_ml_n_f_20_24 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_20_to_24',$hts_pitc->pitc_ml_n_m_20_24 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_20_to_24',$hts_pitc->pitc_ml_n_f_20_24 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_20_to_24',$hts_pitc->pitc_ml_p_m_20_24 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_20_to_24',$hts_pitc->pitc_cv_n_f_20_24 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_20_to_24',$hts_pitc->pitc_cv_n_m_20_24 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_20_to_24',$hts_pitc->pitc_cv_p_f_20_24 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_20_to_24',$hts_pitc->pitc_cv_p_m_20_24 , ['class' => 'form-control'])}}</td>               
            </tr>
            <tr>
                <td>25 -29</td>
                <td>{{Form::text('hts_mil_neg_female_25_to_29',$hts_pitc->pitc_ml_n_f_25_29 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_25_to_29',$hts_pitc->pitc_ml_n_m_25_29 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_25_to_29',$hts_pitc->pitc_ml_n_f_25_29 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_25_to_29',$hts_pitc->pitc_ml_p_m_25_29 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_25_to_29',$hts_pitc->pitc_cv_n_f_25_29 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_25_to_29',$hts_pitc->pitc_cv_n_m_25_29 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_25_to_29',$hts_pitc->pitc_cv_p_f_25_29 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_25_to_29',$hts_pitc->pitc_cv_p_m_25_29 , ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>30 - 34</td>
                <td>{{Form::text('hts_mil_neg_female_30_to_34',$hts_pitc->pitc_ml_n_f_30_34 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_30_to_34',$hts_pitc->pitc_ml_n_m_30_34 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_30_to_34',$hts_pitc->pitc_ml_n_f_30_34 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_30_to_34',$hts_pitc->pitc_ml_p_m_30_34 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_30_to_34',$hts_pitc->pitc_cv_n_f_30_34 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_30_to_34',$hts_pitc->pitc_cv_n_m_30_34 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_30_to_34',$hts_pitc->pitc_cv_p_f_30_34 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_30_to_34',$hts_pitc->pitc_cv_p_m_30_34 , ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>35 - 39 </td>
                <td>{{Form::text('hts_mil_neg_female_35_to_39',$hts_pitc->pitc_ml_n_f_35_39 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_35_to_39',$hts_pitc->pitc_ml_n_m_35_39 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_35_to_39',$hts_pitc->pitc_ml_n_f_35_39 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_35_to_39',$hts_pitc->pitc_ml_p_m_35_39 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_35_to_39',$hts_pitc->pitc_cv_n_f_35_39 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_35_to_39',$hts_pitc->pitc_cv_n_m_35_39 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_35_to_39',$hts_pitc->pitc_cv_p_f_35_39 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_35_to_39',$hts_pitc->pitc_cv_p_m_35_39 , ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>40 - 44</td>
                <td>{{Form::text('hts_mil_neg_female_40_to_44',$hts_pitc->pitc_ml_n_f_40_44 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_40_to_44',$hts_pitc->pitc_ml_n_m_40_44 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_40_to_44',$hts_pitc->pitc_ml_n_f_40_44 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_40_to_44',$hts_pitc->pitc_ml_p_m_40_44 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_40_to_44',$hts_pitc->pitc_cv_n_f_40_44 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_40_to_44',$hts_pitc->pitc_cv_n_m_40_44 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_40_to_44',$hts_pitc->pitc_cv_p_f_40_44 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_40_to_44',$hts_pitc->pitc_cv_p_m_40_44 , ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>45 - 49 </td>
                <td>{{Form::text('hts_mil_neg_female_45_to_49',$hts_pitc->pitc_ml_n_f_45_49 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_45_to_49',$hts_pitc->pitc_ml_n_m_45_49 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_45_to_49',$hts_pitc->pitc_ml_n_f_45_49 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_45_to_49',$hts_pitc->pitc_ml_p_m_45_49 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_45_to_49',$hts_pitc->pitc_cv_n_f_45_49 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_45_to_49',$hts_pitc->pitc_cv_n_m_45_49 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_45_to_49',$hts_pitc->pitc_cv_p_f_45_49 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_45_to_49',$hts_pitc->pitc_cv_p_m_45_49 , ['class' => 'form-control'])}}</td>                
            </tr>
            <tr>
                <td>50 +</td>
                <td>{{Form::text('hts_mil_neg_female_above_50',$hts_pitc->pitc_ml_n_f_abv_50 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_above_50',$hts_pitc->pitc_ml_n_m_abv_50 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_above_50',$hts_pitc->pitc_ml_n_f_abv_50 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_above_50',$hts_pitc->pitc_ml_p_m_abv_50 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_above_50',$hts_pitc->pitc_cv_n_f_abv_50 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_above_50',$hts_pitc->pitc_cv_n_m_abv_50 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_above_50',$hts_pitc->pitc_cv_p_f_abv_50 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_above_50',$hts_pitc->pitc_cv_p_m_abv_50 , ['class' => 'form-control'])}}</td>                
            </tr>
             <tr>
                <td>Unkown Age</td>
                <td>{{Form::text('hts_mil_neg_female_age_unk',$hts_pitc->pitc_ml_n_f_age_unk , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_age_unk',$hts_pitc->pitc_ml_n_m_age_unk , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_neg_female_age_unk',$hts_pitc->pitc_ml_n_f_age_unk , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_age_unk',$hts_pitc->pitc_ml_p_m_age_unk , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_female_age_unk',$hts_pitc->pitc_cv_n_f_age_unk , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_age_unk',$hts_pitc->pitc_cv_n_m_age_unk , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_age_unk',$hts_pitc->pitc_cv_p_f_age_unk , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_age_unk',$hts_pitc->pitc_cv_p_m_age_unk , ['class' => 'form-control'])}}</td>                
            </tr>       
        </table>  
        <table id="tcontrols">
             <tr>
                <td>{{Form::button('Back', ['class'=>'btn btn-primary','id'=>'from_one'])}}</td>
                <td></td>
                <td>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Update', ['class'=>'btn btn-primary','id'])}}
                </td>
            </tr>             
        </table>    
        </div>  
            
        {!! Form::close() !!}
         <script>
			$(function(){
                    $("#two").hide();                    
                     $(".finish").hide();
                    $("#to_two").click(function(){
                        $("#two").show();
                        $("#one").hide();                                             
                        $(".finish").show();
                    });                   
                    $("#from_one").click(function(){
                        $("#one").show();            
                        $("#two").hide(); 
                        $(".finish").hide();                       
                    });   
                    // $('#section').change(function(){
                    //     $('.sectors').hide();
                    //     $('#' + $(this).val()).show();

                    // });     
                 
            });
		</script>  
    @endsection
