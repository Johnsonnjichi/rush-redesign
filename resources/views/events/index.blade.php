@extends('layouts.app')

@section('title', 'Upcoming Events - Rush')

@section('content')
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Upcoming Events</h1>
                <p class="lead">Join our workshops, mentorship sessions, and community gatherings</p>
            </div>
        </div>
        
        <div class="row">
            @forelse($events as $event)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        @if($event->featured_image)
                            <img src="{{ asset('storage/' . $event->featured_image) }}" class="card-img-top" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text"><i class="bi bi-calendar-event me-2"></i> {{ $event->date->format('F j, Y') }}</p>
                            <p class="card-text"><i class="bi bi-geo-alt me-2"></i> {{ $event->location }}</p>
                            <p class="card-text">{{ Str::limit($event->description, 150) }}</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info">
                        No upcoming events at the moment. Please check back later!
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection