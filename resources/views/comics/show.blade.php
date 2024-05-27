@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <section class="single-element py-3">
        <div class="container d-flex justify-content-center">
            <div class="card mb-3">
                <img src="{{$comic->thumb}}" class="card-img-top align-self-center" alt="{{$comic->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">{{$comic->price}}$</p>
                    <p class="card-text">
                        <small class="text-body-secondary">{{$comic->series}}</small>
                    </p>
                    <p class="card-text">
                        <small class="text-body-secondary">{{ucwords($comic->type)}}</small>
                    </p>
                    <p class="card-text">
                        <small class="text-body-secondary">{{ date("m/d/Y", strtotime($comic->sale_date))}}</small>
                    </p>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="edit-element rectangle py-2 text-center">
                        <a href="{{route('comics.edit', ['comic' => $comic->id])}}">edit comic</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection