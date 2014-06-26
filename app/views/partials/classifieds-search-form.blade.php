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
                {{ Form::open(['url' => 'ad', 'method' => 'get', 'class' => 'form', 'role' => 'form']) }}
                    <div class="form-group">
                        {{ Form::text('title', Input::get('title') ? : '',
                            ['class' => 'form-control', 'placeholder' => 'Title']) }}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                {{ Form::text('price_low', Input::get('price_low') ? : '',
                                    ['class' => 'form-control', 'placeholder' => 'Lowest Price']) }}
                            </div>
                            <div class="col-sm-6">
                                {{ Form::text('price_high', Input::get('price_high') ? : '',
                                    ['class' => 'form-control', 'placeholder' => 'Highest Price']) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::select('condition',
                            ['' => Lang::get('ads.select_condition'), 'used' => Lang::get('ads.used'),
                            'brand_new' => Lang::get('ads.brand_new')], Input::get('condition') ? : '',
                            ['class' => 'form-control combobox', 'id' => 'ad-condition', 'autocomplete' => 'off']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit(Lang::get('general.search'),
                            ['class' => 'btn btn-danger btn-very-red pull-right']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>