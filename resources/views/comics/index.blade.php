@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    @include('partials.comics.hero')
    <section class="current-series">
        <div class="container pb-5">
            <div class="content-container d-flex flex-column">
                <div class="title rectangle py-3">
                    <div class="fs-3">current series</div>
                </div>
                <div class="row py-4 g-3">
                    @foreach ($comics as $comic)
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column align-items-center">
                            <div class="img-container">
                                <img src="{{$comic->thumb}}"  alt="{{$comic->series}}">
                            </div>
                            <div class="text pt-4">{{$comic->series}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="add-comic rectangle py-2 text-center">
                    <a href="{{route('comics.create')}}">add comic</a>
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.buy')
@endsection