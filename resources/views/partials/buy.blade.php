<section class="main-buy">
    <div class="container py-4">
        <div class="row justify-content-center g-4 px-5">
            @foreach ($purchases as $purchase)
                <div class="col-6 col-md d-flex align-items-center">
                    <div class="image me-2">
                        <img src="{{ Vite::asset('resources/img/' . $purchase['image']) }}" alt="{{ $purchase['text'] }}">
                    </div>
                    <a href="#" class="text">{{ $purchase['text'] }}</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
