@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
        <h3>Classified Ads</h3>
        <hr />
        @if ($ads->count() < 1)
        <div class="row">
            <p>There are no advertisements available at this time.</p>
        </div>
        @else
            @foreach ($ads as $ad)
            <div class="row">
                <a href="{{ URL::to('ad', $ad->id) }}"><h5>{{ $ad->title }}</h5></a>
                <p class="text-muted">Posted by {{ $ad->user->first_name}} {{ $ad->user->last_name }}</p>
            </div>
            @endforeach
        @endif
    </div>
</div>
@stop