<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$todo = Todo::all();

return view('index', compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {
    // dd($request->all());
    Todo::create($request->all());
    return redirect('/')->with('success','todo created successfully!');
   }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
    return view('edit' , compact('todo'));
    }

    
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->task = $request->input('task');
        $todo->status = $request->input('status');
        $todo->save();
        return redirect('/getTodo')->with('success', 'updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/getTodo')->with('success','sucessfully deleted');
    }
}
