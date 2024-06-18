<!-- resources/views/colleges/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>All Colleges</h1>
    <ul>
        @foreach ($colleges as $college)
            <li>
                {{ $college->collfullname }}
                <ul>
                    @foreach ($college->programs as $program)
                        <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('college.show', ['id' => $college->collid]) }}">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
