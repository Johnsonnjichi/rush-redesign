@extends('layouts.app')

@section('title', 'Mental Health Articles - Rush')

@section('content')
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Mental Health Articles</h1>
                <p class="lead">Educational resources and personal stories to support your mental health journey</p>
            </div>
        </div>
        
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        @if($article->featured_image)
                            <img src="{{ asset('storage/' . $article->featured_image) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->excerpt }}</p>
                            <a href="{{ route('articles.show', $article) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">Published {{ $article->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            {{ $articles->links() }}
        </div>
    </div>
@endsection