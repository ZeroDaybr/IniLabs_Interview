@extends('Layouts.master')

@section('content')
    <main class="flex-shrink-0" style="height: 80vh">

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>Create New Task</h2>
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
