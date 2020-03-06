<?php

namespace App\Http\Controllers;

use App\Forms\TaskForm;
use App\Task;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', compact('tasks'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(TaskForm::class, [
            'method' => 'POST',
            'url' => route('task.store')
        ]);

        return view('task.create', compact('form'));
    }

    public function done($id)
    {
        Task::where('id', $id)->update([
            'done' => new \DateTime(),
        ]);

        return redirect(route('task.index'));
    }

    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(TaskForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        Task::create($request->only(['title', 'content', 'due']));

        return redirect(route('task.index'));
    }
}
