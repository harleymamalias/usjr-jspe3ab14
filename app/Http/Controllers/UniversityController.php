<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', ['student' => $student]);
    }

    public function showAllColleges()
    {
        $colleges = College::with('programs')->get();
        return view('colleges.index', ['colleges' => $colleges]);
    }

    public function showCollege($id)
    {
        $college = College::with(['departments', 'programs'])->findOrFail($id);
        return view('colleges.show', ['college' => $college]);
    }

    public function showAllDepartments()
    {
        $departments = Department::with('college')->get();
        return view('departments.index', ['departments' => $departments]);
    }
}

