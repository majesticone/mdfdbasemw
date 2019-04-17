@extends('layouts.app')
@section('content')
<div class="ui-alt-icon">       
       <h3 > All Reports</h3> <a href="/report/create" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">New</a>     
</div>
 @if(count($reports) > 0)
<form>
    <input id="filterTable-input" data-type="search">
</form>
<table data-role="table"  id="table-custom-2" data-mode="columntoggle" data-filter="true" data-input="#filterTable-input" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Filter Columns..." data-column-popup-theme="a">
 <thead>
      <tr class="ui-bar-d">
            <th data-priority="1">Site Name</th>
            <th data-priority="2">Cohort</th>
            <th data-priority="3">Created At</th>
            <th data-priority="4">Modified On</th>
            <th></th>
            <th></th>  
   </thead>
      </tr>
        @foreach($reports as $report)
            <tr>
                <td>{{$report->site_name}}</td>
                <td>{{$report->cohort}}</td>
                <td>{{$report->created_at}} </td>
                <td>{{$report->updated_at}} </td>
                <td>
                    <a href="/report/{{$report->id}}"> 
                        <div class="ui-input-btn ui-btn ui-icon-info ui-btn-icon-notext ui-corner-all">                    
                        </div>
                    </a>
                </td>
                <td>
                    <a href="/report/{{$report->id}}/edit">
                        <div class="ui-input-btn ui-btn ui-icon-edit ui-btn-icon-notext ui-corner-all">                    
                        </div>
                    </a>
                </td>
            <tr>
        @endforeach         
    </table> 
    <br/>
    {{$reports->links()}}      
    @else
        <p>No Record found </p>
    @endif
@endsection




