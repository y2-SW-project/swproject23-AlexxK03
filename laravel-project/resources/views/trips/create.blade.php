@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Create a new trip </h1>
    <form action="{{ route('trips.store') }}" method="post">
        @csrf
        <input type="text" class="form-control m-2" name="destination" placeholder="Where you going?" :value=@old>
        @error('destination')
            {{ $message }}
        @enderror

        <select name="booking_id">
            @foreach ($booking as $booking)
            <option value="{{ $booking->id }}"
            {{ old('booking_id') == $booking->id ? 'selected' : '' }}>
            {{ $booking->id }}</option>
            @endforeach
        </select>
        
        <button type="submit" value="submit" class="btn btn-primary">Add New Trip</button>
    </form>
@endsection
