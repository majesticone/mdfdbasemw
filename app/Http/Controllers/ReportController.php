<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hts_Facility;
use App\Report_Log;

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
        $cus =  Hts_Facility::orderBy('id','asc')->paginate(5);       
        return View('Report.index')->with('cus',$cus);
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
        $hts_facility = new  Hts_Facility(); 
        //save report log
        $log = new Report_log();
        $log->unit_id = $request->input('unit_id');
        $log->team_id = $request->input('team_id');
        $log->lead_id = $request->input('lead_id');
        $log->month = $request->input('year_month');
        $log->year = $request->input('year_month');
        $log->quarter = $request->input('quarter');     
        $log->save();  

        //return redirect('/home');
        // $this->validate($request ,[
        //     'name' => 'required',
        //     'description' => 'required',
        //     'mainCatId' => 'required',
        //     'subCatId' => 'required',
        //     'description' => 'required',
        //     'district' => 'required',
        //     'location' => 'required',
        //     'address' => 'required',
        //     'mobile' => 'required',
        //     'directions' => 'required',
        //     'subscription' => 'required'
        // ]);  

        
    }   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $cus = Report::find($id);
        // return View('Report.show')->with('cus',$cus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //     $cus = Report::find($id);
        //     $categories = MainCategory::all();
        //     $subcategories = SubCategory::all();
        //     $districts = array(
        //         'Lilongwe', 'Nsanje','Mzuzu', 'Chitipa', 'Kasungu', 'Balaka', 'Mchinji', 'Zomba', 'Nkhatabay','Blantyre', 'Ntcheu',
        //         'Thyolo', 'Mwanza', 'Neno', 'Karonga','Dedza', 'Mulanje', 'Chiladzulo', 'Dowa', 'Rumphi','Machinga','Mangochi'
        //         ,'Salima'
        //     );
        //    //retrieving maincategory name
        //    $mainCatId = $cus->mainCatId;
        //    $mainCategory = MainCategory::find($mainCatId);
        //    $mCatName = $mainCategory->name;
        //    //retrieving subcategory name
        //    $subCatId = $cus->mainCatId;
        //    $subCategory = MainCategory::find($subCatId);
        //    $sCatName = $subCategory->name;

        //    return View ("Report.edit")->with("mCat", $mCatName)
        //    ->with("sCat", $sCatName)->with("categories", $categories)
        //    ->with("subcategories", $subcategories)->with("districts",$districts)
        //    ->with("cus", $cus);
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
    //     $this->validate($request ,[
    //         'name' => 'required',
    //         'description' => 'required',
    //         'mainCatId' => 'required',
    //         'subCatId' => 'required',
    //         'description' => 'required',
    //         'district' => 'required',
    //         'location' => 'required',
    //         'address' => 'required',
    //         'mobile' => 'required',
    //         'directions' => 'required'
    //     ]);        
    //     $cus = Report::find($id);      
    //     $cus->mainCatId = $request->input('mainCatId');
    //     $cus->subCatId = $request->input('subCatId');
    //     $cus->name = $request->input('name');        
    //     $cus->description = $request->input('description');
    //     $cus->district = $request->input('district');
    //     $cus->location = $request->input('location');
    //     $cus->address = $request->input('address');
    //     $cus->mobile = $request->input('mobile');
    //     $cus->tell = $request->input('tell');
    //     $cus->email = $request->input('email');
    //     $cus->weburl = $request->input('weburl');
    //     $cus->twitter = $request->input('twitter');
    //     $cus->facebook = $request->input('facebook');
    //     $cus->linkedin = $request->input('linkedin');
    //     $cus->whatsapp = $request->input('whatsapp');
    //     $cus->skype = $request->input('skype');
    //     $cus->directions = $request->input('directions');        
    //     $cus->latitude = $request->input('latitude');
    //     $cus->longitude = $request->input('longitude');
    //     $cus->duedate = "2019";
    //     $cus->active = "1";           
    //     $cus->save();
    //    return redirect('/Report')->with('success','Report Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $cus = Report::find($id);
        // $cus->delete();
        // return redirect('/Report')->with('success','Deleted Successfully');
    }
}
