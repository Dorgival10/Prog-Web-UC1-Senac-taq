<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    //
    public function index()
    {
        $tarefaBD = Tarefa::all();
        return view("tarefas.index", ['tarefas' => $tarefaBD]);
    }
    public function create()
    {
        return view('tarefas.create');
    }
    public function store(Request $request)
    {
        Tarefa::create($request->all());
        return redirect()->route('tarefas-index');
    }
    public function edit($id)
    {
        $dados = Tarefa::where('id', $id)->first();
        if (!empty($dados)) {
            return view('tarefas.edit', ['tarefas' => $dados]);
        } else {
            return redirect()->route('tarefas-index');
        }
    }
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ];
        Tarefa::where('id', $id)->update($data);
        return redirect()->route('tarefas-index');
    }
    public function destroy($id){
        Tarefa::where('id', $id)->delete();
        return redirect()->route('tarefas-index');
    }
}
