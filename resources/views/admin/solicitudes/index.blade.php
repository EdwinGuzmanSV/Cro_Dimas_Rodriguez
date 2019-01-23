<!-- index.blade.php -->
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Solicitudes</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>                                
                                <th>Accion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($solicituds as $solicitud)

                            @if ($solicitud->estado=='D')
                            <tr>
                                <td>{{$solicitud['nombres']}}</td>
                                <td>{{$solicitud['apellidos']}}</td>
                                <td>{{$solicitud['telefono']}}</td>
                                <td><a href="{{action('SolicitudController@edit',
                                $solicitud['id'])}}" class="btn btn-warning">Detalle</a></td>
                            </tr>
                            @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
            @endsection
