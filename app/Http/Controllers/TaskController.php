<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks  = Task::all();

        return view('user.taskboard', compact('tasks'));
    }

    public function create(Request $request)
    {
        $task  = Task::create([
           'title'  => $request->title,
           'text'  => $request->text,
           'id_user'  => $request->id_user,
           'id_service'  => $request->id_service,
           'deadline'  => $request->deadline,
        ]);
        $task->save();

        return back()->with('success', 'Task created successfully.');
    }


    public function delete(Request $request, $id = null)
    {
        $selected = [];

        if ($id) {
            $selected[] = $id;
        } else {
            $selected = $request->id;
        }

        if ($selected) {
            Task::whereIn('id', $selected)->delete();

            return redirect()->back()->with('success', 'Selected items have been deleted successfully.');
        }

        return redirect()->back()->with('error', 'No items selected or an error occurred.');
    }


}
