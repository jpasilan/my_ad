@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-5 col-sm-offset-1">
        <div class="container-fluid ctm-categories">
            <div class="row ctm-categories-row">
                <div class="ctm-categories-autos">
                    <div class="ctm-categories-category-title">Vehicles</div>
                </div>
                <div class="ctm-categories-realstate">
                    <div class="ctm-categories-category-title">Real Estate</div>
                </div>
                <div class="ctm-categories-electronic">
                    <div class="ctm-categories-category-title">Electronics</div>
                </div>
                <div class="ctm-categories-computer">
                    <div class="ctm-categories-category-title">Computers</div>
                </div>
            </div>
            <div class="row ctm-categories-row">
                <div class="ctm-categories-furniture">
                    <div class="ctm-categories-category-title">Furniture</div>
                </div>
                <div class="ctm-categories-tools">
                    <div class="ctm-categories-category-title">Tools</div>
                </div>
                <div class="ctm-categories-pets">
                    <div class="ctm-categories-category-title">Pets</div>
                </div>
                <div class="ctm-categories-jobs">
                    <div class="ctm-categories-category-title">Jobs</div>
                </div>
            </div>
            <div class="row ctm-categories-row">
                <div class="ctm-categories-travel">
                    <div class="ctm-categories-category-title">Travel</div>
                </div>
                <div class="ctm-categories-sports">
                    <div class="ctm-categories-category-title">Sports</div>
                </div>
                <div class="ctm-categories-family">
                    <div class="ctm-categories-category-title">Family</div>
                </div>
                <div class="ctm-categories-services">
                    <div class="ctm-categories-category-title">Services</div>
                </div>
            </div>
            <div class="row ctm-categories-row">
                <div class="ctm-categories-food">
                    <div class="ctm-categories-category-title">Food</div>
                </div>
                <div class="ctm-categories-community">
                    <div class="ctm-categories-category-title">Community</div>
                </div>
                <div class="ctm-categories-dating">
                    <div class="ctm-categories-category-title">Dating</div>
                </div>
                <div class="ctm-categories-others">
                    <div class="ctm-categories-category-title">Others</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="row well well-lg">
            <div class="col-sm-12 bottom-offset-8">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="search-keyword" placeholder="Keyword">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Province/State</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>City</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="search-zip-code" placeholder="Zip Code">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="search-miles-from-zip" placeholder="Miles from Zip">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-danger btn-lg btn-very-red pull-right">Search Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <img src="assets/css/images/google-map.png" class="img-responsive content-map" />
    </div>
</div>
@stop