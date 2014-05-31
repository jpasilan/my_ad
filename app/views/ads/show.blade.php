@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
        @if (!$ad)
        <p class="text-danger">Advertisement not found.</p>
        @else
        <h3>{{ $ad->title }}</h3>
        <hr />
        <p>{{ $ad->description }}</p>
        <ul class="list-unstyled">
            <li><strong>Price:</strong> {{ $ad->price }}</li>
            <li><strong>Condition:</strong> {{ Lang::get('terms.' . $ad->ad_condition) }}</li>
            <li><strong>Category:</strong> {{ $ad->category->parent->name }} / {{ $ad->category->name }}</li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <h5>Photos</h5>
                <style type="text/css">
                    .ad-image {
                        width: 150px;
                    }
                </style>
                @foreach ($ad->photos as $photo)
                <img class="ad-image" src="{{ URL::asset('assets/images/ad/' . $photo->path) }}" />
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@stop