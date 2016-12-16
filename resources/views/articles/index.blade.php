@extends('layout')

@section('title', 'Home page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Articles</h1>

                @forelse($articles as $article)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->heading }}</a></h2>
                            <p>{{ str_limit($article->content, 150) }}</p>
                        </div>
                    </div>
                @empty
                    <p class="lead">No articles yet!</p>
                @endforelse
            </div>
        </div>
    </div>
@stop
