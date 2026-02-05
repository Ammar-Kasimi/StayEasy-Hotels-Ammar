@extends('layouts.gerant')
@section('main')


<div class="card-body">
    <form method="POST" action="{{ route('hotel.store') }}">
        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Hotel Name</label>
            <input type="text" name='hotel_name' class="form-control" placeholder="Room 101">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Hotel address(city)</label>
                        <input type="text" name="hotel_address" class="form-control" placeholder="rabat">

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
@endsection