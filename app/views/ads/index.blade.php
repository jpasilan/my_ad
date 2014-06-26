@extends('layouts.master')

@section('content')
@if ('vehicles' == $category['parent'])
    @include ('partials.vehicle-search-form')
@elseif ('real_estate' == $category['parent'])
    @include ('partials.real-estate-search-form')
@else
    @include ('partials.classifieds-search-form')
@endif
<div class="row">
    <div class="col-sm-12">
        <h3>
            {{ Lang::choice('ads.' . $category['parent'], 2) }}
            {{ $category['child'] ? ' / ' . Lang::choice('ads.' . $category['child'], 2) : ''}}
        </h3>
        <hr />
        @if ($ads && $ads->count())
        <div class="row">
            @foreach ($ads as $ad)
            <div class="col-md-2">
                <?php $image = $ad->photos()->first() ?>
                <img src="{{ URL::asset(\Libraries\Helper\Image::getPath($image->name, 'ad')) }}"
                     class="img-responsive"/>
                <div class="thumbnail">
                    <div class="caption">
                        <a href="{{ URL::to('ad', $ad->id) }}"><h5>{{ $ad->title }}</h5></a>
                        <small class="moment-humanize text-muted">{{ $ad->created_at }}</small><br />
                        <small class="text-muted">
                            {{ Lang::get('general.posted_by') }} <a href="{{ URL::to('profile', $ad->user->id) }}">
                                {{ $ad->user->first_name}} {{ $ad->user->last_name }}</a>
                        </small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row">
            <div class="col-md-12">
                <p>{{ Lang::get('general.no_ads_found') }}</p>
            </div>
        </div>
        @endif
    </div>
</div>
@stop
