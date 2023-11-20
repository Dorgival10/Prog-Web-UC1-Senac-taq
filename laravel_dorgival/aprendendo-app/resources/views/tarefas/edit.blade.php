@extends('layouts.app')
@section('title','Atualizar')

@section('content')
<div class="container mt-5">
    <h2>Atualizar Tarefa</h2>
    <hr>
    <form action="{{route('tarefas-update', ['id' =>$tarefas->id])}}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label>name</label>
            <input type="text" class="form-control" value="{{$tarefas->nome}}" name="nome" placeholder="digite um nome...">
        </div>
        <br>
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" class="form-control" value="{{$tarefas->descricao}}" name="descricao" placeholder="Informe a Descriçao...">
        </div>
        <br>
        <div class="form-group">
            <label>status</label>
            <select class="form-control" id="escolha" name="status">
            <option value="{{$tarefas->status}}">{{$tarefas->status}}</option>
                <option value="emandamento">Em Andamento</option>
                <option value="naoiniciada">Não iniciada</option>
                <option value="concluida">Concluida</option>
            </select>

        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar">

        </div>

    </form>

</div>



@endsection