@extends('layouts.app')
@section('content')
    <h1>Create Property Post</h1>
    {!! Form::open(['action'=> 'PostsController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textArea('description','',['class'=>'form-control','placeholder'=>'description'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class'=>'form-control','placeholder'=>'Price no need include dollar sign'])}}
        </div>
        <div class="form-group">
            {{Form::label('location_link','Location Link')}}
            {{Form::text('location_link','',['class'=>'form-control','placeholder'=>'Google Map Link'])}}
        </div>
        <div class="form-group">
            {{Form::label('type','Type')}}
            {{Form::text('type','',['class'=>'form-control','placeholder'=>'Type'])}}
        </div>
        <div class="form-group">
            {{Form::label('status','Status')}}
            {{Form::text('status','',['class'=>'form-control','placeholder'=>'Status'])}}
        </div>
        <div class="form-group">
            {{Form::label('area','Area')}}
            {{Form::text('area','',['class'=>'form-control','placeholder'=>'Area Size'])}}
        </div>
        <div class="form-group">
            {{Form::label('address','Address')}}
            {{Form::text('address','',['class'=>'form-control','placeholder'=>'Address'])}}
        </div>
        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>
        <div class="form-group">
            {{ Form::file('floorplan_image') }}
        </div>


        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection