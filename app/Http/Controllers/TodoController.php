<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
class TodoController extends Controller
{
    public function index($filter = 'All')
    {
        if ($filter == 'Complete') {
            $todos = todo::where('status', 'انجام شده')->get();
        }
        elseif($filter == 'NComplete') {
            $todos = todo::where('status', 'انجام نشده')->get();
        }
        elseif ($filter == 'All') {
            $todos = todo::all();
        }
        return view('welcome', compact('todos'));
    }

    public function add(Request $request)
    {
        $nameSave = new TODO;
        $nameSave->name = $request->name;
        $nameSave->status = 'انجام نشده';
        $nameSave->save();

        return redirect()->back()->with('success', 'Todo Added Successfully...');
    }

    public function delete($id)
    {
        $T_delete = todo::where('id', $id)->delete();  
        if ($T_delete) {
            return redirect()->back()->with('success', 'Todo Deleted Successfully...');
        }  
    }

    public function done($id)
    {
        $T_update = todo::where('id', $id)->update(['status' => 'انجام شده']);  
        if ($T_update) {
            return redirect()->back()->with('success', 'Todo Done Successfully');
        }  
    }

    public function editForm($id)
    {
        $TodoDetails = todo::find($id);
        return view('editTodo', compact('TodoDetails'));
    }

    public function edit(Request $request)
    {
        $T_update = todo::where('id', $request->id)->update(['name' => $request->todo]);  
        if ($T_update) {
            return redirect('/');
        }  
    }
}
