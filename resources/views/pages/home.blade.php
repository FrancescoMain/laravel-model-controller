@extends('layout.base')

@section('content')
    <h1>Movie</h1>
    <div>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie -> title }} - {{ $movie -> original_title }} - {{ $movie -> nationality }} - {{ $movie -> date }} - {{ $movie -> vote }} </li>
            @endforeach
        </ul>
    </div>
@endsection
