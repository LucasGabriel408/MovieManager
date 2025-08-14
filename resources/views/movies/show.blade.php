@include('templates.base')
@include('templates.navbar')

<link rel="stylesheet" href="{{ asset('css/movie-detail.css') }}">

<div class="movie-detail-container">
    <div class="movie-detail-header">
        <h1 class="movie-detail-title">{{ $movie->name }} ({{ $movie->year }})</h1>
        <span class="movie-detail-category">{{ $movie->category }}</span>
    </div>

    <div class="movie-detail-body">
        <div class="movie-detail-cover">
            <img src="{{ $movie->cover_image }}" alt="{{ $movie->name }}">
        </div>

        <div class="movie-detail-synopsis">
            <h2>Synopsis</h2>
            <p>{{ $movie->synopsis }}</p>
        </div>

        @if($movie->trailer_link)
        <div class="movie-detail-trailer">
            <h2>Trailer</h2>
            <iframe width="100%" height="500" src="{{ $movie->trailer_link }}" title="{{ $movie->name }} Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @endif
    </div>
</div>

@include('templates.footer')
