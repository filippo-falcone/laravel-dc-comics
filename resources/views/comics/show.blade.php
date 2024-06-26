@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <section class="single-element py-3">
        <div class="container d-flex justify-content-center">
            <div class="card mb-3">
                <img src="{{ $comic->thumb }}" class="card-img-top align-self-center" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-text">{{ $comic->price }}$</p>
                    <p class="card-text">
                        <small class="text-body-secondary">{{ $comic->series }}</small>
                    </p>
                    <p class="card-text">
                        <small class="text-body-secondary">{{ ucwords($comic->type) }}</small>
                    </p>
                    <p class="card-text">
                        <small class="text-body-secondary">{{ date('m/d/Y', strtotime($comic->sale_date)) }}</small>
                    </p>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="edit-element rectangle py-2 text-center"
                        data-element-id="{{ $comic->id }}">
                        edit comic
                    </button>
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete-element rectangle bg-danger py-2 text-center"
                            data-element-title="{{ $comic->title }}">delete comic</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('partials.deleteModal')
@endsection
