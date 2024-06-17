@extends('layouts.main')

@section('title', 'My Screenshots')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($screenshots as $screenshot)
                <div class="col-12 col-sm-6 col-md-3 mt-5">
                    <div class="d-flex d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$screenshot->getImageUrl()}}" class="card-img-top" alt="{{$screenshot->url}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$screenshot->created_at->format('d-m-Y H:i')}}</h5>
                                @if($screenshot->url)
                                    <a href="{{$screenshot->url}}" class="btn btn-outline-secondary me-2" target="_blank">Website</a>
                                @endif
                                <a href="{{$screenshot->getImageUrl()}}" class="btn btn-primary" target="_blank">Open</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
