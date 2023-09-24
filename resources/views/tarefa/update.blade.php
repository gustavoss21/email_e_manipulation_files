@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar tarefa</div>
                <div class="card-body">
                    <form method="post" action="{{ route('tarefa.update', ['tarefa' => $tarefa->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="tarefa" class="form-label">Tarefa</label>
                            <input type="text" name="tarefa" value="{{$tarefa->tarefa}}" class="form-control" id="tarefa" aria-describedby="tarefaHelp">
                        </div>
                        <div class="mb-3">
                            <label for="validade" class="form-label">Data</label>
                            <input type="date" value="{{$tarefa->validade}}" name="validade" name="validade" class="form-control" id="validade">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
