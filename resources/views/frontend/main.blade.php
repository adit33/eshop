@extends('frontend.layout.master')
<style type="text/css">
	.ui.blue.inverted.menu{
		border-radius: 0;
	}
</style>
@section('content')

<div class="ui blue three item inverted menu">
  <a class="active item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item">
    Friends
  </a>
</div>

@endsection