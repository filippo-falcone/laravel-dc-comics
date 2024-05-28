@extends('layouts.app')

@section('page-title', 'Add Comic')

@section('content')
    <section class="edit-form">
        <div class="container py-5">
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $comic->title) }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"
                        value="{{ old('thumb', $comic->thumb) }}">
                    @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series"
                        value="{{ old('series', $comic->series) }}">
                    @error('series')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price"
                        value="{{ old('price', $comic->price) }}">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="sale_date"
                        value="{{ old('sale_date', $comic->sale_date) }}">
                    @error('sale_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <select class="form-select" name="type">
                    <option @selected(old('type', $comic->type) === '') value="">Select type</option>
                    <option @selected(old('type', $comic->type) === 'comic book') value="comic book">Comic Book</option>
                    <option @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">Graphic Novel</option>
                    @error('type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </select>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="6" name="description">{{ old('description', $comic->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="rectangle py-2">Submit</button>
            </form>
        </div>
    </section>
@endsection
