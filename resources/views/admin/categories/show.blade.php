@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">

        <div class="card col-sm-10 p-0">
          <div class="card-header">
            Ver categoría
          </div>
          <div class="card-body">
            <p><strong>Nombre</strong> {{ $category->name }}</p>
            <p><strong>Slug</strong> {{ $category->slug }}</p>
            <p class="text-justify"><strong>Descripción</strong> {{ $category->body }}</p>
          </div>
        </div>

    </div>
</div>

@endsection
