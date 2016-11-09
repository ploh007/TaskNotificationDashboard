<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.landing');
    }

    public function createTasks(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'group' => 'required',
            'dueDate' => 'required',
            'notes' => 'required'
        ]);

        $date = date_create_from_format('YYYY-MM-DD HH:MM:SS', $request->dueDate);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'group' => $request->group,
            'dueDate' => $request->dueDate,
            'notes' => $request->notes,
        ]);

        return response()->json($request);

        // return redirect('/tasks');
        // return;
    }

    /* Fetches the list of tasks associated with the user and returns it as a json value */
    public function getTasks(Request $request)
    {
        $tasks = $this->tasks->forUser($request->user());

        return response()->json(view('app.tasks', ['tasks' => $tasks,])->render(), 200);

        // return response()->json($tasks);
    }

    /*
        Deletes the given tasks using the pair id
    */
    public function deleteTask(Request $request)
    {

        // Validate that tasks is valid
        $this->validate($request, [
            'taskid' => 'exists:tasks,id',
        ]);

        $request->user()->tasks()->where('id', '=', $request->taskid)->delete();

        return response()->json($request);
    }
}
