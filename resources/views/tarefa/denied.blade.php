@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Acesso negado</div>

                <div class="card-body">
                    <p>Função indisponível para seu usuario!</p>
                    <span>voltar a </span>
                    <a href="{{route('tarefa.index')}}">pagina inicial</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
