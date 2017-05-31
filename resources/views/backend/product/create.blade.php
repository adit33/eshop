@extends('backend.layout.master')

@section('title')

@endsection

@section('content')
{{ Form::open(['method'=>'POST','class'=>'ui form']) }}
	@include('backend.product._form')	
{{ Form::close() }}
@endsection

@push('scripts')
<script type="text/javascript">
	$('.ui.dropdown')
  .dropdown({
    allowAdditions: true
  });
</script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/basic.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
@endpush