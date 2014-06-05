@extends('layouts.master')

@section('content')
<div id="dashboard" class="row">
    <div class="col-md-3">
        <div class="container-fluid gray-panel">
            <h3 class="no-line">
                <a href="{{ URL::to('profile/update') }} "><span class="glyphicon glyphicon-pencil"></span></a>
                MY PROFILE
            </h3>
            <img src="{{ URL::asset('assets/css/images/generic-profile-image.png') }}" class="img-responsive img-rounded" />
            <div class="col-sm-12 text-center">
                <h2 class="no-line name">{{ $user->first_name }} {{ $user->last_name }}</h2>
            </div>
            <div class="col-sm-12">
                <ul class="list-group profile-list">
                    <li class="list-group-item">
                        <span class="badge">25</span>
                        <a href="#">Posted Ads</a>
                    </li>
                    <li class="list-group-item">
                        <span class="badge red">5</span>
                        <a href="#">Bumped Ads</a>
                    </li>
                    <li class="list-group-item">
                        <span class="badge">10</span>
                        <a href="#">Pending Ads</a>
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
                        <h3 class="no-line">POST AN AD</h3>
                        <img src="{{ URL::asset('assets/css/images/add.png') }}" class="img-responsive img-rounded" width="125"/>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid gray-panel">
                    <h3>BUMPED AD's</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For sale Dell Latitude e4310</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">2 sec ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">Shihpoo puppies for sale</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">2 sec ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">Shihpoo puppies for sale</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">5 mins ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For lease subdivided lot in Arkansas</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">15 mins ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For sale Dell Latitude e4310</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">1 day ago</span>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid gray-panel">
                    <h3>POSTED AD's</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For sale Dell Latitude e4310</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">2 sec ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">Shihpoo puppies for sale</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">2 sec ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">Shihpoo puppies for sale</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">5 mins ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For lease subdivided lot in Arkansas</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">15 mins ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For sale Dell Latitude e4310</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container-fluid gray-panel">
                    <h3>RECENT POSTED AD's</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For sale Dell Latitude e4310</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">2 sec ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">Shihpoo puppies for sale</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">2 sec ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">Shihpoo puppies for sale</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">5 mins ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For lease subdivided lot in Arkansas</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">15 mins ago</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">For sale Dell Latitude e4310</a>
                        </div>
                        <div class="col-md-3">
                            Sold
                        </div>
                        <div class="col-md-3">
                            <span class="time pull-right">1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop