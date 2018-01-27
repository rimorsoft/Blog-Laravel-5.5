@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">
            
        <div class="card col-md-10 p-0 mb-5">
          <div class="card-header">
            Lista de Categorias <a type="button" href="{{ route('categories.create') }}" class="btn btn-success float-right">Crear</a>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td>{{ $category->name }}</td>
                  <td class="d-flex flex-row-reverse">
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                        <button class="btn btn-sm btn-danger ml-3">
                            Eliminar
                        </button>                           
                    {!! Form::close() !!}
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-light ml-3">Editar</a>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-light ml-1">Ver</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <div class="float-right"> {{ $categories->render('admin.partials.pagination') }} </div>
          </div>
        </div>
  
    </div>
</div>

@endsection
