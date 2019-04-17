
@extends('layouts.app')
    @section('content')
	{!! Form::open(['action' => ['CustomerController@update' , $cus->id ] , 'method'=>'POST']) !!}
            <h3 > Edit Customer Details </h3>
            <div class="ui-alt-icon">   
                 <a href="/Customer/create" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">New</a>
           </div>
            <div class ="form-group">
                {{Form::label('name', 'Customer Name')}}
                {{Form::text('name', $cus->name, ['class' => 'form-control', 'placeholder' => 'Customer Name'])}}
            </div>
            <div class ="form-group">
            {{Form::label('mainCatId', 'Category')}}
               <select name = "mainCatId" class ="form-control">
                <option value = "{{$cus->mainCatId}}">{{$mCat}}</option>
                    @foreach($categories as $cat)
                            <option value = " {{$cat->id }}"> {{$cat->name}}</option>
                    @endforeach
                </select>
            </div>  
            <div class ="form-group">
            {{Form::label('subCatId', 'Sub Category')}}
               <select name = "subCatId" class ="form-control">
                <option value = "{{$cus->subCatId}}">{{$sCat}}</option>
                    @foreach($subcategories as $scat)
                            <option value = "{{$scat->id }}"> {{$scat->name}}</option>
                    @endforeach
                </select>
            </div>          
            <div class ="form-group">
                {{Form::label('description','Customer Description')}}
                {{Form::textarea('description', $cus->description, ['class' => 'form-control' , 'placeholder' => 'Category Description'])}}
            </div>
            <div class ="form-group">
            {{Form::label('district', 'District')}}
               <select name = "district" class ="form-control">
                <option value = "{{$cus->district}}">{{$cus->district}}</option>
                    @foreach($districts as $dist)
                            <option value = " {{$dist }}"> {{$dist}}</option>
                    @endforeach
                </select>
            </div>  
            <div class ="form-group">
                {{Form::label('location', 'Location')}}
                {{Form::text('location', $cus->location, ['class' => 'form-control', 'placeholder' => 'Business Location'])}}
            </div>
            <div class ="form-group">
                {{Form::label('address','Postal Address')}}
                {{Form::textarea('address', $cus->address, ['class' => 'form-control' , 'placeholder' => 'Postal Address'])}}
            </div>
            <div class ="form-group">
                {{Form::label('directions','Physical Address')}}
                {{Form::textarea('directions', $cus->directions, ['class' => 'form-control' , 'placeholder' => 'Physical Address'])}}
            </div>
            <div class ="form-group">
                {{Form::label('mobile', 'Mobile Phone')}}
                {{Form::text('mobile', $cus->mobile, ['class' => 'form-control', 'placeholder' => 'Mobile Phone'])}}
            </div>
            <div class ="form-group">
                {{Form::label('tell', 'Telephone')}}
                {{Form::text('tell', $cus->tell, ['class' => 'form-control', 'placeholder' => 'Telephone'])}}
            </div>
            <div class ="form-group">
                {{Form::label('email', 'Email Address')}}
                {{Form::email('email', $cus->email, ['class' => 'form-control', 'placeholder' => 'Email Address'])}}
            </div>
            <div class ="form-group">
                {{Form::label('latitude', 'Geo Latitude')}}
                {{Form::text('latitude', $cus->latitude, ['class' => 'form-control', 'placeholder' => 'Geo Latitude'])}}
            </div>
            <div class ="form-group">
                {{Form::label('longitude', 'Geo Longitude')}}
                {{Form::text('longitude', $cus->longitude, ['class' => 'form-control', 'placeholder' => 'Geo Longitude'])}}
            </div>            
            <div class ="form-group">
                {{Form::label('weburl', 'Website')}}
                {{Form::text('weburl', $cus->weburl, ['class' => 'form-control', 'placeholder' => 'Website'])}}
            </div>
            <div class ="form-group">
                {{Form::label('twitter', 'Twitter')}}
                {{Form::text('twitter', $cus->twitter, ['class' => 'form-control', 'placeholder' => 'Twitter'])}}
            </div>
            <div class ="form-group">
                {{Form::label('facebook', 'Facebook')}}
                {{Form::text('facebook', $cus->facebook, ['class' => 'form-control', 'placeholder' => 'Facebook'])}}
            </div>
            <div class ="form-group">
                {{Form::label('whatsapp', 'WhatsApp')}}
                {{Form::text('whatsapp', $cus->whatsapp, ['class' => 'form-control', 'placeholder' => 'WhatsApp'])}}
            </div>
            <div class ="form-group">
                {{Form::label('linkedin', 'LinkedIn')}}
                {{Form::text('linkedin', $cus->linkedin, ['class' => 'form-control', 'placeholder' => 'LinkedIn'])}}
            </div>
            <div class ="form-group">
                {{Form::label('skype', 'Skype')}}
                {{Form::text('skype', $cus->skype, ['class' => 'form-control', 'placeholder' => 'Skype'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
            {{Form::reset('Clear', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}   
    @endsection
