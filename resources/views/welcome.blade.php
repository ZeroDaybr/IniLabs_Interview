@extends('Layouts.master')

@push('style')
<style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .center {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
</style>
@endpush
@section('content')
    <main class="flex-shrink-0" style="height: 84vh">
        <div class="container center">
            <h1 class="mt-5">About Me</h1>
            <p class="lead">I'm a Computer Science Engineer from Daffodil International University, specializing in Laravel, HTML, CSS, and JavaScript.</p>
        </div>
    </main>

</head>

@endsection
