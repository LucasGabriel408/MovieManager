@include('templates.base')
@include('templates.navbar')

<section class="sec1">
    <div class="container">
        <h1 class="movie-name"></h1>
        <span class="movie-synopse" hidden></span>
        <a href="{{ route('movie.show', $movies->id()) }}">See Details</a>
    </div>
</section>

<section class="sec2"></section>