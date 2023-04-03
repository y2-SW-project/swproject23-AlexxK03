@extends('layouts.app')

@section('content')
    <div>
        <h2 class="d-flex justify-content-center">Your Trips</h2>
    </div>
    
    <div class="container p-2">
        <a href="{{route('trips.create')}}"><button type="button" class="btn btn-primary">Add a new Trip</button></a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md d-flex">
                @forelse($trips as $trip)
                    <div class="card mx-2">
                        <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-social.png" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <a href="{{ route('trips.show', $trip->id) }}">
                                <h3 class="card-title"><strong>Destination: </strong>{{ $trip->destination }}<h3>
                            </a>

                            <p><small>
                                    Last Updated: {{ $trip->updated_at->diffForHumans() }}
                            </p></small>

                        </div>
                    </div>
                @empty
                    <p>You have no trips logged</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
