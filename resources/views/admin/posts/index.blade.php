@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-md-center">
            
        <div class="card border-light border-bottom-0 p-0 m-0 col-md-12 ">
          <div class="card-header d-flex justify-content-between">Lista de entradas
           <a href="{{ route('posts.create') }}" class="btn-sm btn btn-primary">
            Crear
           </a>
          </div>

        </div>


        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th colspan="3">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->name }}</td>
              <td class="d-flex flex-row-reverse">
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-sm btn-danger ml-3">
                        Eliminar
                    </button>                           
                {!! Form::close() !!}
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-light ml-3">Editar</a>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-light ml-1">Ver</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>


        <!--<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Entradas 
                    <a href="{{ route('posts.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                    {{ $posts->render() }}
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
