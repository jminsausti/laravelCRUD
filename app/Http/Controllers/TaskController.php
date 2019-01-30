<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->ajax())return redirect('/');
        $task = Task::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    
    public function store(Request $request)
    {
        if(!$request->ajax())return redirect('/');
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();
        //Esta función guardará las tareas que enviaremos mediante vuejs
    }

    public function show(Request $request)
    {
        if(!$request->ajax())return redirect('/');
        $task = Task::findOrFail($request->id);
        return $task;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    
    public function update(Request $request)
    {
        if(!$request->ajax())return redirect('/');
        $task = Task::findOrFail($request->id);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();
        //Esta función actualizará la tarea que hayamos seleccionado
    }

    public function destroy(Request $request)
    {
        if(!$request->ajax())return redirect('/');
        $task = Task::destroy($request->id);
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}
