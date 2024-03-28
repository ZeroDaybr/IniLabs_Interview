@extends('Layouts.master')

@push('style')
<style>
    .result {
        margin-top: 20px;
    }
</style>

@endpush

@section('content')
    <main class="flex-shrink-0" style="height: 80vh">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Polymorphism Demo</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="text-center">Question 5</h1>
                    <p style="text-align: justify">**Task 4: Polymorphism**</p>
                    <p style="text-align: justify">Build a set of animal classes that demonstrate polymorphism by overriding a method for making sounds.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <ul class="list-group">
                        @foreach ($sounds as $animal => $sound)
                            <li class="list-group-item">{{ $animal }} sounds like : {{ $sound }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
