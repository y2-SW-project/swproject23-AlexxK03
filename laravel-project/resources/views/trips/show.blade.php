@extends('layouts.app')

@section('content')

<a href="{{ route('trips.edit', $trip->id) }}"><button type="button" class="btn btn-primary">Update trip</button></a>

<form action="{{ route('trips.destroy', $trip) }}" method="post">
    @method('delete')
    @csrf

<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this trip')">delete trip</button></a>

<div class="d-flex">
    <p class = "ps-2">
        <strong>Created: </strong> {{$trip->created_at->diffForHumans()}}
    </p>
    <p class = "ps-2">
        <strong>Updated: </strong> {{$trip->updated_at->diffForHumans()}}
    </p>
</div>
<h2>
    <strong>Destination: </strong> {{$trip->destination}}
</h2>
<p>
    <strong>Booking References: </strong>{{$trip->booking->id}}
</p>

<p>
    <strong>You Flight out on:</strong> {{$trip->booking->flight->date}}
    <strong>At:</strong> {{$trip->booking->flight->time}}
</p>
@endsection
