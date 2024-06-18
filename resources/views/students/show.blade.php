<!-- resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>
    <p>Name: {{ $student->studfirstname }} {{ $student->studlastname }}</p>
    <p>Program: {{ $student->program->progfullname }}</p>
    <p>College: {{ $student->college->collfullname }}</p>
    <p>Year: {{ $student->studyear }}</p>
    <a href="{{ route('students.all') }}">Back to All Students</a>
@endsection
