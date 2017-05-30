@extends('frontend.layout.master')

@section('content')

<form class="ui form">
	@include('backend.user._form')
	<input type="submit" class="ui right floated primary button" value="Save"></input>	
</form>

@endsection