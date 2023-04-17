@extends('layouts.app')

@section('content')
    <div>
        <h2 class="d-flex justify-content-center">Your Docs</h2>
    </div>

    <div class="container p-2">
        <a href="{{ route('documentation.create') }}"><button type="button" class="btn btn-primary">Add a new Doc</button></a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md d-flex">
                @forelse($docs as $docs)
                    Last Updated: {{ $docs->updated_at->diffForHumans() }}
                @empty
                    <p>You have no docs logged</p>
                @endforelse
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
