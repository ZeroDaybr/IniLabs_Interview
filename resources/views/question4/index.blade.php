<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col">
                <h1 class="text-center mb-2">Employees</h1>
                <h2 class="text-center">Question 4</h2>
                <p style="text-align: justify">**Task 3: Encapsulation**</p>
                <p style="text-align: justify">Design a class to manage employee data, demonstrating encapsulation by setting and getting employee salaries securely.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>${{ $employee->salary }}</td>
                                <td>
                                    <form method="POST" action="/employees/{{ $employee->id }}">
                                        @csrf
                                        @method('POST')
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" name="salary" class="form-control"
                                                        value="{{ $employee->salary }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-primary mt-2 btn-block">Update
                                                    Salary</button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
