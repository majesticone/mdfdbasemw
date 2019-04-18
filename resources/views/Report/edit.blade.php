
@extends('layouts.app')
    @section('content')
	{!! Form::open(['action' => ['ReportController@update' , $hts_fac->report_id ] , 'method'=>'POST']) !!}
    <h3 >Edit Report Details </h3> 
<div class="ui-alt-icon">   
    <a href="/report/create" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">New</a>   
</div>
     <div id ="one">
        <table id ="sectdata">  
            <tr>
            <td id ="no_border"></td><td>Millitary</td><td>Civilian</td><td>Unknown</td>
            </tr>
            <tr>
                <td>Total Male</td>
                <td>{{$hts_fac->hts_tot_ml_m }}</td>
                <td>{{$hts_fac->hts_tot_cv_m }}</td>
                <td>{{$hts_fac->hts_tot_unk_m }}</td>                
            </tr>
            <tr>
                <td>Total Female (Non Preg)</td>
                <td>{{$hts_fac->hts_tot_ml_f_non_preg }}</td>
                <td>{{$hts_fac->hts_tot_cv_f_non_preg }}</td>
                <td>{{$hts_fac->hts_tot_unk_f_non_preg }}</td>                
            </tr>
            <tr>
                <td>Total Female (Preg)</td>
                <td>{{$hts_fac->hts_tot_ml_f_preg }}</td>
                <td>{{$hts_fac->hts_tot_cv_f_preg }}</td>
                <td>{{$hts_fac->hts_tot_unk_f_preg }}</td>                
            </tr>
            <tr>
                <td>Total New Positives</td>
                <td>{{ $hts_fac->hts_tot_ml_pos }}</td>
                <td>{{ $hts_fac->hts_tot_cv_pos }}</td>
                <td>{{ $hts_fac->hts_tot_unk_pos }}</td>
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
                <td>{{ $hts_pitc->pitc_cv_n_f_less_1 }}</td>
                <td>{{ $hts_pitc->pitc_cv_n_m_less_1 }}</td>
                <td>{{ $hts_pitc->pitc_cv_p_f_less_1 }}</td>
                <td>{{ $hts_pitc->pitc_cv_p_m_less_1 }}</td>
            </tr>
            <tr>
                <td>1 - 4</td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td>{{ $hts_pitc->pitc_cv_n_f_1_4 }}</td>
                <td>{{ $hts_pitc->pitc_cv_n_m_1_4 }}</td>
                <td>{{ $hts_pitc->pitc_cv_p_f_1_4 }}</td>
                <td>{{ $hts_pitc->pitc_cv_p_m_1_4 }}</td>
            </tr>
            <tr>
                <td>5 - 9</td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td>{{$hts_pitc->pitc_cv_n_f_5_9}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_5_9}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_5_9}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_5_9}}</td>
            </tr>
            <tr>
                <td>10 - 14</td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td class='tdblack'></td><td class='tdblack'></td>
                <td>{{$hts_pitc->pitc_cv_n_f_10_14}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_10_14}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_10_14}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_10_14}}</td>
            </tr>
            <tr>
                <td>15 -19</td>
                <td>{{$hts_pitc->pitc_ml_n_f_15_19}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_15_19}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_15_19}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_15_19}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_15_19}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_15_19}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_15_19}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_15_19}}</td>                
            </tr>
            <tr>
                <td>20 - 24</td>
                <td>{{$hts_pitc->pitc_ml_n_f_20_24}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_20_24}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_20_24}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_20_24}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_20_24}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_20_24}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_20_24}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_20_24}}</td>               
            </tr>
            <tr>
                <td>25 -29</td>
                <td>{{$hts_pitc->pitc_ml_n_f_25_29}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_25_29}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_25_29}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_25_29}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_25_29}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_25_29}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_25_29}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_25_29}}</td>                
            </tr>
            <tr>
                <td>30 - 34</td>
                <td>{{$hts_pitc->pitc_ml_n_f_30_34}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_30_34}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_30_34}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_30_34}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_30_34}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_30_34}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_30_34}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_30_34}}</td>                
            </tr>
            <tr>
                <td>35 - 39 </td>
                <td>{{$hts_pitc->pitc_ml_n_f_35_39}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_35_39}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_35_39}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_35_39}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_35_39}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_35_39}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_35_39}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_35_39}}</td>                
            </tr>
            <tr>
                <td>40 - 44</td>
                <td>{{$hts_pitc->pitc_ml_n_f_40_44}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_40_44}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_40_44}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_40_44}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_40_44}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_40_44}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_40_44}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_40_44}}</td>                
            </tr>
            <tr>
                <td>45 - 49 </td>
                <td>{{$hts_pitc->pitc_ml_n_f_45_49}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m45_49}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_45_49}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_45_49}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_45_49}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_45_49}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_45_49}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_45_49}}</td>                
            </tr>
            <tr>
                <td>50 +</td>
                <td>{{$hts_pitc->pitc_ml_n_f_abv_50}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_abv_50}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_abv_50}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_abv_50}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_abv_50}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_abv_50}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_abv_50}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_abv_50}}</td>                
            </tr>
             <tr>
                <td>Unkown Age</td>
                <td>{{$hts_pitc->pitc_ml_n_f_age_unk}}</td>
                <td>{{$hts_pitc->pitc_ml_n_m_age_unk}}</td>
                <td>{{$hts_pitc->pitc_ml_n_f_age_unk}}</td>
                <td>{{$hts_pitc->pitc_ml_p_m_age_unk}}</td>
                <td>{{$hts_pitc->pitc_cv_n_f_age_unk}}</td>
                <td>{{$hts_pitc->pitc_cv_n_m_age_unk}}</td>
                <td>{{$hts_pitc->pitc_cv_p_f_age_unk}}</td>
                <td>{{$hts_pitc->pitc_cv_p_m_age_unk}}</td>                
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
                 
            });
		</script>  
    @endsection
