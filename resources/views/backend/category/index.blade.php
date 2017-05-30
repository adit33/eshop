@extends('backend.layout.master')

@section('content')
	{!! $dataTable->table() !!}
@endsection

@push('scripts')
	<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>
	{!! $dataTable->scripts() !!}
@endpush