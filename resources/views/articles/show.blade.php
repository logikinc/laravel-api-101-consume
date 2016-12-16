@extends('layout')

@section('title', $article->heading)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $article->heading }}</h1>
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>
@stop
