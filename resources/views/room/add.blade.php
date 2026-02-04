@extends('layouts.gerant')

@section('main')

<div class="row align-items-end mb-4">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted small">Dashboard</a></li>
                <li class="breadcrumb-item active small" aria-current="page">Rooms</li>
            </ol>
        </nav>
        <h2 class="fw-bold mb-0 text-dark">Add Room</h2>
    </div>
</div>

<hr class="mb-4 text-muted opacity-25">

<div class="card-body">
    <form method="POST" action="room/store">
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
            <a href="{{ route('room.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Save Room</button>
        </div>
        
    </form>
</div>
@endsection

