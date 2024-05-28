@extends('layouts.app')

@section('page-title', 'Add Comic')

@section('content')
    <section class="create-form">
        <div class="container py-5">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                </div>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                </div>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price"
                        value="{{ old('price') }}">
                </div>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="sale_date"
                        value="{{ old('sale_date') }}">
                </div>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <select class="form-select" name="type">
                    <option @selected(old('type') === '') value="" selected>Select type</option>
                    <option @selected(old('type') === 'comic book') value="comic book">Comic Book</option>
                    <option @selected(old('type') === 'graphic novel') value="graphic novel">Graphic Novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="6" name="description">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="rectangle py-2">Submit</button>
            </form>
        </div>
    </section>
@endsection
