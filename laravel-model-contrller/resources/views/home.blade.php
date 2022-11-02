@extends('shared.app')

@section('sectionHome')
    <div class="container">
        <h1>Data Movies in Database</h1>
        <div class="cards">
            @foreach ($movies as $item)
                <div class="card">
                    <h2>{{ $item['title'] }}</h2>
                    <h3>{{ $item['original_title'] }}</h3>
                    <h3>{{ $item['nationality'] }}</h3>
                    <h3>{{ $item['date'] }}</h3>
                    <h3>Vote: {{ $item['vote'] }}</h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection
