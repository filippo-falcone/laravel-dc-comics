@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
    <section class="home-title">
        <div class="container py-4">
            <h1 class="text-center">Welcome to DC Home Page</h1>
        </div>
    </section>
    @include('partials.buy')
@endsection
