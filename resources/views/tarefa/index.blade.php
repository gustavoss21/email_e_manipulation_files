@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tarefas
                    <a style="float: right;" href="{{route('tarefa.create')}}">Nova Tarefa</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">nome</th>
                            <th scope="col">validade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tarefas as $tarefa)
                                <tr>
                                    <th scope="row">{{$tarefa->id}}</th>
                                    <td>{{$tarefa->tarefa}}</td>
                                    <td>{{ date('d/m/Y',strtotime($tarefa->validade))}}</td>
                                    <td><a href="{{route('tarefa.edit', ['tarefa'=>$tarefa->id])}}">editar</a></td>
                                    <td>
                                        <a href="{{route('tarefa.destroy', ['tarefa'=>$tarefa->id])}}"></a>
                                        <form method="post" action="{{ route('tarefa.destroy', ['tarefa' => $tarefa->id])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="">apagar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <nav aria-label="Navegação de página exemplo">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{$tarefas->previousPageUrl()}}">Anterior</a></li>
                            @for($index=1; $index <= $tarefas->lastPage(); $index++)
                            <li class="page-item {{ $tarefas->currentPage() == $index ? 'active':''}}">
                                <a class="page-link" href="{{$tarefas->url($index)}}">{{$index}}</a>
                            </li>
                            @endfor
                            <li class="page-item">
                                <a class="page-link" href="{{$tarefas->nextPageUrl()}}">Próximo</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
