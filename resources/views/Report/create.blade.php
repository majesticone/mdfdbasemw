@extends('layouts.app')
    @section('content')
        {!! Form::open(['action' => 'ReportController@store', 'method'=>'POST']) !!}
           <div id ="one">
           <fieldset id="fieldset"><legend>CREATE NEW REPORT</legend>
                <div class ="form-group">
                    {{Form::label('unit', 'Reporting Unit')}}
                    <select name = "unit_id" class ="form-control">
                    <option value = "">--Select-Reporting-Unit--</option>    
                    <option value = "m&E">M&E</option>               
                    </select>
                </div>
                <div class ="form-group">
                    {{Form::label('site', 'Site Name')}}
                    <select name = "site_id" class ="form-control">
                        <option value = "">--Select-Site--</option>                          
                        <option value = "Kauma">Kauma</option>  
                        <option value = "Mbale">Mbale</option> 
                        <option value = "Mzava">Mzava</option> 
                        <option value = "Chiwanya">Chiwanya</option>                
                    </select>
                </div>
                <div class ="form-group">
                {{Form::label('year_month', 'Month & Year')}}
                {{Form::text('yr_mo', 'Jun-2019', ['class' => 'form-control', 'placeholder' => 'Year & Month'])}}
                </div>  
                <div class ="form-group">
                    {{Form::label('quarter', 'Reporting Quarter')}}
                    <select name = "quarter" class ="form-control">
                    <option value = "">--Select-Reporting-Quarter--</option>    
                    <option value = "1">1</option>  
                    <option value = "2">2</option> 
                    <option value = "3">3</option> 
                    <option value = "4">4</option> 
                    </select>
                </div>
                <div class ="form-group">
                {{Form::label('team', 'Collection Team')}}
                <select name = "team_id" class ="form-control">
                    <option value = "">--Select-Team--</option>
                    <option value = "1">Team 1</option>
                    <option value = "1">Team 2</option>
                    </select>
                </div>    
                <div class ="form-group">
                {{Form::label('lead', 'Team Lead')}}
                <select name = "lead_id" class ="form-control">
                    <option value = "">--Select-Team-Lead--</option>
                    <option value = "1">Paul</option>
                    <option value = "2">Gonjetso</option>
                    </select>
                </div>  
                 
                </table>
            <table id="tcontrols">
             <tr>
                <td> {{Form::button('Next', ['class'=>'btn btn-primary','id'=>'to_two'])}}</td>
            </tr>             
        </table>                
            </fieldset>
        </div>
        <div id ="two">
        <fieldset id="fieldset"><legend>HTS FACILITY</legend> 
        <table id ="tdata">  
            <tr>
            <td id ="no_border"></td><td>Millitary</td><td>Civilian</td><td>Unknown</td>
            </tr>
            <tr>
                <td>Total Male</td>
                <td>{{Form::text('hts_tot_mil_male', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_civ_male', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_unk_male', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                
            </tr>
            <tr>
                <td>Total Female (Non Preg)</td>
                <td>{{Form::text('hts_tot_mil_female_non_preg', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_civ_female_non_preg', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_unk_female_non_preg', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                
            </tr>
            <tr>
                <td>Total Female (Preg)</td>
                <td>{{Form::text('hts_tot_mil_female_preg', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_civ_female_preg', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_unk_female_preg', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                
            </tr>
            <tr>
                <td>Total New Positives</td>
                <td>{{Form::text('hts_tot_mil_pos', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_civ_pos', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_tot_unk_pos', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>           
        </table>
            <table id="tcontrols">
             <tr>
                <td>{{Form::button('Back', ['class'=>'btn btn-primary','id'=>'from_one'])}}</td>
                <td></td>                
                <td>{{Form::button('Next', ['class'=>'btn btn-primary','id'=>'to_three'])}}</td>
            </tr>             
        </table>  
        
        </fieldset>
        </div>       
       
        <div id ="three">
        <fieldset id="fieldset"><legend>HTS-TST PITC - MILITARY</legend> 
        <table id ="tdata">  
            <tr>
                <td rowspan="3">Age</td><td colspan ="4" >Military</td>
            </tr> 
            <tr>
                <td colspan ="2">Negative</td><td colspan ="4">Positive</td>
            </tr>
            <tr>
                <td>Female</td><td>Male</td><td>Female</td><td>Male</td>
            </tr>
            <tr>
                <td>15 -19</td>
                <td>{{Form::text('hts_mil_neg_female_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>20 - 24</td>
                <td>{{Form::text('hts_mil_neg_female_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>25 -29</td>
                <td>{{Form::text('hts_mil_neg_female_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>30 - 34</td>
                <td>{{Form::text('hts_mil_neg_female_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>35 - 39 </td>
                <td>{{Form::text('hts_mil_neg_female_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>40 - 44</td>
                <td>{{Form::text('hts_mil_neg_female_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>45 - 49 </td>
                <td>{{Form::text('hts_mil_neg_female_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>50 +</td>
                <td>{{Form::text('hts_mil_neg_female_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
             <tr>
                <td>Unkown Age</td>
                <td>{{Form::text('hts_mil_neg_female_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_neg_male_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_female_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_mil_pos_male_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>       
                
        </table>                
            <table id="tcontrols">
             <tr>
                <td>{{Form::button('Back', ['class'=>'btn btn-primary','id'=>'from_two'])}}</td>
                <td></td>                
                <td>{{Form::button('Next', ['class'=>'btn btn-primary','id'=>'to_four'])}}</td>
            </tr>             
        </table>  
            </fieldset>
        </div>
        <div id ="four">
        <fieldset id="fieldset"><legend>HTS-TST PITC - CIVILIAN</legend> 
        <table id ="tdata">  
            <tr>
                <td rowspan="3">Age</td><td colspan ="4">CIVILIAN</td>
            </tr> 
            <tr>
                <td colspan ="2">Negative</td><td colspan ="4">Positive</td>
            </tr>
            <tr>
                <td>Female</td><td>Male</td><td>Female</td><td>Male</td>
            </tr>
            <tr>
                <td>< 1</td>
                <td>{{Form::text('hts_civ_neg_female_less_1', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_less_1', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_less_1', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_less_1', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>1 - 4</td>
                <td>{{Form::text('hts_civ_neg_female_1_to_4', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_1_to_4', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_1_to_4', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_1_to_4', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>5 - 9</td>
                <td>{{Form::text('hts_civ_neg_female_5_to_9', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_5_to_9', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_5_to_9', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_5_to_9', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>10 - 14</td>
                <td>{{Form::text('hts_civ_neg_female_10_to_14', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_10_to_14', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_10_to_14', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_10_to_14', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>15 -19</td>
                <td>{{Form::text('hts_civ_neg_female_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_15_to_19', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>20 - 24</td>
                <td>{{Form::text('hts_civ_neg_female_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_20_to_24', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>25 -29</td>
                <td>{{Form::text('hts_civ_neg_female_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_25_to_29', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>30 - 34</td>
                <td>{{Form::text('hts_civ_neg_female_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_30_to_34', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>35 - 39 </td>
                <td>{{Form::text('hts_civ_neg_female_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_35_to_39', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>40 - 44</td>
                <td>{{Form::text('hts_civ_neg_female_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_40_to_44', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>45 - 49 </td>
                <td>{{Form::text('hts_civ_neg_female_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_45_to_49', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
            <tr>
                <td>50 +</td>
                <td>{{Form::text('hts_civ_neg_female_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_above_50', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>
             <tr>
                <td>Unkown Age</td>
                <td>{{Form::text('hts_civ_neg_female_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_neg_male_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_female_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
                <td>{{Form::text('hts_civ_pos_male_age_unk', '', ['class' => 'form-control', 'placeholder' => 'Enter Here'])}}</td>
            </tr>       
        </table>
        <table id="tcontrols">
             <tr>
                <td>{{Form::button('Back', ['class'=>'btn btn-primary','id'=>'from_three'])}}</td>
                <td></td>
                <td>{{Form::submit('Submit', ['class'=>'btn btn-primary','id' => 'finish'])}}</td>
            </tr>             
        </table>     
        </fieldset>
        </div>  

        {!! Form::close() !!}
        <script>
			$(document).ready(
                function(){
                    $("#two").hide();
                    $("#three").hide();
                    $("#four").hide();
                    $(".finish").hide();
                    $("#to_two").click(function(){
                        $("#two").show();
                        $("#one").hide();
                        $("#three").hide();
                        $("#four").hide();                       
                        $(".finish").hide();
                    });
                    $("#to_three").click(function(){
                        $("#one").hide();                       
                        $("#four").hide();
                        $("#two").hide();
                        $("#three").show();                      
                        $(".finish").hide();
                    });
                    $("#to_four").click(function(){
                        $("#one").hide();
                        $("#three").hide();                      
                        $("#two").hide();
                        $("#four").show();
                        $(".finish").hide();
                    });
                    $("#to_five").click(function(){
                        $("#one").hide();
                        $("#three").hide();                      
                        $("#two").hide();
                        $("#four").hide();
                        $(".finish").hide();
                    });
                    $("#to_six").click(function(){
                        $("#one").hide();
                        $("#three").hide();                      
                        $("#two").hide();
                        $("#four").hide();
                        $("#five").hide();
                        $("#six").show();
                        $(".finish").show();
                    });
                    $("#from_one").click(function(){
                        $("#one").show();
                        $("#three").hide();
                        $("#four").hide();
                        $("#two").hide();
                        $("#five").hide();
                        $("#six").hide();
                    });
                    $("#from_two").click(function(){
                        $("#one").hide();
                        $("#three").hide();
                        $("#four").hide();
                        $("#two").show();
                        $("#five").hide();
                        $("#six").hide();
                    });
                    $("#from_three").click(function(){
                        $("#one").hide();
                        $("#three").show();
                        $("#four").hide();
                        $("#two").hide();
                        $("#five").hide();
                        $("#six").hide();
                    });
                 
                }                
            );
		</script>  
    @endsection