@extends('backend.layout.master')

@section('content')
<h1>Create User</h1>

{{ Form::open(['method'=>'POST','url'=>route('user.register'),'class'=>'ui form']) }}

{!! $dataTable->table(['class'=>'']) !!}

@endsection

@push('scripts')
{!! $dataTable->scripts() !!}
@endpush