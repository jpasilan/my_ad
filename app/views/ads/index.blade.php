@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
        <h3>{{ Lang::get('ads.classified_ads') }}</h3>
        <hr />
        @if ($ads && $ads->count())
            @foreach ($ads as $ad)
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ URL::to('ad', $ad->id) }}"><h5>{{ $ad->title }}</h5></a>
                    <p class="text-muted">Posted by {{ $ad->user->first_name}} {{ $ad->user->last_name }}</p>
                </div>
            </div>
            @endforeach
        @else
        <div class="row">
            <p>{{ Lang::get('ads.no_ads') }}</p>
        </div>
        @endif
    </div>
</div>
@stop