<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hts_Facility;
use App\ReportLog;
use App\HtsPitcInpatient;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports =  ReportLog::orderBy('id','asc')->paginate(5);       
        return View('Report.index')->with('reports',$reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
            // $categories = MainCategory::all();
            // $subcategories = SubCategory::all();
            // $districts = array(
            //     'Lilongwe', 'Nsanje','Mzuzu', 'Chitipa', 'Kasungu', 'Balaka', 'Mchinji', 'Zomba', 'Nkhatabay','Blantyre', 'Ntcheu',
            //     'Thyolo', 'Mwanza', 'Neno', 'Karonga','Dedza', 'Mulanje', 'Chiladzulo', 'Dowa', 'Rumphi','Machinga','Mangochi'
            //     ,'Salima'
            // );
            return View ("Report.create");
            // ->with("categories", $categories)->with("subcategories", $subcategories)->with("districts",$districts);
    } 

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        //save report log
        $log = new ReportLog();
        $log->unit_id = $request->input('unit_id');
        $log->site_id = $request->input('site_id');
        $log->team_id = $request->input('team_id');
        $log->lead_id = $request->input('lead_id');
        // $log->month = $request->input('year_month');
        // $log->year = $request->input('year_month');
        $log->month = "April";
        $log->year = "2019";
        $log->quarter = $request->input('quarter');     
        $log->save();  
        
        //last inserted report id
        $report_id = $log->id;

        //HTS Facility Data
        $hts_facility = new  Hts_Facility(); 
        $hts_facility->report_id =  $report_id;
        $hts_facility->hts_tot_ml_m = $request->input('hts_tot_mil_male');
        $hts_facility->hts_tot_cv_m = $request->input('hts_tot_civ_male');
        $hts_facility->hts_tot_unk_m = $request->input('hts_tot_unk_male');
        $hts_facility->hts_tot_ml_f_non_preg = $request->input('hts_tot_mil_female_non_preg');	 
        $hts_facility->hts_tot_cv_f_non_preg = $request->input('hts_tot_civ_female_non_preg');
        $hts_facility->hts_tot_unk_f_non_preg = $request->input('hts_tot_unk_female_non_preg');
        $hts_facility->hts_tot_ml_f_preg  = $request->input('hts_tot_mil_female_preg');
        $hts_facility->hts_tot_cv_f_preg = $request->input('hts_tot_civ_female_preg');
        $hts_facility->hts_tot_unk_f_preg = $request->input('hts_tot_unk_female_preg');
        $hts_facility->hts_tot_ml_pos = $request->input('hts_tot_mil_pos');
        $hts_facility->hts_tot_cv_pos = $request->input('hts_tot_civ_pos');
        $hts_facility->hts_tot_unk_pos = $request->input('hts_tot_unk_pos');
        $hts_facility->save();

        // HTS PITC DATA MILITARY
       $hts_pit = new HtsPitcInpatient();
       $hts_pit->report_id  =  $report_id;
       $hts_pit->pitc_ml_n_f_15_19 = $request->input('hts_mil_neg_female_15_to_19');
       $hts_pit->pitc_ml_n_f_20_24 = $request->input('hts_mil_neg_female_20_to_24');
       $hts_pit->pitc_ml_n_f_25_29	= $request->input('hts_mil_neg_female_25_to_29');
       $hts_pit->pitc_ml_n_f_30_34	=  $request->input('hts_mil_neg_female_30_to_34');
       $hts_pit->pitc_ml_n_f_35_39	= $request->input('hts_mil_neg_female_35_to_39');
       $hts_pit->pitc_ml_n_f_40_44	= $request->input('hts_mil_neg_female_40_to_44');
       $hts_pit->pitc_ml_n_f_45_49	= $request->input('hts_mil_neg_female_45_to_49');
       $hts_pit->pitc_ml_n_f_abv_50	= $request->input('hts_mil_neg_female_above_50'); 
       $hts_pit->pitc_ml_n_f_age_unk = $request->input('hts_mil_neg_female_age_unk');


       $hts_pit->pitc_ml_p_f_15_19	= $request->input('hts_mil_pos_female_15_to_19');
       $hts_pit->pitc_ml_p_f_20_24	= $request->input('hts_mil_pos_female_20_to_24');
       $hts_pit->pitc_ml_p_f_25_29	= $request->input('hts_mil_pos_female_25_to_29');
       $hts_pit->pitc_ml_p_f_30_34	= $request->input('hts_mil_pos_female_30_to_34');
       $hts_pit->pitc_ml_p_f_35_39	= $request->input('hts_mil_pos_female_35_to_39');
       $hts_pit->pitc_ml_p_f_40_44	= $request->input('hts_mil_pos_female_40_to_44');
       $hts_pit->pitc_ml_p_f_45_49	= $request->input('hts_mil_pos_female_45_to_49');
       $hts_pit->pitc_ml_p_f_abv_50	 = $request->input('hts_mil_pos_female_above_50');
       $hts_pit->pitc_ml_p_f_age_unk = $request->input('hts_mil_pos_female_age_unk');;
       
       $hts_pit->pitc_ml_n_m_15_19	= $request->input('hts_mil_neg_male_15_to_19');
       $hts_pit->pitc_ml_n_m_20_24	= $request->input('hts_mil_neg_male_20_to_24');
       $hts_pit->pitc_ml_n_m_25_29	= $request->input('hts_mil_neg_female_25_to_29');
       $hts_pit->pitc_ml_n_m_30_34	= $request->input('hts_mil_neg_male_30_to_34');
       $hts_pit->pitc_ml_n_m_35_39	= $request->input('hts_mil_neg_male_35_to_39');
       $hts_pit->pitc_ml_n_m_40_44	=  $request->input('hts_mil_neg_male_40_to_44');
       $hts_pit->pitc_ml_n_m_45_49	=  $request->input('hts_mil_neg_male_45_to_49');
       $hts_pit->pitc_ml_n_m_abv_50	=  $request->input('hts_mil_neg_male_above_50'); 
       $hts_pit->pitc_ml_n_m_age_unk = $request->input('hts_mil_neg_male_age_unk');	
      

       $hts_pit->pitc_ml_p_m_15_19	= $request->input('hts_mil_pos_male_15_to_19');
       $hts_pit->pitc_ml_p_m_20_24	= $request->input('hts_mil_pos_male_20_to_24');
       $hts_pit->pitc_ml_p_m_25_29	= $request->input('hts_mil_pos_female_25_to_29');
       $hts_pit->pitc_ml_p_m_30_34	= $request->input('hts_mil_pos_male_30_to_34');
       $hts_pit->pitc_ml_p_m_35_39	= $request->input('hts_mil_pos_male_35_to_39');
       $hts_pit->pitc_ml_p_m_40_44	=  $request->input('hts_mil_pos_male_40_to_44');
       $hts_pit->pitc_ml_p_m_45_49	=  $request->input('hts_mil_pos_male_45_to_49');
       $hts_pit->pitc_ml_p_m_abv_50	=  $request->input('hts_mil_pos_male_above_50'); 
       $hts_pit->pitc_ml_p_m_age_unk = $request->input('hts_mil_pos_male_age_unk');

    

       //Save HTS PITC CIvilian Data
       $hts_pit->pitc_cv_n_f_less_1	= $request->input('hts_civ_neg_female_less_1');
       $hts_pit->pitc_cv_n_f_1_4 = $request->input('hts_civ_neg_female_1_to_4');
       $hts_pit->pitc_cv_n_f_5_9 = $request->input('hts_civ_neg_female_5_to_9');
       $hts_pit->pitc_cv_n_f_10_14	= $request->input('hts_civ_neg_female_10_to_14');
       $hts_pit->pitc_cv_n_f_15_19 = $request->input('hts_civ_neg_female_15_to_19');
       $hts_pit->pitc_cv_n_f_20_24 = $request->input('hts_civ_neg_female_20_to_24');
       $hts_pit->pitc_cv_n_f_25_29	= $request->input('hts_civ_neg_female_25_to_29');
       $hts_pit->pitc_cv_n_f_30_34	=  $request->input('hts_civ_neg_female_30_to_34');
       $hts_pit->pitc_cv_n_f_35_39	= $request->input('hts_civ_neg_female_35_to_39');
       $hts_pit->pitc_cv_n_f_40_44	= $request->input('hts_civ_neg_female_40_to_44');
       $hts_pit->pitc_cv_n_f_45_49	= $request->input('hts_civ_neg_female_45_to_49');
       $hts_pit->pitc_cv_n_f_abv_50	= $request->input('hts_civ_neg_female_above_50'); 
       $hts_pit->pitc_cv_n_f_age_unk = $request->input('hts_civ_neg_female_age_unk');

      
       $hts_pit->pitc_cv_p_f_less_1	 = $request->input('hts_civ_pos_female_less_1');
       $hts_pit->pitc_cv_p_f_1_4	=  $request->input('hts_civ_pos_female_1_to_4');
       $hts_pit->pitc_cv_p_f_5_9	=  $request->input('hts_civ_pos_female_5_to_9');
       $hts_pit->pitc_cv_p_f_10_14	=  $request->input('hts_civ_pos_female_10_to_14');
       $hts_pit->pitc_cv_p_f_15_19	= $request->input('hts_civ_pos_female_15_to_19');
       $hts_pit->pitc_cv_p_f_20_24	= $request->input('hts_civ_pos_female_20_to_24');
       $hts_pit->pitc_cv_p_f_25_29	= $request->input('hts_civ_pos_female_25_to_29');
       $hts_pit->pitc_cv_p_f_30_34	= $request->input('hts_civ_pos_female_30_to_34');
       $hts_pit->pitc_cv_p_f_35_39	= $request->input('hts_civ_pos_female_35_to_39');
       $hts_pit->pitc_cv_p_f_40_44	= $request->input('hts_civ_pos_female_40_to_44');
       $hts_pit->pitc_cv_p_f_45_49	= $request->input('hts_civ_pos_female_45_to_49');
       $hts_pit->pitc_cv_p_f_abv_50	 = $request->input('hts_civ_pos_female_above_50');
       $hts_pit->pitc_cv_p_f_age_unk = $request->input('hts_civ_pos_female_age_unk');;


      
       $hts_pit->pitc_cv_n_m_less_1	= $request->input('hts_civ_neg_male_less_1');
       $hts_pit->pitc_cv_n_m_1_4	= $request->input('hts_civ_neg_male_1_to_4');
       $hts_pit->pitc_cv_n_m_5_9	= $request->input('hts_civ_neg_male_5_to_9');
       $hts_pit->pitc_cv_n_m_10_14	= $request->input('hts_civ_neg_male_10_to_14');
       $hts_pit->pitc_cv_n_m_15_19	= $request->input('hts_civ_neg_male_15_to_19');
       $hts_pit->pitc_cv_n_m_20_24	= $request->input('hts_civ_neg_male_20_to_24');
       $hts_pit->pitc_cv_n_m_25_29	= $request->input('hts_civ_neg_female_25_to_29');
       $hts_pit->pitc_cv_n_m_30_34	= $request->input('hts_civ_neg_male_30_to_34');
       $hts_pit->pitc_cv_n_m_35_39	= $request->input('hts_civ_neg_male_35_to_39');
       $hts_pit->pitc_cv_n_m_40_44	=  $request->input('hts_civ_neg_male_40_to_44');
       $hts_pit->pitc_cv_n_m_45_49	=  $request->input('hts_civ_neg_male_45_to_49');
       $hts_pit->pitc_cv_n_m_abv_50	=  $request->input('hts_civ_neg_male_above_50'); 
       $hts_pit->pitc_cv_n_m_age_unk = $request->input('hts_civ_neg_male_age_unk');

   


       $hts_pit->pitc_cv_p_m_less_1	= $request->input('hts_civ_pos_male_less_1');
       $hts_pit->pitc_cv_p_m_1_4	= $request->input('hts_civ_pos_male_1_to_4');
       $hts_pit->pitc_cv_p_m_5_9	= $request->input('hts_civ_pos_male_5_to_9');
       $hts_pit->pitc_cv_p_m_10_14	= $request->input('hts_civ_pos_male_10_to_14');
       $hts_pit->pitc_cv_p_m_15_19	= $request->input('hts_civ_pos_male_15_to_19');
       $hts_pit->pitc_cv_p_m_20_24	= $request->input('hts_civ_pos_male_20_to_24');
       $hts_pit->pitc_cv_p_m_25_29	= $request->input('hts_civ_pos_female_25_to_29');
       $hts_pit->pitc_cv_p_m_30_34	= $request->input('hts_civ_pos_male_30_to_34');
       $hts_pit->pitc_cv_p_m_35_39	= $request->input('hts_civ_pos_male_35_to_39');
       $hts_pit->pitc_cv_p_m_40_44	=  $request->input('hts_civ_pos_male_40_to_44');
       $hts_pit->pitc_cv_p_m_45_49	=  $request->input('hts_civ_pos_male_45_to_49');
       $hts_pit->pitc_cv_p_m_abv_50	=  $request->input('hts_civ_pos_male_above_50'); 
       $hts_pit->pitc_cv_p_m_age_unk = $request->input('hts_civ_pos_male_age_unk');

       $hts_pit->save();

      return redirect('/report')->with('success','Created Successfully');      
    }   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
         $report = ReportLog::find($id);
         $htsfacility = Hts_Facility::where('report_id', $id)->first();
         $htspitc = HtsPitcInpatient::where('report_id', $id)->first();        
         return View('report.show')->with('hts_pitc',$htspitc)->with('report',$report)->with('hts_fac', $htsfacility);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {         
        $htsfacility = Hts_Facility::where('report_id', $id)->first();
        $htspitc = HtsPitcInpatient::where('report_id', $id)->first();        
        return View('report.edit')->with('hts_pitc',$htspitc)->with('hts_fac', $htsfacility);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    
    {

        return redirect('/report')->with('success','Report updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $log = ReportLog::find($id);
         $log->delete();
         $hts_facility = Hts_Facility::firstOrFail()->where('report_id',$id);
         $hts_facility->delete();
         $hts_pit = HtsPitcInpatient::firstOrFail()->where('report_id',$id);
         $hts_pit->delete();
         return redirect('/report')->with('success','Report Deleted Successfully');
    }
}
