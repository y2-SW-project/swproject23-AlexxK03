@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Create a new trip </h1>
    <form action="{{ route('trips.store') }}" method="post">
        @csrf
        <input type="text" class="form-control m-2" name="destination" placeholder="Where you going?" :value=@old>
        @error('destination')
            {{ $message }}
        @enderror
        <a href="#" class="btn btn-primary m-2">Add new Trip</a>
    </form>
@endsection
