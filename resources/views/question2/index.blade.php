@extends('Layouts.master')

@section('content')
    <main class="flex-shrink-0" style="height: 80vh">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Question 1</h1>
                    <p style="text-align: justify">**Task 1: Class Inheritance**</p>
                    <p style="text-align: justify">Create classes to represent geometric shapes, including circles and rectangles. Implement methods for area calculation. You can use the provided example code as a reference.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('calculate.area') }}">
                        @csrf
                        <div class="form-group">
                            <label for="shape_type">Select Shape:</label>
                            <select class="form-control mt-2" id="shape_type" name="shape_type">
                                <option value="circle">Circle</option>
                                <option value="rectangle">Rectangle</option>
                            </select>
                        </div>
                        <div id="radius_input" class="form-group mt-2">
                            <label for="radius">Radius:</label>
                            <input type="number" class="form-control mt-2" id="radius" name="radius">
                        </div>
                        <div id="length_width_input" class="form-group " style="display:none;">
                            <label for="length">Length:</label>
                            <input type="number" class="form-control" id="length" name="length">
                            <label for="width">Width:</label>
                            <input type="number" class="form-control" id="width" name="width">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Calculate Area</button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('shape_type').addEventListener('change', function() {
                var shapeType = this.value;
                if (shapeType === 'circle') {
                    document.getElementById('radius_input').style.display = 'block';
                    document.getElementById('length_width_input').style.display = 'none';
                } else if (shapeType === 'rectangle') {
                    document.getElementById('radius_input').style.display = 'none';
                    document.getElementById('length_width_input').style.display = 'block';
                }
            });
        </script>
    </main>
@endsection
