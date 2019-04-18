@extends('layouts.app')
@section('content')
<div class="ui-alt-icon">       
       <h3 > All Reports </h3> <a href="/report/create" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">New</a>     
</div>
 @if(count($reports) > 0)
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
        @foreach($reports as $report)
            <tr>
                <td>{{$report->id}}</td>
                <td>{{$report->site_id}}</td>
                <td>{{$report->unit_id}}</td>
                <td>{{$report->team_id}}</td>
                <td>{{$report->lead_id}}</td>
                <td>{{$report->quarter}}</td>
                <td>{{$report->month}}</td>
                <td>{{$report->year}}</td>
                <td>{{$report->created_at}} </td>
                <td>{{$report->updated_at}} </td>
                <td>
                    <a href="/report/{{$report->id}}"> 
                        <div class="ui-input-btn ui-btn ui-icon-info ui-btn-icon-notext ui-corner-all">                    
                        </div>
                    </a>
                </td>
                <td >
                {!!Form::open(['action' => ['ReportController@destroy', $report->id], 'method'=>'POST','class'=>'pull-right'])!!}
                     {{Form::hidden('_method','DELETE')}}
                     {{Form::submit('Del', ['class' => 'btn btn-danger', 'id' => 'del' ])}}
                {!!Form::close()!!}
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



