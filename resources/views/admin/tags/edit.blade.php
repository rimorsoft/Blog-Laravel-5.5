@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">

        <div class="card col-sm-10 p-0">
          <div class="card-header">
            Editar etiqueta
          </div>
          <div class="card-body">
            {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                                    
                @include('admin.tags.partials.form')

            {!! Form::close() !!}
          </div>
        </div>

    </div>
</div>

@endsection
