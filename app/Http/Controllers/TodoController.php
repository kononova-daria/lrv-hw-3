<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('index', ['todo'=>Todo::all()]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $form = $request->all();
        $todo->fill($form)->save();
        return redirect()->route('index');
    }

    public function show(int $id)
    {
        return view('show', ['todo' => Todo::find($id)]);
    }
}
