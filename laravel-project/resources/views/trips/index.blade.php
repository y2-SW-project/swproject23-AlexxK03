@extends('layouts.app')

@section('content')
    <div>
        <h2 class="d-flex justify-content-center">Your Trips</h2>
    </div>
    <div class="row ps-3">
        <div class="col-md-4">
            @forelse($trips as $trip)
                <div class="card">
                    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-social.png" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Destination: </strong>{{ $trip->destination }}<h3>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            @empty
                <p>You have no trips logged</p>
            @endforelse
        </div>
    </div>
@endsection
