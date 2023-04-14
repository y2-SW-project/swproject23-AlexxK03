@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Update Trip</h1>
    <form action="{{ route('trips.edit', $trip->id) }}" method="post">
        @method('put')
        @csrf
        <input
        type="text"
        class="form-control m-2"
        name="destination"
        value="{{$trip->destination}}">
        @error('destination')
            {{ $message }}
        @enderror

        <select name="booking_id">
            @foreach ($booking as $booking)
            <option value="{{ $booking->id }}"
            @selected(old('booking_id',$booking->id) == $trip->booking_id)>
            {{ $booking->id }}</option>
            @endforeach
        </select>

        <button type="submit" value="submit" class="btn btn-primary">Add New Trip</button>
    </form>
@endsection
