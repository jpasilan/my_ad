@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h1 class="full-name">{{ $user->first_name }} {{ $user->last_name }}</h1>
                <p>
                    <strong>{{ Lang::get('profile.joined') }}</strong>
                    <span class="moment-humanize">{{ $user->created_at }}</span>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="well">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                $profilePhoto = $user->photo
                                    ? \Libraries\Helper\Image::getPath($user->photo->name, 'profile')
                                    : 'assets/css/images/generic-profile-image.png';
                            ?>
                            <img src="{{ URL::asset($profilePhoto) }}" class="img-rounded img-responsive" />
                            @if ($user->address)
                            <p>
                            <address>
                                {{ $user->address->address1 }}<br />
                                @if ($user->address->address2)
                                {{ $user->address->address2 }}<br />
                                @endif
                                {{ $user->address->city }},
                                {{ $user->address->province }}
                                {{ $user->address->postal_code }}<br />
                                <abbr title="Mobile Phone">P:</abbr> {{ $user->profile->mobile }}
                            </address>
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php $postedAds = $user->ads()->whereStatus('open')->count() ?>
                    <div class="col-md-2">
                        <div class="well info-well info-well-primary">
                            <h1>{{ $postedAds }}</h1>
                            <p>{{ Lang::get('general.posted_ads') }}</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="well info-well info-well-success">
                            <h1>{{ $user->ads()->whereStatus('sold')->count() }}</h1>
                            <p>{{ Lang::get('profile.sold_ads') }}</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="well info-well info-well-danger">
                            <h1>{{ $user->ads()->whereStatus('closed')->count() }}</h1>
                            <p>{{ Lang::get('profile.closed_ads') }}</p>
                        </div>
                    </div>
                </div>
                @if ($postedAds)
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="section-heading">{{ Lang::get('profile.recently_posted_ads') }}</h3>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="pull-right">{{ Lang::get('profile.see_all_posted') }}</a>
                            </div>
                        </div>
                        {{-- Show only the 12 recent ads. That is 3 rows with 4 ads each. --}}
                        <?php $rows = $postedAds > 12 ? 4 : ceil($postedAds / 4) ?>
                        @for ($i = 1; $i <= $rows; $i++)
                        <div class="row">
                            <?php
                                $recentAds = $i == 1
                                    ? $user->ads()->whereStatus('open')->orderBy('created_at', 'DESC')->take(4)->get()
                                    : $user->ads()->whereStatus('open')->orderBy('created_at', 'DESC')
                                        ->skip(($i - 1)*4)->take(4)->get();
                            ?>
                            @foreach ($recentAds as $ad)
                            <div class="col-md-3">
                                <?php $image = $ad->photos()->first() ?>
                                <img src="{{ URL::asset(\Libraries\Helper\Image::getPath($image->name, 'ad')) }}"
                                    class="img-responsive"/>
                                <div class="thumbnail">
                                    <div class="caption">
                                        <a href="{{ URL::to('ad', $ad->id) }}"><h5>{{ $ad->title }}</h5></a>
                                        <small class="moment-humanize">{{ $ad->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endfor
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-md-12 bg-info">
                        <h4>{{ Lang::get('profile.no_posted_ads') }}</h4>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop