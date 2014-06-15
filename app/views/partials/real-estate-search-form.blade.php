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
    <div class="col-md-6">
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
</div>