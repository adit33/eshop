@extends('backend.layout.master')

@section('content')
<h1>Create User</h1>

{{ Form::open(['method'=>'POST','url'=>route('user.register'),'class'=>'ui form']) }}
  @include('backend.user._form')
  {{ Form::submit('Submit',['class'=>'ui button']) }}
{{ Form::close() }}

@endsection