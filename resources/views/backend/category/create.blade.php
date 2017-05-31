@extends('backend.layout.master')


@section('title')
{{ $title }}
@endsection

@section('content')

{{ Form::open(['method'=>'POST','url'=>route('user.register'),'class'=>'ui form']) }}
  @include('backend.category._form')
  {{ Form::submit('Submit',['class'=>'ui button']) }}
{{ Form::close() }}

@endsection

@push('scripts')
<script type="text/javascript">
	$('.ui.dropdown')
  .dropdown({
    // allowAdditions: true
  });
</script>
@endpush