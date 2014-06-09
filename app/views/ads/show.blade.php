@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
        @if ( ! $ad)
        <p class="text-danger">Advertisement not found.</p>
        @else
        <h3>{{ $ad->title }}</h3>
        <hr />
        <p>{{ $ad->description }}</p>
        <ul class="list-unstyled">
            <li><strong>{{ Lang::get('ads.price') }}:</strong> {{ $ad->price }}</li>
            <li><strong>{{ Lang::get('ads.condition') }}:</strong> {{ Lang::get('ads.' . $ad->ad_condition) }}</li>
            <li><strong>{{ Lang::get('ads.category') }}:</strong>
                {{ Lang::choice('ads.' . $ad->category->parent->name, 2) }} / {{ Lang::choice('ads.' . $ad->category->name, 2) }}
            </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <h5>{{ Lang::choice('ads.photos', 2) }}</h5>
                <div class="row">
                @foreach ($ad->photos as $photo)
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="{{ URL::asset('assets/images/ad/' . $photo->name) }}" />
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@stop