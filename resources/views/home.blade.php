@extends('layouts.app')

@section('content')
    <section>
        <h2>
            ciao sono pagina home
        </h2>
        <ul>
            @foreach ($movies as $item)
                <li>
                    <h3>{{ $item->title }}</h3>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
