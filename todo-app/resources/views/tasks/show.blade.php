@extends('layout.app')

@section('title', 'Sarcina ' . $task['id'])

@section('content')
    <h1>{{ $task['title'] }} (ID: {{ $task['id'] }})</h1>
    <p>{{ $task['description'] }}</p>
@endsection

@section('task')
<x-task title="Sarcina 1" description="Descrierea Sarcina 1" created_at="2024-10-10" updated_at="2024-10-10" status="Finalizat" priority="Scazuta" assignment="Narte Mihai" />
@endsection