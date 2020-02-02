
<div class="row">
	<div class="col-sm-2">
		{!! form::label('nama',"Nama") !!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('nama') ? 'has-error' : "" }}">
			{{ Form::text('nama',NULL,['class'=>'form-control', 'id'=>'nama', 'placeholder'=>'Nama Post'] ) }}
			{{ $errors->first('nama', '<p class="help-block">:message</p>') }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-2">
		{!! form::label('alamat','Alamat') !!}
	</div>
	<div class="col-sm-10">
		<div class="form-group{{ $errors->has('alamat') ? 'has-error' : "" }}">
		{{ Form::text('alamat',NULL, ['class'=>'form-control', 'id'=>'alamat','placeholder'=>'Alamat Post...']) }}
		{{ $errors->first('alamat', '<p class="help-block">:message</p>') }}
	</div>
</div>
</div>

<div class="form-group">
	{!! Form::button(isset($model)? 'Update' : 'save' ,['class'=>'btn btn-success', 'type'=>'submit']) !!}
</div>
