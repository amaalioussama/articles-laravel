

@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $article->name }}</h1>
        <p>{{ $article->description }}</p>
        <p>Price: ${{ $article->price }}</p>
        <p>Quantity: {{ $article->quantity }}</p>


        <a href="{{ route('home') }}">Back to Home</a>
    </div>
@endsection
