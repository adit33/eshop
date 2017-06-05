@extends('backend.layout.master')

@section('title')

@endsection

@section('content')
{{ Form::open(['method'=>'POST','url'=>route('product.store'),'class'=>'ui form','id'=>'form-create']) }}
	@include('backend.product._form')
	<input type="button"  class="ui primary button" value="Save" id="btnSave"></input>	
{{ Form::close() }}
@endsection

@push('scripts')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/basic.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<script type="text/javascript">

	  new Vue({
  	el:"#app",
  	data:{
  		categories:{},
  		category_id:[]
  	},
  	methods:{
  		addTag:function(value){
  			alert(value)
  		}
  	}
  })	
</script>

<script type="text/javascript">
var form=$("#form-create");


  Dropzone.autoDiscover = false; // jika ada error Dropzone already attached tambahkan fungsi ini

  var dropzone = new Dropzone("#attachment",{
          addRemoveLinks: true, // tambah link hapus photo
          autoProcessQueue: false, // agar tidak otomatis langsung upload 
          maxFiles:10, // jumlah maximal upload file
          parallelUploads: 10, // samakan dengan max files
          url: form.attr('action'), // url 
          uploadMultiple: true, //untuk upload lebih dari 1
          init:function(){
            $("#btnSave").on('click',function(){
              dropzone.processQueue();
            });
          },
            sending: function(file, xhr, formData) {
            let data=form.serializeArray(); 
            for (var i = 0; i < data.length; i++) {
              formData.append(data[i].name,data[i].value);
            }
        }
    });  


	$('.ui.dropdown')
  .dropdown({
    allowAdditions: false
  });
</script>

@endpush