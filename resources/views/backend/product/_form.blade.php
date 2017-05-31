 <div class="field">
    <label>Nama Barang</label>
    {{ Form::text('nama',null,['placeholder'=>'Masukan Nama']) }}
</div>

<div class="ui sub header">Kategori</div>
<div class="ui fluid multiple search selection dropdown">
  <input name="tags" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Kategori</div>
  <div class="menu">
  	@foreach(App\Models\Category::all() as $category)
  	<div class="item" data-value="{{ $category->id }}">{{ $category->nama }}</div>
  	@endforeach
  </div>
</div>

 <div class="field">
    <label>Harga Barang</label>
    
    <div class="ui right labeled input">
  <div class="ui label">Rp</div>
  {{ Form::text('nama',null,['placeholder'=>'Harga']) }}
  <div class="ui basic label"></div>
</div>
</div>


 <div class="field">
    <label>Deskripsi</label>
    {{ Form::textarea('nama',null,['placeholder'=>'Deskripsi']) }}
</div>


 <div class="field">
    <label>Photo</label>
    <div action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone"></div>
</div>