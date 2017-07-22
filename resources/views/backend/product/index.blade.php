@extends('backend.layout.master')

@section('content')
<h1>Create Product</h1>

{!! $dataTable->table(['class'=>'']) !!}

@endsection

@push('scripts')
{!! $dataTable->scripts() !!}
@endpush