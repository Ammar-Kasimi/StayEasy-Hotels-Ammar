<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h4 class="mb-0">Edit Room</h4>
                </div>

                <div class="card-body">
                    <form>

                        <div class="mb-3">
                            <label class="form-label">Room Name</label>
                            <input type="text" class="form-control" value="Room 101">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Room Type</label>
                            <select class="form-select">
                                <option selected>Single</option>
                                <option>Double</option>
                                <option>Suite</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price per Night</label>
                            <input type="number" class="form-control" value="50">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option selected>Available</option>
                                <option>Occupied</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="admin-rooms.html" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-warning">Update Room</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
