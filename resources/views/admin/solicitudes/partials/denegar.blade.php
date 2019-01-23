{{ Form::hidden('estado', $solicitud->estado) }}
<div class="form-group">
    {{ Form::submit('Denegar', ['class' => 'btn btn-sm btn-primary']) }}
</div>