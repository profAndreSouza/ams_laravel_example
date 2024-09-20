@extends('layouts.app')

@section('template')

<div class="container mt-4">
    <h1>{{ $book->title }}</h1>
    <p><strong>Autor:</strong> {{ $book->author }}</p>
    <p><strong>Categorias:</strong> <br />
        @foreach($book->categories as $category)
        {{ $category->name }} <br />
        @endforeach
    </p>
</div>

@endsection