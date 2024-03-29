@extends('Layouts.master')

@section('content')
    <main class="flex-shrink-0" style="height: 80vh">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>To-do List</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-group">
                        @foreach($tasks as $task)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $task->title }}
                                <span class="badge bg-primary rounded-pill">
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="text-white">Edit</a>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection



