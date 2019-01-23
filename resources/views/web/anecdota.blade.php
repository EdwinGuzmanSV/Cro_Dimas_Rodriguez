@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1>{{ $anecdota->name }}</h1>


                <div class="panel-body">
                    @if($anecdota->file)
                        <center><img src="{{ $anecdota->file }}" class="img-responsive"></center>
                    @endif
                    
                    {{ $anecdota->excerpt }}
                    <hr>
                    {!! $anecdota->body !!}
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection