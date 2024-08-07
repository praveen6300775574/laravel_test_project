<!DOCTYPE html>
<html>
<head>
    <title>Show Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>Show Student Details</h2>
            <a class="btn btn-primary float-right" href="{{ route('students.index') }}">Back</a>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $student->name }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $student->email }}
                    </div>
                    <div class="form-group">
                        <strong>Phone:</strong>
                        {{ $student->phone }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Education:</strong>
                        {{ $student->education }}
                    </div>
                    <div class="form-group">
                        <strong>Percentage:</strong>
                        {{ $student->percentage }}
                    </div>
                    <div class="form-group">
                        <strong>Year of Passed:</strong>
                        {{ $student->year_of_passed }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-4 mb-4">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
