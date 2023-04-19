@extends('layouts.app')

@section('content')
    <div class="d-flex">
        <p class="ps-2">
            <strong>Created: </strong> {{ $doc->doc_name }}
        </p>
        <p class="ps-2">
            <strong>Updated: </strong> {{ $doc->updated_at }}
        </p>
        <img src="{{ asset('storage/images/' . $doc->docs) }}" width="150" />

    </div>
@endsection
