<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => "Sarcina 1", 'description' => "Descrierea 1"],
            ['id' => 2, 'title' => "Sarcina 2", 'description' => "Descrierea 2"]
        ];

        return view('tasks.index', ['tasks' => $tasks]);
    }


    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
    
    $task = [
        'id' => $id,
        'title' => 'Sarcina ' . $id,
        'description' => 'Aceasta este descrierea sarcinii ' . $id
    ];

    return view('tasks.show', ['task' => $task]);
    }   

    public function edit(string $id)
    {
        return view('tasks.edit');
    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}