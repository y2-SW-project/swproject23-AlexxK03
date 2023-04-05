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

    <div class="container-fluid bg-secondary text-black mt-5 py-5">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase fw-bold fs-6 pb-3">
                        <small>about us</small>
                    </p>
                    <h3>Get Started</h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa,
                        incidunt maiores! Unde error sint suscipit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, error!
                    </p>
                </div>
                <div class="col">
                    <p class="text-uppercase fw-bold fs-6 pb-3">
                        <small>Get in touch</small>
                    </p>
                    <h3>Follow us</h3>
                    <ul class="list-group list-group-flush">
                        <li
                            class="d-flex list-group-item bg-secondary text-black fs-5 border-0 px-0 py-1"
                        >
                        <i class="bi bi-instagram"></i>
                        <p class="ps-2">Instagram</p>
                        </li>
                        <li
                            class=" d-flex list-group-item bg-secondary text-black fs-5 border-0 px-0 py-1"
                        >
                        <i class="bi bi-twitter"></i>
                        <p class="ps-2">Twitter</p>
                        </li>
                        <li
                            class="d-flex list-group-item bg-secondary text-black fs-5 border-0 px-0 py-1"
                        >
                        <i class="bi bi-tiktok"></i>
                        <p class="ps-2">TikTok</p>
                        </li>
                        <li
                            class="d-flex list-group-item bg-secondary text-black fs-5 border-0 px-0 py-1"
                        >
                        <i class="bi bi-facebook"></i>
                        <p class="ps-2">Facebook</p>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- footer end -->
@endsection
