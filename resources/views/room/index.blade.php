@extends('layouts.gerant')
        @section('main')
        
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="custom-card p-4">
                    <span class="text-muted small fw-bold">OCCUPANCY RATE</span>
                    <h2 class="fw-bold mb-0">84%</h2>
                    <div class="progress mt-3" style="height: 6px;">
                        <div class="progress-bar bg-primary" style="width: 84%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card p-4 text-center">
                    <a href="room/create" class="btn btn-primary w-100 py-3 rounded-4 shadow-sm fw-bold">
                        <i class="fa-solid fa-plus me-2"></i> Register New Room
                    </a>
                </div>
            </div>
        </div>

        <div class="custom-card">
            <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-white">
                <h5 class="mb-0 fw-bold">Current Inventory</h5>
                <button class="btn btn-outline-secondary btn-sm rounded-3"><i class="fa-solid fa-filter me-2"></i>Filters</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ps-4">Room info</th>
                            <th>Category</th>
                            <th>Daily Rate</th>
                            <th>Status</th>
                            <th class="text-end pe-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=100&q=80" class="room-img">
                                    <div>
                                        <div class="fw-bold">Executive Suite 101</div>
                                        <div class="text-muted small">Floor 1 • Ocean View</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark fw-medium">Deluxe</span></td>
                            <td><span class="fw-bold text-primary">$120.00</span></td>
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
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=100&q=80" class="room-img">
                                    <div>
                                        <div class="fw-bold">Standard Double 202</div>
                                        <div class="text-muted small">Floor 2 • City View</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark fw-medium">Double</span></td>
                            <td><span class="fw-bold text-primary">$85.00</span></td>
                            <td>
                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2">
                                    <span class="status-dot bg-danger"></span>Occupied
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                <button class="btn btn-light btn-action text-warning border" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-light btn-action text-danger border" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endsection