@extends('layouts.master')

@section('content')
<div id="dashboard" class="row">
    <div class="col-md-3">
        <div class="container-fluid gray-panel">
            <h3 class="no-line">
                <a href="{{ URL::to('profile/edit') }} "><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="{{ URL::to('profile', $user->id) }}">{{ Lang::get('general.my_profile') }}</a>
            </h3>
            <?php
                $profileImage = $user->photo
                    ? Libraries\Helper\Image::getPath($user->photo->name, 'profile')
                    : 'assets/css/images/generic-profile-image.png';
            ?>
            <img src="{{ URL::asset($profileImage) }}" class="img-responsive img-rounded" />
            <div class="col-sm-12 text-center">
                <h2 class="no-line name">{{ $user->first_name }} {{ $user->last_name }}</h2>
            </div>
            <div class="col-sm-12">
                <ul class="list-group profile-list">
                    <li class="list-group-item">
                        <a href="{{ URL::to('ad?' . http_build_query(['owned' => true])) }}">Posted Ads</a>
                        <span class="badge">{{ $user->ads->count() }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-4">
                <div class="container-fluid red-panel">
                    <a href="{{ URL::to('ad/create') }}">
                        <h3 class="no-line">{{ Lang::get('ads.post_an_ad') }}</h3>
                        <img src="{{ URL::asset('assets/css/images/add.png') }}" class="img-responsive img-rounded" width="125"/>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid gray-panel">
                    <h3>{{ Lang::get('general.posted_ads') }}</h3>
                    @if ($user->ads->count())
                        @foreach($user->ads as $ad)
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ URL::to('ad', $ad->id)}}">{{ $ad->title }}</a>
                            </div>
                            <div class="col-md-3">{{ $ad->status }}</div>
                            <div class="col-md-3">
                                <span class="time pull-right moment-humanize">{{ $ad->created_at }}</span>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="row">
                            <div class="col-md-12">
                                <p>{{ Lang::get('general.not_posted_ad') }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop