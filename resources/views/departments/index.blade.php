<!-- resources/views/departments/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>All Departments</h1>
    <ul>
        @foreach ($departments as $department)
            <li>
                {{ $department->deptfullname }}
                @if ($department->college)
                    <p>Related College: {{ $department->college->collfullname }}</p>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
