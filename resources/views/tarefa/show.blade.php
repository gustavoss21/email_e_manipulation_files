@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$tarefa->tarefa}}</div>

                <div class="card-body">
                        {{$tarefa->validade}}
                        <a href="{{url()->previous()}}" type="btn" class="btn btn-primary">voltar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
