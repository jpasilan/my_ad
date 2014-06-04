@extends('users.search-category-master')

@section('search-category-form')
<div class="col-md-4">
    <div class="row well well-lg">
        <div class="col-sm-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="search-keyword" placeholder="{{ Lang::get('ads.keyword') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <select class="form-control">
                            <option>{{ Lang::get('ads.make') }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <select class="form-control">
                            <option>{{ Lang::get('ads.model') }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{ Lang::get('ads.year') }}</label>
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option>From</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option>To</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{ Lang::get('ads.mileage') }}</label>
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option>From</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option>To</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{ Lang::get('ads.price') }}</label>
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option>From</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-control">
                            <option>To</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <select class="form-control">
                            <option>{{ Lang::get('ads.state_province') }}</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control">
                            <option>{{ Lang::get('ads.city') }}</option>
                        </select>
                    </div>
                </div>                            
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="search-zip-code" placeholder="{{ Lang::get('ads.postal_code') }}">
                    </div>
                                                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="search-miles-from-zip" placeholder="{{ Lang::get('ads.miles_from_zip') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> {{ Lang::get('ads.all') }}
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> {{ Lang::get('ads.new') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> {{ Lang::get('ads.used') }}
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> {{ Lang::get('ads.certified_used') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-danger btn-very-red pull-right">{{ Lang::get('general.search') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop