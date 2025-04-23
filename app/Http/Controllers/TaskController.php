<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('task_create');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create( Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);
        $title = $request->input('title');
        $description = $request->input('description');

        $object = new Task();
        $object->title = $title;
        $object->description = $description;

        $object->save();
       // return redirect()->back()->with('sucess', "data inserted sucessfully")->withInput();
       return redirect(url('/task-read'));
       //dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task, string $id)
    {
        $object['data'] =Task::all();

        return view('task_read', $object);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task, string $id)
    {
        $object['data']= Task::find($id);
        return view('task_edit',$object);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $object= Task::find($id);

        $object->title = $title;
        $object->description = $description;

        $object->save();
       return redirect(url('/task-read'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task, string $id)
    {
        $object= Task::find($id);
        $object->delete();
       return redirect(url('/task-read'));


    }
}
