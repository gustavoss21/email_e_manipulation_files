@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefas</div>
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
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <ul>
                        <li><a class="page-link" href="{{$tarefas->previousPageUrl()}}">proxima</a></li>
                        
                        @for($index=1; $index <= $tarefas->lastPage(); $index++)
                        <li><a class="page-link" href="{{$tarefas->url($index)}}">{{$index}}</a></li>
                        @endfor
                        <li><a class="page-link" href="{{$tarefas->nextPageUrl()}}">anterior</a></li>
                    </ul>
                    {{dd(get_class_methods($tarefas))}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
