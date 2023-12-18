@extends('app')

@section('content')
    <h1>Articles</h1>
    @foreach ($articles as $article)
        <div>
            <h2>{{ $article->name }}</h2>
            <p>{{ $article->description }}</p>
            <p>Price: ${{ $article->price }}</p>
            <p>Quantity: {{ $article->quantity }}</p>


            <a href="{{ route('showMore', ['id' => $article->id]) }}">Show More</a>
        </div>
    @endforeach
@endsection
