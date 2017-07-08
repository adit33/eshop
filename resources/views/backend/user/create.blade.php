@extends('backend.layout.master')

@section('content')
<h1>Create User</h1>

{{ Form::open(['method'=>'POST','url'=>route('user.register'),'class'=>'ui form']) }}

	@if ($errors->any())

	<div class="ui negative message">
	  <i class="close icon"></i>
	  <div class="header">
	    There were some errors with your submission
	  </div>
	  <ul class="list">
	    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
	  </ul>
	</div>
	@endif

  @include('backend.user._form')
  {{ Form::submit('Submit',['class'=>'ui button']) }}
{{ Form::close() }}

@endsection

@push('scripts')
<script type="text/javascript">
	$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  });
</script>
@endpush