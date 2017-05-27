  <div class="field">
    <label>Nama</label>
    {{ Form::text('name',null,['placeholder'=>'Masukan Nama']) }}
  </div>
  <div class="field">
  	<label>E-mail</label>
  	{{ Form::email('email',null,['placeholder'=>'Masukan email']) }}
  </div>
  <div class="field">
  	<label>Password</label>
  	{{ Form::password('password',null,['placeholder'=>'Masukan Password']) }}
  </div>
