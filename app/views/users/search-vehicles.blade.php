@extends('users.search-category-master')

@section('search-category-form')
<div class="col-md-4">
    <div class="row well well-lg">
        <div class="col-sm-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="search-keyword" placeholder="Keyword">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <select class="form-control">
                            <option>Make</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <select class="form-control">
                            <option>Models</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Year</label>
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
                    <label class="col-sm-2 control-label">Mileage</label>
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
                    <label class="col-sm-2 control-label">Price</label>
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
                            <option>Province/State</option>
                        </select>
                    </div>
                                                    <div class="col-sm-6">
                        <select class="form-control">
                            <option>City</option>
                        </select>
                    </div>
                </div>                            
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="search-zip-code" placeholder="Zip Code">
                    </div>
                                                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="search-miles-from-zip" placeholder="Miles from Zip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> All
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> New
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> Used
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value=""> Cerfified Used
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-danger btn-very-red pull-right">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop