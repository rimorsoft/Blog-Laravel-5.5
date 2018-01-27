@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-10">

        	<h1 class="mb-5">Lista de artículos</h1>

        	@foreach($posts as $post)

                <div class="card mb-5">
                  @if($post->file)
                    <img class="card-img-top" src="{{ $post->file }}" alt="Card image cap">
                  @endif
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="{{ route('post', $post->slug) }}" class="btn btn-primary">Leer más</a>
                  </div>
                </div>

            @endforeach

            {{ $posts->render('admin.partials.pagination') }}

        </div>
    </div>
</div>
@endsection
