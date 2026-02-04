<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add New Room</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="room/add">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Room Name</label>
                            <input type="text" class="form-control" placeholder="Room 101">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Room Type</label>
                            <select class="form-select">
                                <option selected disabled>Choose type</option>
                                <option>Single</option>
                                <option>Double</option>
                                <option>Suite</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price per Night</label>
                            <input type="number" class="form-control" placeholder="100">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option>Available</option>
                                <option>Occupied</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('gerant') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Save Room</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
