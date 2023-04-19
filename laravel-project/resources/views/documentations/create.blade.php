@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Add A New Document </h1>
    <form action="{{ route('documentations.store') }}" method="post">
        @csrf
        <input type="text" class="form-control m-2" name="doc_name" placeholder="document name" :value=@old>

        <div class="mb-3">
            <label for="docs" class="form-label">Upload from PC</label>
            <input class="form-control" type="file" id="docs">
          </div>


        <button type="submit" value="submit" class="btn btn-primary">Add New Doc</button>
    </form>
@endsection
