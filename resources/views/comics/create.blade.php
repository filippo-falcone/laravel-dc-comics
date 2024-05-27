@extends('layouts.app')

@section('page-title', 'Add Comic')

@section('content')
    <section class="create-form">
        <div class="container py-5">   
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="sale_date">
                </div>
                <select class="form-select" name="type">
                    <option value="" selected>Select type</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="6" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection