@extends('Layouts.master')

@push('style')
<style>
    .result-container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 50px;
    }
</style>
@endpush

@section('content')
    <main class="flex-shrink-0" style="height: 80vh">
        <div class="container d-flex justify-content-center mx-auto px-auto mt-5 pt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center">Shape Area Calculation Result</h1>
                    <div class="mt-4">
                        <h5 class="card-subtitle mb-2">Shape Type</h5>
                        <p class="card-text">{{ ucfirst($shapeType) }}</p>
                    </div>
                    <div class="mt-4">
                        <h5 class="card-subtitle mb-2">Area</h5>
                        <p class="card-text">{{ $area }}</p>
                    </div>
                    <div class="text-center mt-4">
                        <!-- Back button -->
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
