@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Create a new trip </h1>


    <form action="{{ route('trips.store') }}" method="post" enctype="multipart/form-data">
        <div class="py-3 my-3">
            <label for="destitnationInput" class="form-label">
                <h3><strong>Where are you going?</strong></h3>
            </label>
            <input type="text" class="form-control" id="destitnationInput">
        </div>
        {{-- @error('destination')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror --}}

        <label for="booking"><strong>Booking Reference: </strong></label>
        <select name="booking_id">
            @foreach ($booking as $booking)
                <option value="{{ $booking->id }}" {{ old('booking_id') == $booking->id ? 'selected' : '' }}>
                    {{ $booking->id }}</option>
            @endforeach
        </select>
        {{-- <label for="documentation"><strong>Neseccary Documents: </strong></label>
  <select name="documentation_id">
    @foreach ($documentation as $documentation)
        <option value="{{ $documentation->id }}"
            {{ old('documentation_id') == $documentation->id ? 'selected' : '' }}>
            {{ $documentation->id }}</option>
    @endforeach
</select> --}}

        <button class="btn btn-primary">Add Trip</button>
        <input type="hidden" name="_token"value="{{csrf_token()}}"/>
    </form>
@endsection
