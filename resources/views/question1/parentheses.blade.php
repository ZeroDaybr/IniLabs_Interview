@extends('Layouts.master')

@section('content')
    <main class="flex-shrink-0" style="height: 80vh">
        <div class="container mt-5 px-3 ">
            <div class="row mt-5">
                <div class="col mt-5">
                    <h1 class="text-center">Question 1</h1>
                    <p style="text-align: justify">**Task 0: Valid Parentheses**</p>
                    <p style="text-align: justify">Given a string containing just the characters '(', ')', '{', '}', '[' and
                        ']', determine if the input string is valid.
                        An input string is valid if:
                        Open brackets must be closed by the same type of brackets.
                        Open brackets must be closed in the correct order.
                        Implement an algorithm to validate the parentheses efficiently.
                    </p>
                    <p>
                        Example:
                        Input: "()[]{}" <br>
                        Output: true <br>
                        Input: "([)]" <br>
                        Output: false
                    </p>
                </div>
                <div>
                    <form method="POST" action="{{ route('validate.parentheses') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="parentheses"
                                placeholder="Enter parentheses string" required>
                            <button class="btn btn-outline-success" type="submit" id="button">Validate</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">
                    @if (isset($isValid))
                        <h1><span
                                class="badge bg-{{ $isValid ? 'success' : 'danger' }}">{{ $isValid ? 'The Input is Valid' : 'The Input is Not Valid' }}</span>
                        </h1>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
