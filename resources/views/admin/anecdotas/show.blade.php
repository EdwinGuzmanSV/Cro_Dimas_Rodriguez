@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Anecdota
                </div>

                <div class="panel-body">
                    <p><strong>Titulo</strong> {{ $anecdota->name }}</p>
                    <p><strong>Slug</strong> {{ $anecdota->slug }}</p>
                    <p><strong>Descripción</strong> {{ $anecdota->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
