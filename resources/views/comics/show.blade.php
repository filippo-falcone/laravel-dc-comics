@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <section class="single-comics">
        <div class="container d-flex justify-content-center">
            <div class="card mb-3">
                <img src="{{$comic->thumb}}" class="card-img-top align-self-center" alt="{{$comic->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">{{$comic->price}}$</p>
                    <p class="card-text">
                        <small class="text-body-secondary">Series {{$comic->series}}</small>
                    </p>
                    <p class="card-text">
                        <small class="text-body-secondary">Released {{$comic->sale_date}}</small>
                    </p>
                </div>
                <div class="edit-comic rectangle py-2 text-center">
                    <a href="{{route('comics.edit', ['comic' => $comic->id])}}">edit comic</a>
                </div>
            </div>
        </div>
    </section>
@endsection