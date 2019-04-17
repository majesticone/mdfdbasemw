@extends('layouts.app')
@section('content')
<div class="ui-alt-icon">       
       <h3 > All Reports </h3> <a href="/report/create" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">New</a>     
</div>
 @if(count($cus) > 0)
<form>
    <input id="filterTable-input" data-type="search">
</form>
<table data-role="table"  id="table-custom-2" data-mode="columntoggle" data-filter="true" data-input="#filterTable-input" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Filter Columns..." data-column-popup-theme="a">
 <thead>
      <tr class="ui-bar-d">
            <th data-priority="1">Report No</th>
            <th data-priority="1">Site Name</th>
            <th data-priority="2">Unit</th>
            <th data-priority="2">Team</th>
            <th data-priority="2">Lead</th>
            <th data-priority="2">Quarter</th>
            <th data-priority="2">Month</th>
            <th data-priority="2">Year</th>
            <th data-priority="3">Collected At</th>
            <th data-priority="4">Modified On</th>
            <th></th>
            <th></th>  
   </thead>
      </tr>
        @foreach($cus as $cat)
            <tr>
                <td>{{$cat->report_id}}</td>
                <td>{{$cat->site_id}}</td>
                <td>{{$cat->unit_id}}</td>
                <td>{{$cat->team_id}}</td>
                <td>{{$cat->lead_id}}</td>
                <td>{{$cat->quarter}}</td>
                <td>{{$cat->month}}</td>
                <td>{{$cat->year}}</td>
                <td>{{$cat->created_at}} </td>
                <td>{{$cat->updated_at}} </td>
                <td>
                    <a href="/Customer/{{$cat->id}}"> 
                        <div class="ui-input-btn ui-btn ui-icon-info ui-btn-icon-notext ui-corner-all">                    
                        </div>
                    </a>
                </td>
                <td>
                    <a href="/Customer/{{$cat->id}}/edit">
                        <div class="ui-input-btn ui-btn ui-icon-edit ui-btn-icon-notext ui-corner-all">                    
                        </div>
                    </a>
                </td>
            <tr>
        @endforeach         
    </table> 
    <br/>
    {{$cus->links()}}      
    @else
        <p>No Record found </p>
    @endif
@endsection



