@extends('layouts.app')

@section('content')

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
@endsection
