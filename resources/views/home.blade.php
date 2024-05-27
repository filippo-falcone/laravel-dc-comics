@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
    <section class="home-title">
        <div class="container py-4">
            <h1 class="text-center">Welcome to DC Home Page</h1>
        </div>
    </section>
    <section class="last-comics py-4">
        <div class="container">
            <h2 class="py-3">Last Comics</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
                @foreach ($comics as $comic)
                    <div class="col">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                        <h5>{{ $comic->title }}</h5>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="show-all-element rectangle py-2 mt-3">View all comics</button>
            </div>
        </div>
    </section>
    @include('partials.buy')
@endsection
