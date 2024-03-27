<!DOCTYPE html>
<html>
<head>
    <title>Shape Area Calculation Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
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
</body>
</html>
