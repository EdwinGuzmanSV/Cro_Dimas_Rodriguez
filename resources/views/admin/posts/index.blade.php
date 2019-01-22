@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Entradas 
                    <a href="{{ route('posts.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                
        </div>
    </div>
</div>
@endsection
