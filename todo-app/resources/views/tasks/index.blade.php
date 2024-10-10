@extends('layout.app')

@section('title', 'Lista de Sarcini')

@section('content')
    <h1 class="font-bold text-2xl">Lista de Sarcini</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task['title'] }} - {{ $task['description'] }}</li>
            @endforeach
        </ul>
    @else
        <p>Nu există sarcini de afișat.</p>
    @endif
@endsection