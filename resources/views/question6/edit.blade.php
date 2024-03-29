@extends('Layouts.master')

@section('content')
    <main class="flex-shrink-0" style="height: 80vh">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Task</h2>
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
