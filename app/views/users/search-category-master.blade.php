@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="container-fluid ctm-categories">
            <div class="row ctm-categories-row">
                <div class="ctm-categories-autos">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.vehicles', 2); }}</div>
                </div>
                <div class="ctm-categories-realstate">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.real_estate') }}</div>
                </div>
                <div class="ctm-categories-electronic">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.electronics') }}</div>
                </div>
                <div class="ctm-categories-computer">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.computers', 2) }}</div>
                </div>
            </div>
            <div class="row ctm-categories-row">
                <div class="ctm-categories-furniture">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.furniture', 1) }}</div>
                </div>
                <div class="ctm-categories-tools">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.tools', 2) }}</div>
                </div>
                <div class="ctm-categories-pets">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.pets', 2) }}</div>
                </div>
                <div class="ctm-categories-jobs">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.jobs', 2) }}</div>
                </div>
            </div>
            <div class="row ctm-categories-row">
                <div class="ctm-categories-travel">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.travel') }}</div>
                </div>
                <div class="ctm-categories-sports">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.sports', 2) }}</div>
                </div>
                <div class="ctm-categories-family">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.family') }}</div>
                </div>
                <div class="ctm-categories-services">
                    <div class="ctm-categories-category-title">{{ Lang::choice('ads.services', 2) }}</div>
                </div>
            </div>
            <div class="row ctm-categories-row">
                <div class="ctm-categories-food">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.food') }}</div>
                </div>
                <div class="ctm-categories-community">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.community') }}</div>
                </div>
                <div class="ctm-categories-dating">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.dating') }}</div>
                </div>
                <div class="ctm-categories-others">
                    <div class="ctm-categories-category-title">{{ Lang::get('ads.others') }}</div>
                </div>
            </div>
        </div>
    </div>
    @yield('search-category-form')
    <div class="col-md-2 ads-on-side no-padding-right">
        <img src="assets/css/images/noad-thumb.png" class="img-responsive"/>  
        <img src="assets/css/images/noad-thumb.png" class="img-responsive"/>  
        <img src="assets/css/images/noad-thumb.png" class="img-responsive"/>          
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <img src="assets/css/images/google-map.png" class="img-responsive content-map" />
    </div>
</div>
@stop