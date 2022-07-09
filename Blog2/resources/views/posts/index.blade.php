@extends('posts.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('posts.create') }}" class="btn btn-success">Criar Novo Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->titulo }}</td>
            <td>{{ \Str::limit($value->descricao, 100) }}</td>
            <td>
                <form action="{{ route('posts.destroy' ,$value->id) }}" method="POST">
                    <a href="{{ route('posts.show' ,$value->id) }}" class="btn btn-info">Sobre</a>
                    <a href="{{ route('posts.edit' ,$value->id) }}" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    @endsection