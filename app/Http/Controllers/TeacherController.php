<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('teachers.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'subject' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Create a new teacher using the validated data
        Teacher::create($validatedData);

        // Redirect to the index page
        return redirect()->route('teachers.index');
    }

    // Display the specified resource.
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    // Show the form for editing the specified resource.
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Teacher $teacher)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'subject' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Update the teacher with the validated data
        $teacher->update($validatedData);

        // Redirect to the index page
        return redirect()->route('teachers.index');
    }

    // Remove the specified resource from storage.
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        // Redirect to the index page
        return redirect()->route('teachers.index');
    }
}
