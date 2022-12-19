@extends('layouts.app')

@section('title')
    all movies
@endsection

@section('content')
    <h1>All Movies</h1>
    <div class="row row-cols-3">
        @foreach ($movies as $item)
            <div class="col">

                <div class="card">
                    <img src="" alt="">
                    <h5>{{ $item->title }}</h5>
                    <p>Nationality: {{ $item->nationality }}</p>
                    <p>Vote: {{ $item->vote }}</p>
                </div>

            </div>
        @endforeach
    </div>
@endsection
