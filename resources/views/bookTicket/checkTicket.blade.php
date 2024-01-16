@extends('layouts.booking')
@section('content')
    <div class="m-5">
        <h2>Check my Tickets</h2>
        <form method="post" action="{{ route('checkTicket')}}">
            @csrf
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="row m-4">
                <button type="submit" class="btn btn-primary">Check</button>
            </div>
        </form>
    </div>
@endsection
