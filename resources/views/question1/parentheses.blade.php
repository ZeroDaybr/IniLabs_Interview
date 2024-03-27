<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Validate Parentheses</title>
</head>

<body>

    <div class="container mt-5 px-3 ">
        <div class="row mt-5">
            <div class="col mt-5">
                <h1 class="text-center">Question 1</h1>
                <p style="text-align: justify">**Task 0: Valid Parentheses**</p>
                <p style="text-align: justify">Given a string containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
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
                        <button class="btn btn-outline-success" type="submit"
                            id="button">Validate</button>
                    </div>
                </form>
            </div>
            <div class="text-center">
                @if(isset($isValid))
                        {{-- <p class="text-{{ $isValid ? 'success' : 'danger' }}">{{ $isValid ? 'The Input is Valid' : 'The Input is Not Valid' }}</p> --}}

                        <h1><span class="badge bg-{{ $isValid ? 'success' : 'danger' }}">{{ $isValid ? 'The Input is Valid' : 'The Input is Not Valid' }}</span></h1>
                    @endif

                    {{-- @if(isset($isValid))
                        @if($isValid)
                            <button class="btn btn-success" disabled>Valid</button>
                            <button class="btn btn-secondary" disabled>Not Valid</button>
                        @else
                            <button class="btn btn-secondary" disabled>Valid</button>
                            <button class="btn btn-danger" disabled>Not Valid</button>
                        @endif
                    @endif --}}
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
