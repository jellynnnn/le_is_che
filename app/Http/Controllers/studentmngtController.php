<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class studentmngtController extends Controller
{
    public function index () {
        $students = \App\Models\student::all();
        return view ('student.index',compact('students'));
    }

    public function create () {
        return view ('student.create');
    }

   public function store (Request $request) {
        $request->validate([
            'stud_lname' => 'required',
            'stud_fname' => 'required',
            'stud_mname' => 'required',
            'stud_age' => 'required|integer',
            'stud_email' => 'required|email|unique:student_teybol,stud_email',
        ]);

        student::create($request->all());
        return redirect()->route('student.index')->with('success', 'Student created successfully.');
    }

    public function edit($id) {
        $student = student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'stud_lname' => 'required',
            'stud_fname' => 'required',
            'stud_mname' => 'required',
            'stud_age' => 'required|integer',
            'stud_email' => 'required|email|unique:student_teybol,stud_email,' . $id,
        ]);

        $student = student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id) {
        $student = student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }
}
