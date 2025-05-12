@extends('layouts.app')

@section('title', $article->title . ' - Rush')

@section('content')
    <div class="container py-5">
        <article>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @if($article->featured_image)
                        <img src="{{ asset('storage/' . $article->featured_image) }}" class="img-fluid rounded mb-4" alt="{{ $article->title }}">
                    @endif
                    
                    <h1 class="mb-3">{{ $article->title }}</h1>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <i class="bi bi-person-circle fs-4"></i>
                        </div>
                        <div>
                            <p class="mb-0">By {{ $article->user->name }}</p>
                            <small class="text-muted">Published {{ $article->created_at->format('F j, Y') }}</small>
                        </div>
                    </div>
                    
                    <div class="article-content mb-5">
                        {!! $article->content !!}
                    </div>
                    
                    <div class="d-flex justify-content-between border-top pt-3">
                        <a href="{{ route('articles.index') }}" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-left"></i> Back to Articles
                        </a>
                        <div class="social-share">
                            <span class="me-2">Share:</span>
                            <a href="#" class="text-primary me-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-primary me-2"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-primary"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection