<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Mail;
use App\Mail\NovaTarefaMail;
class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tarefa = Tarefa::create($request->all());
        $destinatario = auth()->user()->email;

        Mail::to($destinatario)->send(new NovaTarefaMail($tarefa));
        return redirect()->route('tarefa.show', ['tarefa'=>$tarefa->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        dd($tarefa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
