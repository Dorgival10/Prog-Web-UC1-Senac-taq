@extends('layouts.app')
@section('title','Listagem')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h2>Lista de Tarefas</h2>
        </div>
        <div class="col-sm-2">
            <a href="{{route('tarefas-create')}}" class="btn btn-success">Nova Tarefa</a>
        </div>


    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descriçao</th>
                <th scope="col">Status</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
            <tr>

                <td>{{$tarefa->id}}</td>
                <td>{{$tarefa->nome}}</td>
                <td>{{$tarefa->descricao}}</td>
                <td>{{$tarefa->status}}</td>
                <td class="d-flex">
                    <a href="{{route('tarefas-edit',['id' => $tarefa->id])}}" class="btn btn-primary me-4">
                        <i class="bi bi-pencil "></i>
                    </a>

                    <form action="{{route('tarefas-destroy', ['id'=> $tarefa->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash "></i>
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection