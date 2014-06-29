@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-11">
        <div class="paid-ad-slide">
            <ul>
                <li class="prev"></li>
                <li><img src="assets/css/images/paid-ad-1.jpg" class="img-responsive" data-toggle="tooltip" data-placement="top" title="Mansion in LA"/></li>
                <li><img src="assets/css/images/paid-ad-2.jpg" class="img-responsive" data-toggle="tooltip" data-placement="top" title="Aparment Unit in Arkansas"/></li>
                <li><img src="assets/css/images/paid-ad-3.jpg" class="img-responsive" data-toggle="tooltip" data-placement="top" title="Pre-loved aquariums"/></li>
                <li><img src="assets/css/images/paid-ad-4.jpg" class="img-responsive" data-toggle="tooltip" data-placement="top" title="Slightly used Sala Set"/></li>
                <li><img src="assets/css/images/paid-ad-1.jpg" class="img-responsive" data-toggle="tooltip" data-placement="top" title="Mansion in LA"/></li>
                <li><img src="assets/css/images/paid-ad-2.jpg" class="img-responsive" data-toggle="tooltip" data-placement="top" title="Aparment Unit in Arkansas"/></li>
                <li class="next"></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 h-side-ads">
        <img src="assets/css/images/ad_1.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_2.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_3.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_4.jpg" class="img-responsive"/>  
    </div>
    <div class="col-md-4 no-padding-left no-padding-right">
        <div class="container-fluid myad-categories">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-autos"></i>
                            <span>{{ Lang::choice('ads.vehicles', 2); }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-realstate"></i> 
                            <span>{{ Lang::get('ads.real_estate') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-electronic"></i>
                            <span>{{ Lang::get('ads.electronics') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-computer"></i>
                            <span>{{ Lang::choice('ads.computers', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-furniture"></i>
                            <span>{{ Lang::choice('ads.furniture', 1) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-tools"></i>
                            <span>{{ Lang::choice('ads.tools', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-pets"></i>
                            <span>{{ Lang::choice('ads.pets', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-jobs"></i>
                            <span>{{ Lang::choice('ads.jobs', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-travel"></i>
                            <span>{{ Lang::get('ads.travel') }}</span>
                        </a>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-sports"></i>
                            <span>{{ Lang::choice('ads.sports', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-family"></i>
                            <span>{{ Lang::get('ads.family') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-services"></i>
                            <span>{{ Lang::choice('ads.services', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-food"></i>
                            <span>{{ Lang::get('ads.food') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-community"></i>
                            <span>{{ Lang::get('ads.community') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-dating"></i>
                            <span>{{ Lang::get('ads.dating') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <i class="ctm-categories-others"></i>
                            <span>{{ Lang::get('ads.others') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 h-side-ads">
        <img src="assets/css/images/ad_1.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_2.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_3.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_4.jpg" class="img-responsive"/>  
    </div>
</div>
<div class="row top-offset-2">
    <div class="col-md-4 map">
        <img src="assets/css/images/map.jpg" class="img-responsive"/>  
    </div>
    <div class="col-md-4 no-padding-left no-padding-right h_video">
        <iframe src="//player.vimeo.com/video/49217125" width="390" height="387" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="col-md-4 max-ad">
        <img src="assets/css/images/full-ad.jpg" class="img-responsive"/>  
    </div>
</div>
@stop