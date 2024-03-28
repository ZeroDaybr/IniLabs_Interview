<!-- resources/views/animals/polymorphism-demo.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Polymorphism Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .result {
            margin-top: 20px;
        }
    </style>
</head>

<body>


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
</body>

</html>
