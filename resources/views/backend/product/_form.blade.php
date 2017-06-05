 <div class="field">
    <label>Nama Barang</label>
    {{ Form::text('nama',null,['placeholder'=>'Masukan Nama']) }}
</div>

<div class="field">
<label>Kategori</label>

{{ Form::select('category_id[]',App\Models\Category::pluck('nama','id'),null,['class'=>'ui fluid search dropdown','multiple'=>'','v-model'=>'category_id']) }}

 <div class="field">
    <label>Harga Barang</label>
    
    <div class="ui right labeled input">
  <div class="ui label">Rp</div>
  {{ Form::text('harga',null,['placeholder'=>'Harga']) }}
  <div class="ui basic label"></div>
</div>
</div>
</div>


 <div class="field">
    <label>Deskripsi</label>
    {{ Form::textarea('deskripsi',null,['placeholder'=>'Deskripsi']) }}
</div>

 <div class="field">
    <label>Photo</label>
    <div class="dropzone" id="attachment"></div>
</div>