@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Website Screenshot Request</h1>
            <form action="{{ route('screenshot') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input name="url" class="form-control" placeholder="Enter URL" aria-label="Enter URL" required>
                    <button class="btn btn-primary" type="submit">Request Screenshot</button>
                </div>
            </form>
        </div>
    </div>
@endsection
