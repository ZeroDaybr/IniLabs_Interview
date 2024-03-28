<!-- resources/views/employees/update.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Salary</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Update Employee Salary</h2>
        <form method="POST" action="/employees/{{ $employee->id }}">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" name="salary" id="salary" class="form-control" value="{{ $employee->salary }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Salary</button>
        </form>
    </div>
</body>
</html>
