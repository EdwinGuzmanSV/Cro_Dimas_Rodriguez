@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1>{{ $anecdota->name }}</h1>

                <div class="panel-body">
                    @if($anecdota->file)
                        <img src="{{ $anecdota->file }}" class="img-responsive">
                    @endif
                    
                    {{ $anecdota->excerpt }}
                    <hr>
                    {!! $anecdota->body !!}
                    <hr>

                    Etiquetas
                    @foreach($anecdota->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->name }}
                    </a>
                    @endforeach
        </div>
    </div>
</div>
@endsection