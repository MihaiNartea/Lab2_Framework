@extends('layout.app')

@section('title', 'Crearea unei Sarcini')

@section('content')

<div>
    <h2 class="font-bold text-2xl text-center">Add Task</h2>
    <form method="POST" action="" class="flex flex-col gap-2 p-5 m-2 ">
        <input type="text" name="title" placeholder="Title" class="p-1 bg-gray-200 outline-none indent-2 border-b-2 border-black">
        <input type="text" name="description" placeholder="Description" class="p-1 bg-gray-200 outline-none indent-2 border-b-2 border-black">
        <input type="text" name="status" placeholder="Stare" class="p-1 bg-gray-200 outline-none indent-2 border-b-2 border-black">
        <input type="text" name="priority" placeholder="Prioritate" class="p-1 bg-gray-200 outline-none indent-2 border-b-2 border-black">
        <input type="text" name="assignment" placeholder="Responasabil" class="p-1 bg-gray-200 outline-none indent-2 border-b-2 border-black">
        <button class="bg-blue-500 text-white mt-5 py-1 px-2 rounded hover:bg-blue-600">Add</button>
    </form>
</div>

@endsection
