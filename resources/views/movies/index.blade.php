@include('templates.base')
@include('templates.navbar')

<div class="container mt-4">
    <h1>Movie List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>