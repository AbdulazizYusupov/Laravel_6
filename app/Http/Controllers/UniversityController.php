<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $models = University::orderBy('id', 'asc')->get();
        return view('University.index', ['models' => $models]);
    }
    public function create()
    {
        return view('University.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = $request->all();

        University::create($data);

        return redirect('/')->with('create', 'Created');
    }
    public function update(Request $request, University $univer)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);

        $univer->update($data);

        return redirect('/')->with('update', 'Updated');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $destroy = University::findOrFail($id);
        $destroy->delete();
        return redirect('/')->with('delete', 'deleted');
    }
    public function search(Request $request)
    {
        $models = University::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'asc')->paginate(5);
        return response()->json($models);
    }
}
