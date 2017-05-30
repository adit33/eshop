@extends('backend.layout.master')

@section('content')

@section('title')
{{ $title }}
@endsection


{{ Form::open(['method'=>'POST','url'=>route('user.register'),'class'=>'ui form']) }}
  @include('backend.category._form')
  {{ Form::submit('Submit',['class'=>'ui button']) }}
{{ Form::close() }}

@endsection