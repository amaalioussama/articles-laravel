<!-- resources/views/show-more.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $article->name }}</h1>
        <p>{{ $article->description }}</p>
        <p>Price: ${{ $article->price }}</p>
        <p>Quantity: {{ $article->quantity }}</p>
        <!-- Add other details as needed -->

        <a href="{{ route('home') }}">Back to Home</a>
    </div>
@endsection
