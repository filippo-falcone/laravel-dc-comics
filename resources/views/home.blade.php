@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
    <section class="home-title">
        <div class="container py-4">
            <h1 class="text-center">Benvenuti nella HomePage di DC Comics</h1>
        </div>
    </section>

    @include('partials.buy')
@endsection
