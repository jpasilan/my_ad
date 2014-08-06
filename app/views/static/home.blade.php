@extends('layouts.master')

@section('more-header-scripts')
    {{ HTML::style('assets/slick/css/style.css') }}
@stop

@section('content')
<div class="row">
    <div class="col-md-9 col-centered">
        <div class="slider center">
            <span class="prev"></span>
            <div><img src="assets/css/images/TopBanner1.gif" class="img-responsive" data-toggle="tooltip" title="Mansion in LA"/></div>
            <div><img src="assets/css/images/TopBanner2.gif" class="img-responsive" data-toggle="tooltip" title="Aparment Unit in Arkansas"/></div>
            <div><img src="assets/css/images/TopBanner3.gif" class="img-responsive" data-toggle="tooltip" title="Pre-loved aquariums"/></div>
            <div><img src="assets/css/images/TopBanner4.gif" class="img-responsive" data-toggle="tooltip" title="Slightly used Sala Set"/></div>
            <div><img src="assets/css/images/TopBanner1.gif" class="img-responsive" data-toggle="tooltip" title="Mansion in LA"/></div>
            <div><img src="assets/css/images/TopBanner2.gif" class="img-responsive" data-toggle="tooltip" title="Aparment Unit in Arkansas"/></div>
            <div><img src="assets/css/images/TopBanner3.gif" class="img-responsive" data-toggle="tooltip" title="Slightly used Sala Set"/></div>
            <div><img src="assets/css/images/TopBanner4.gif" class="img-responsive" data-toggle="tooltip" title="Mansion in LA"/></div>
            <div><img src="assets/css/images/TopBanner1.gif" class="img-responsive" data-toggle="tooltip" title="Aparment Unit in Arkansas"/></div>
            <span class="next"></span>
        </div>
    </div>
    <div class="col-md-4 h-side-ads">
        <div class="ad-bg">
            <a href="#"><img src="assets/css/images/banner-ad.gif" class="img-responsive"/></a>
        </div>
        <div class="ad-bg">
            <a href="#"><img src="assets/css/images/banner-ad.gif" class="img-responsive"/></a>
        </div>
        <div class="ad-bg">
            <a href="#"><img src="assets/css/images/banner-ad.gif" class="img-responsive"/></a>
        </div>
    </div>
    <div class="col-md-4 no-padding-left no-padding-right">
        <div class="container-fluid myad-categories">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/vehicles.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.vehicles', 2); }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/real-estate.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.real_estate') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/electronics.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.electronics') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/computers.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.computers', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/furniture.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.furniture', 1) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/tools.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.tools', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/pets.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.pets', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/jobs.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.jobs', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/travel.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.travel') }}</span>
                        </a>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/sports.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.sports', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/family.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.family') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/services.png" class="img-responsive"/>
                            <span>{{ Lang::choice('ads.services', 2) }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/food.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.food') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/community.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.community') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/dating.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.dating') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="pane">
                        <a href="#">
                            <img src="assets/css/images/others.png" class="img-responsive"/>
                            <span>{{ Lang::get('ads.others') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 h-side-ads">
        <div class="ad-bg">
            <a href="#"><img src="assets/css/images/banner-ad.gif" class="img-responsive"/></a>
        </div>
        <div class="ad-bg">
            <a href="#"><img src="assets/css/images/banner-ad.gif" class="img-responsive"/></a>
        </div>
        <div class="ad-bg">
            <a href="#"><img src="assets/css/images/banner-ad.gif" class="img-responsive"/></a>
        </div>
    </div>
</div>
<div class="row top-offset-2">
    <div class="col-md-4 map">
        <img src="assets/css/images/map.jpg" class="img-responsive"/>  
    </div>
    <div class="col-md-4 no-padding-left no-padding-right h_video">
        <iframe src="//player.vimeo.com/video/49217125" width="390" height="535" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="col-md-4 max-ad">
        <div class="ad-bg">
            <a href="#"><img src="assets/css/images/banner-ad-full.gif" class="img-responsive"/></a>
        </div>
    </div>
</div>
@stop

@section('more-footer-scripts')
    {{ HTML::script('assets/slick/js/slick.min.js') }}
    <script>
        jQuery(document).ready(function(){
            jQuery('.center').slick({
                centerMode: true,
                centerPadding: '283px',
                slidesToShow: 8,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 1366,
                            settings: {
                                centerMode: true,
                                centerPadding: '200px',
                                slidesToShow: 3
                          }
                    },
                    {
                        breakpoint: 1200,
                            settings: {
                                centerMode: true,
                                centerPadding: '138px',
                                slidesToShow: 3
                          }
                    },
                    {
                        breakpoint: 990,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '180px',
                                slidesToShow: 4
                          }
                    },
                    {
                        breakpoint: 768,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '69px',
                                slidesToShow: 3
                          }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '119px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 320,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
              });
        })
    </script>
@stop