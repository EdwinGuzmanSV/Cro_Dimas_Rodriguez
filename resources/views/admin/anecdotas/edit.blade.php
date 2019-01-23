@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Anecdota
                </div>

                <div class="panel-body">
                    {!! Form::model($anecdota, ['route' => ['anecdotas.update', $anecdota->id], 'method' => 'PUT', 'files' => true]) !!}
                        
                        @include('admin.anecdotas.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
