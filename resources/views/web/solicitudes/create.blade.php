@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Solicitud de Aspirante a Socio 
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'solicituds.store']) !!}
                        
                        @include('web.solicitudes.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
