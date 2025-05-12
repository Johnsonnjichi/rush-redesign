@extends('layouts.app')

@section('title', $page->title . ' - Rush')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $page->title }}</h1>
                
                <div class="page-content">
                    {!! $page->content !!}
                </div>
                
                <div class="mt-5 pt-3 border-top">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection