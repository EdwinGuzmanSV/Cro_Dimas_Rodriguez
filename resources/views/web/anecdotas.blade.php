@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1>Lista de Anecdotas</h1>

        	@foreach($anecdotas as $anecdota)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $anecdota->name }}</div>

                <div class="panel-body">
                    @if($anecdota->file)
                        <center><img src="{{ $anecdota->file }}" class="img-responsive"></center>
                    @endif
                    
                    {{ $anecdota->excerpt }}
                    <a href="{{ route('anecdota', $anecdota->slug) }}" class="pull-right">Leer más</a>
                </div>
            </div>
            @endforeach

            {{ $anecdotas->render() }}
        </div>
    </div>
</div>
@endsection
