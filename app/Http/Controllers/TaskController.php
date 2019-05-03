<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function index()
    {
        //$tasks = \App\Task::all();
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $task = new Tasks();
        $task->title = $request->inputTitle;
        $task->content = $request->inputContent;
        $task->due_date = $request->inputDueDate;

        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $task->image = $file;
        } else {
            $fileName = $request->inputFileName;
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = "$fileName.$fileExtension";
            $task->image = $newFileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $task->image = $newFileName;
        }
        $task->save();

        $message = "Tạo Task $request->inputTitle thành công!";
        Session::flash('create-success', $message);
        return redirect()->route('tasks.index', compact('message'));
    }
}
