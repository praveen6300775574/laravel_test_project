<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>Edit Student</h2>
            <a class="btn btn-primary float-right" href="{{ route('students.index') }}">Back</a>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label><strong>Name:</strong></label>
                    <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                </div>
                <div class="form-group">
                    <label><strong>Email:</strong></label>
                    <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                </div>
                <div class="form-group">
                    <label><strong>Phone:</strong></label>
                    <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
                </div>
                <div class="form-group">
                    <label><strong>Education:</strong></label>
                    <input type="text" name="education" class="form-control" value="{{ $student->education }}">
                </div>
                <div class="form-group">
                    <label><strong>Percentage:</strong></label>
                    <input type="number" step="0.01" name="percentage" class="form-control" value="{{ $student->percentage }}">
                </div>
                <div class="form-group">
                    <label><strong>Year of Passed:</strong></label>
                    <input type="number" name="year_of_passed" class="form-control" value="{{ $student->year_of_passed }}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
