<!-- resources/views/home.blade.php -->
<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h1>Articles</h1>
        @foreach ($articles as $article)
            <div>
                <h2>{{ $article->name }}</h2>
                <p>{{ $article->description }}</p>
                <p>Price: ${{ $article->price }}</p>
                <p>Quantity: {{ $article->quantity }}</p>

                <!-- Add a "Show More" button that links to the detailed view -->
                <a href="{{ route('showMore', ['id' => $article->id]) }}">Show More</a>
            </div>
        @endforeach
    </div>
@endsection

