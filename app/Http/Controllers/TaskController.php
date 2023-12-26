<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function homePage()
    {
        // paginate data
        $tasks = Task::paginate(2);

        return view('Tasks.tasks', compact('tasks'));
    }

    public function saveTask(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // If validation passes, create the task
        $input = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'due_date' => Carbon::parse($request->input('date'))
        ];

        $task = Task::create($input);

        return redirect()->route('home');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        // Validation logic
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date'
        ]);

        // Update the task
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => Carbon::parse($request->due_date)
        ]);

        // Redirect or respond as needed
        return redirect()->route('home')->with('message', 'Task updated successfully');
    }

    public function delete($id)
    {
        $task = Task::find($id)->delete();

        return redirect()->route('home')->with('message', 'Deleted');
    }
}
