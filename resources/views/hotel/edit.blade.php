@extends('layouts.gerant')
@section('main')

<div class="card-body">
    <h4 class="card-title">Edit Hotel</h4>
    <p class="card-description">
      
    </p>
    <form action={{ route('hotel.update') }} class="forms-sample">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputUsername1">Hotel name</label>
            <input type="text" value={{ $hotel->name }} class="form-control" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address(city)</label>
            <input type="text" value={{ $hotel->address }} class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Hotel main image(url)</label>
            <input type="text" value={{ $hotel->img }} class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputConfirmPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
        </div> -->
        <!-- <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Remember me
                <i class="input-helper"></i></label>
        </div> -->
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
    </form>
</div>
@endsection