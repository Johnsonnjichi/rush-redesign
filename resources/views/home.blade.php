@extends('layouts.app')

@section('title', 'Home - Mental Health Support for Young Girls')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Empowering Young Girls Through Mental Health Support</h1>
            <p class="lead mb-5">Join our community to find resources, mentorship, and inspiration for your mental health journey.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('articles.index') }}" class="btn btn-light btn-lg px-4">Read Articles</a>
                <a href="{{ route('events.index') }}" class="btn btn-outline-light btn-lg px-4">Upcoming Events</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="mb-4">Welcome to Rush</h2>
                <p class="lead">{{ $aboutPage->excerpt ?? 'Our mission is to provide mental health support and mentorship to young girls navigating the challenges of adolescence.' }}</p>
                <p>We believe in creating a safe space where young women can find resources, share experiences, and connect with mentors who understand their journey.</p>
                <a href="{{ route('about') }}" class="btn btn-primary mt-3">Learn More About Us</a>
            </div>
            <div class="col-lg-6">
                <div id="welcomeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Group of diverse women">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Women supporting each other">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Mental health awareness">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="bg-light py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Our Mission</h2>
                    <p class="lead">{{ $missionPage->excerpt ?? 'To provide accessible mental health resources and create a supportive community for young girls.' }}</p>
                    <a href="{{ route('mission') }}" class="btn btn-outline-primary mt-3">Read Our Full Mission</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Articles -->
    <section class="container mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Latest Articles</h2>
            <a href="{{ route('articles.index') }}" class="btn btn-outline-primary">View All Articles</a>
        </div>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($article->featured_image)
                            <img src="{{ asset('storage/' . $article->featured_image) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->excerpt, 100) }}</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="container mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Upcoming Events</h2>
            <a href="{{ route('events.index') }}" class="btn btn-outline-primary">View All Events</a>
        </div>
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($event->featured_image)
                            <img src="{{ asset('storage/' . $event->featured_image) }}" class="card-img-top" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text"><i class="bi bi-calendar-event"></i> {{ $event->date->format('M d, Y') }}</p>
                            <p class="card-text"><i class="bi bi-geo-alt"></i> {{ $event->location }}</p>
                            <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <h2 class="text-center mb-5">What People Are Saying</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 h-100">
                        <p class="fst-italic">"Rush has been a lifeline for me. The articles and community support have helped me navigate my anxiety in ways I never thought possible."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="ms-3">
                                <h6 class="mb-0">Sarah K.</h6>
                                <small class="text-muted">Age 17</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 h-100">
                        <p class="fst-italic">"The mentorship program connected me with an amazing woman who truly understands what I'm going through. I'm so grateful for this community."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="ms-3">
                                <h6 class="mb-0">Jamila T.</h6>
                                <small class="text-muted">Age 16</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 h-100">
                        <p class="fst-italic">"As a parent, I appreciate the resources Rush provides. It's helped me better understand and support my daughter's mental health journey."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="ms-3">
                                <h6 class="mb-0">Mrs. Johnson</h6>
                                <small class="text-muted">Parent</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mb-4">Join Our Community Today</h2>
            <p class="lead mb-4">Stay updated with our latest resources and events</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#newsletter" class="btn btn-primary btn-lg px-4">Subscribe to Newsletter</a>
                <a href="{{ route('events.index') }}" class="btn btn-outline-primary btn-lg px-4">View Events</a>
            </div>
        </div>
    </div>
</section>

<!-- Later in the same file -->
<section id="newsletter" class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h3 class="mb-3">Subscribe to Our Newsletter</h3>
                <p class="mb-4">Get mental health resources and event updates directly to your inbox</p>
                <form action="#" method="POST" class="row g-2 justify-content-center">
                    @csrf
                    <div class="col-md-8">
                        <input type="email" class="form-control form-control-lg" placeholder="Your email address" required>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection