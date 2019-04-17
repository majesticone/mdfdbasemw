@extends('layouts.app')
@section('content')
<h3 > Customer Details </h3> 
<div class="ui-alt-icon">   
    <a href="/Customer/create" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">New</a>
</div>
<table data-role="table"  id="table-custom-2" data-mode="columntoggle" data-filter="true" data-input="#filterTable-input" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Filter Columns..." data-column-popup-theme="a">
 <thead>
   <tr class="ui-bar-d">
                <th data-priority="1">Name</th>
                <th data-priority="2">Description</th>
                <th data-priority="3">Created At</th>
                <th data-priority="4">Modified On</th>
                <th data-priority="5">Status</th>
                <th></th> 
                <th></th>
            </tr> 
    </thead>
            <tr>
                <td>{{$cus->name}}</td>
                <td>{{$cus->description}}</td>
                <td>{{$cus->created_at}} </td>
                <td>{{$cus->updated_at}} </td>
                <td>{{$cus->active}}</td>
                <td>
                    <a href="/Customer/{{$cus->id}}/edit">
                        <div class="ui-input-btn ui-btn ui-icon-edit ui-btn-icon-notext ui-corner-all">                    
                        </div>
                    </a>
                </td>  
                <td>  
                {!!Form::open(['action' => ['CustomerController@destroy', $cus->id], 'method'=>'POST','class'=>'pull-right'])!!}
                     {{Form::hidden('_method','DELETE')}}
                     {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
              </td>            
            </tr> 
    </table>  
  
   
@endsection

<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
             </div>