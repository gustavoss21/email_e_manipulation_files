@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Adicionar tarefa
                    <a style="float: right;" href="{{route('tarefa.index')}}">voltar</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('tarefa.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="tarefa" class="form-label">Tarefa</label>
                            <input type="text" name="tarefa" class="form-control" id="tarefa" aria-describedby="tarefaHelp">
                        </div>
                        <div class="mb-3">
                            <label for="validade" class="form-label">Data</label>
                            <input type="date" name="validade" name="validade" class="form-control" id="validade">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
