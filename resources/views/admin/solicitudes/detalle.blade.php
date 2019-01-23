@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Detalle de Solicitud
                </div>

                <div class="panel-body">                    
                    <p><strong>Nombres:</strong> {{ $solicitud->nombres }}</p>
                    <p><strong>Apellidos:</strong> {{ $solicitud->apellidos }}</p>
                    <p><strong>Telefono:</strong> {{ $solicitud->telefono }}</p>
                    <p><strong>Direccion:</strong> {{ $solicitud->direccion }}</p>
                    <p><strong>Ocupacion_</strong> {{ $solicitud->ocupacion }}</p>
                    <p><strong>Email:</strong> {{ $solicitud->email }}</p>
                    <p><strong>Motivo:</strong> {{ $solicitud->motivo_socio }}</p>

                    {!! Form::model($solicitud, ['route' => ['solicituds.update', $solicitud->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.solicitudes.partials.aceptar')

                    {!! Form::close() !!}

                    {!! Form::model($solicitud, ['route' => ['solicitudes.update', $solicitud->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.solicitudes.partials.denegar')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection