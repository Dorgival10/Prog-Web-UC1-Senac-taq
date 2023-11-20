@extends('layouts.app')
@section('title','Listagem')

@section('content')
<div class="container mt-5">
    <h2>Cadastre uma Nova Tarefa</h2>
    <hr>
    <form action="{{route('tarefas-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>name</label>
            <input type="text" class="form-control" name="nome" placeholder="digite um nome...">
        </div>
        <br>
        <div class="form-group">
            <label>Descricao</label>
            <input type="text" class="form-control" name="descricao" placeholder="Informe a Descriçao...">
        </div>
        <br>
        <div class="form-group">
            <label>status</label>
            <select class="form-control" id="escolha" name="status">
                <option value="emandamento">Em Andamento</option>
                <option value="naoiniciada">Não iniciada</option>
                <option value="concluida">Concluida</option>
            </select>

        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="cadastrar">

        </div>

    </form>

</div>



@endsection