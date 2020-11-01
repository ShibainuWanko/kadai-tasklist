<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Task;

class TasksController extends Controller
{
    public function index()
    {

        $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}
