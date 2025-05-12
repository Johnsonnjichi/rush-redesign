@extends('layouts.app')

@section('title', 'Gallery - Rush')

@section('content')
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Our Gallery</h1>
                <p class="lead">Moments from our events and community activities</p>
            </div>
        </div>
        
        <div class="row">
            @foreach($galleries as $gallery)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->title }}" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $gallery->title }}</h5>
                            @if($gallery->description)
                                <p class="card-text">{{ $gallery->description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            {{ $galleries->links() }}
        </div>
    </div>
@endsection