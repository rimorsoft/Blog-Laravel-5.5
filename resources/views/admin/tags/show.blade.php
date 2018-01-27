@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">
        <div class="card col-md-10 p-0">
          <div class="card-header">
                Ver etiqueta
          </div>
          <div class="card-body">
                <p><strong>Nombre</strong> {{ $tag->name }}</p>
                <p><strong>Slug</strong> {{ $tag->slug }}</p>
          </div>
        </div>
    </div>
</div>

@endsection
