@extends('layouts.booking')
@section('content')
    <div class="m-5">
        <form action="{{ route('booking') }}" method="post">
            @csrf
            <div class="row m-3">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input name="name" class="form-control" id="inputEmail4" placeholder="Email"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row m-3">
                <div class="form-group  col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"
                        value="{{ old('address') }}">
                    @error('address')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="inputAddress">Phone</label>
                    <input type="number" name="phone" class="form-control" id="inputAddress" placeholder="1234 Main St"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-row col-md-3">
                    <label for="inputZip">Number Of Members</label>
                    <input type="number" name="number_of_members" class="form-control" id="inputZip"
                        value="{{ old('number_of_members') }}">
                    @error('number_of_members')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row m-3">
                <div class="form-group col-md-6">
                    <label for="datePicker">Date</label>
                    <input type="date" name="date" class="form-control" id="datePicker" value="{{ old('date') }}">
                    @error('date')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="timePicker">Time</label>
                    <input type="time" name="time" class="form-control" id="timePicker" value="{{ old('time') }}">
                    @error('time')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row m-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
