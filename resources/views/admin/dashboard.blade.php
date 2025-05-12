@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4">Dashboard</h1>
        
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Articles</h5>
                        <h2 class="mb-0">{{ \App\Models\Article::count() }}</h2>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('admin.articles.index') }}" class="text-white">View All</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <h2 class="mb-0">{{ \App\Models\Event::count() }}</h2>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('admin.events.index') }}" class="text-white">View All</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Pages</h5>
                        <h2 class="mb-0">{{ \App\Models\Page::count() }}</h2>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('admin.pages.index') }}" class="text-white">View All</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Gallery</h5>
                        <h2 class="mb-0">{{ \App\Models\Gallery::count() }}</h2>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('admin.galleries.index') }}" class="text-dark">View All</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Recent Articles</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach(\App\Models\Article::latest()->take(5)->get() as $article)
                                <a href="{{ route('admin.articles.edit', $article) }}" class="list-group-item list-group-item-action">
                                    {{ $article->title }}
                                    <span class="badge bg-{{ $article->published ? 'success' : 'secondary' }} float-end">
                                        {{ $article->published ? 'Published' : 'Draft' }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Upcoming Events</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach(\App\Models\Event::orderBy('date', 'asc')->take(5)->get() as $event)
                                <a href="{{ route('admin.events.edit', $event) }}" class="list-group-item list-group-item-action">
                                    {{ $event->title }}
                                    <span class="badge bg-primary float-end">
                                        {{ $event->date->format('M d') }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection