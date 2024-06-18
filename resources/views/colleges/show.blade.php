<!-- resources/views/colleges/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>College Details</h1>
    <p>Name: {{ $college->collfullname }}</p>
    <h2>Departments</h2>
    <ul>
        @foreach ($college->departments as $department)
            <li>
                {{ $department->deptfullname }}
                <ul>
                    @foreach ($department->programs as $program)
                        <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('colleges.all') }}">Back to All Colleges</a>
@endsection
