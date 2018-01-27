@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">
        <div class="card col-md-10 p-0">
              <div class="card-header">
                <h1>{{ $post->name }}</h1> <a class="float-right" href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
              </div>
              <div class="card-body">
                @if($post->file)
                    <img src="{{ $post->file }}" class="img-fluid">
                @endif
                
                {{ $post->excerpt }}
                <hr>
                {!! $post->body !!}
                <hr>

                Etiquetas
                @foreach($post->tags as $tag)
                <a href="{{ route('tag', $tag->slug) }}">
                    {{ $tag->name }}
                </a>
                @endforeach
              </div>
        </div>
    </div>
</div>

@endsection