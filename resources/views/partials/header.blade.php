<header>
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Characters</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Tv</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Collectibles</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Videos</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Fans</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>