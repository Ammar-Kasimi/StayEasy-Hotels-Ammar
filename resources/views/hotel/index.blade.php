@extends('layouts.gerant')
@section('main')




<div class="card-body">
    <form method="POST" action="{{ route('hotel.store') }}">
        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Hotel Name</label>
            <input type="text" name='name' class="form-control" placeholder="hottail">
        </div>

        <div class="mb-3">
            <label class="form-label">Hotel address(city)</label>
            <input type="text" name="address" class="form-control" placeholder="rabat">

            <!-- <select class="form-select">
                <option selected disabled>Choose type</option>
                <option>Single</option>
                <option>Double</option>
                <option>Suite</option>
            </select> -->
        </div>



        <div class="d-flex justify-content-between">
            <a href="{{ route('hotel.store') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Save hotel</button>
        </div>

    </form>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th class="ps-4">Hotel name</th>
                    <th>address</th>
                    
                    <th>Status</th>
                    <th class="text-end pe-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel )
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                            <img src={{ $hotel->img }} class="room-img">
                            <div>
                                <div class="fw-bold">{{$hotel->name}}</div>
                                <!-- <div class="text-muted small">Floor 1 • Ocean View</div> -->
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-light text-dark fw-medium">{{ $hotel->address }}</span></td>
                    <td><span class="fw-bold text-primary">{{$hotel->status}}</span></td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-2">
                            <span class="status-dot bg-success"></span>Available
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <a class="btn btn-light btn-action text-warning border" title="Edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-light btn-action text-danger border" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                
        </table>
    </div>
    @endsection