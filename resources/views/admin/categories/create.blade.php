@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">

        <div class="card col-sm-10 p-0">
          <div class="card-header">
            Crear categoría
          </div>
          <div class="card-body">
                {!! Form::open(['route' => 'categories.store']) !!}
                    
                    @include('admin.categories.partials.form')

                {!! Form::close() !!}
          </div>
        </div>

    </div>
</div>

@endsection
