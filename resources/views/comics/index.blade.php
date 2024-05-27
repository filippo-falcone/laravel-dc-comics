@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    @include('partials.comics.hero')
    <section class="current-media">
        <div class="container pb-5">
            <div class="content-container d-flex flex-column">
                <div class="title rectangle py-3">
                    <div class="fs-3">current series</div>
                </div>
                <div class="row py-4 g-3">
                    @foreach ($comics as $comic)
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column align-items-center">
                            <div class="show-element img-container position-relative">
                                <img src="{{$comic->thumb}}"  alt="{{$comic->series}}">
                                <div class="img-hover justify-content-center align-items-center position-absolute top-0 end-0 bottom-0 start-0"></div>
                            </div>
                            <div class="text pt-4">{{$comic->series}}</div>
                        </div>
                    @endforeach
                </div>
                <button type="button" class="add-element rectangle py-2 text-center">add comic</button>
            </div>
        </div>
    </section>
    
    @include('partials.buy')
@endsection