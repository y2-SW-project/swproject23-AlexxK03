@extends('layouts.app')

@section('content')
    <div>
        <h2 class="d-flex justify-content-center">Your Docs</h2>
    </div>

    <div class="container p-2">
        <a href="{{ route('documentations.create') }}"><button type="button" class="btn btn-primary">Add a new Doc</button></a>
    </div>

    <div class="container">
        <div class="row">
            <div>
                @forelse($docs as $doc)
                    <a href="{{ route('documentations.show', $doc->id) }}"><img
                            src="{{ asset('storage/images/' . $doc->docs) }}" width="150" /></a>
                    <p><strong>{{ $doc->doc_name }}</strong></p>
                @empty
                    <p>You have no docs logged</p>
                @endforelse
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
