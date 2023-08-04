@extends('app')

@section('content')
    <div class="container px-3 py-5">
        <h1>Blog</h1>
        <hr>

        @foreach ($posts as $post)
        <h4>{{ $post->title }}</h4>

        <p class="small text-secondary">
            <i>fecha de publicacion </i> {{ $post->created_at->format('d-m-Y') }} <br>
            <a href="{{ route('post', $post->slug) }}">Ver mas &raquo;</a>
        </p>
            
        @endforeach
    </div>
@endsection