@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">

        <div class="card col-sm-10 p-0">
          <div class="card-header">
            Editar entrada
          </div>
          <div class="card-body">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
                        
                @include('admin.posts.partials.form')

            {!! Form::close() !!
          </div>
        </div>

    </div>
</div>

@endsection
