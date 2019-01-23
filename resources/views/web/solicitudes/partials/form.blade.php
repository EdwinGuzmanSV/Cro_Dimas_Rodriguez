
<div class="form-group">
    {{ Form::label('nombres', 'Nombres') }}
    {{ Form::text('nombres', null, ['class' => 'form-control', 'id' => 'nombres']) }}
</div>
<div class="form-group">
    {{ Form::label('apellidos', 'Apellidos') }}
    {{ Form::text('apellidos', null, ['class' => 'form-control', 'id' => 'apellidos']) }}
</div>
<div class="form-group">
    {{ Form::label('telefono', 'Telefono') }}
    {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
</div>
<div class="form-group">
    {{ Form::label('direccion', 'Direccion') }}
    {{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }}
</div>
<div class="form-group">
    {{ Form::label('ocupacion', 'Ocupacion') }}
    {{ Form::text('ocupacion', null, ['class' => 'form-control', 'id' => 'ocupacion']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('motivo_socio', 'Motivo') }}
    {{ Form::text('motivo_socio', null, ['class' => 'form-control', 'id' => 'motivo_socio']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>