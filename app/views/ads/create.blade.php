@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
        <h3>{{ Lang::get('ads.post_an_ad') }}</h3>
        <hr />
        @include('partials.form-errors', $errors)
        {{ Form::open(['url' => URL::to('ad'), 'role' => 'form']) }}
            <div class="form-group">
                <label for="photo">{{ Lang::choice('ads.photos', 2) }}</label>
                <div id="ad-images">
                @if (Input::old('photos'))
                    @foreach (Input::old('photos') as $photo)
                        {{-- There seems to be a problem with Form::hidden so using good 'ol input --}}
                        <input type="hidden" name="photos[]" value="{{ htmlentities($photo) }}" />
                    @endforeach
                @endif
                </div>
                <span class="help-block">{{ Lang::get('ads.photos_help_text') }}</span>
                <div class="col-md-12" id="image-dropzone" data-input-name="photos"
                     data-max-files="4" data-token="{{ csrf_token() }}">
                    <div class="dz-message">
                        <span class="glyphicon glyphicon-cloud-upload"></span> Drop files here to upload.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="ad-title">{{ Lang::get('ads.title') }}</label>
                {{ Form::text('title', '', ['class' => 'form-control', 'id' => 'ad-title']) }}
                <span class="help-block">{{ Lang::get('ads.title_help_text') }}</span>
            </div>
            <div class="form-group">
                <label for="ad-price">{{ Lang::get('ads.price') }}</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    {{ Form::text('price', '', ['class' => 'form-control', 'id' => 'ad-price']) }}
                </div>
                <span class="help-block">{{ Lang::get('ads.price_help_text') }}</span>
            </div>
            <div class="form-group">
                <label for="ad-description">{{ Lang::get('ads.description') }}</label>
                {{ Form::textarea('description', '', ['class' => 'form-control', 'id' => 'ad-description']) }}
                <span class="help-block">{{ Lang::get('ads.description_help_text') }}</span>
            </div>
            <div class="form-group">
                <label for="ad-condition">{{ Lang::get('ads.condition') }}</label>
                {{ Form::select('ad_condition',
                    ['' => Lang::get('ads.select_condition'), 'used' => Lang::get('ads.used'),
                    'brand_new' => Lang::get('ads.brand_new')], '',
                    ['class' => 'form-control combobox', 'id' => 'ad-condition', 'autocomplete' => 'off']) }}
            </div>
            <div class="form-group">
                <label for="ad-category">{{ Lang::get('ads.category') }}</label>
                {{ Form::select('ad_category_id', ['' => Lang::get('ads.select_category')] + AdCategory::getList(), '',
                    ['class' => 'form-control', 'id' => 'ad-category']) }}
            </div>
            <fieldset id="ad-location">
                <legend>{{ Lang::get('ads.location') }}</legend>
                <span class="help-block">{{ Lang::get('ads.location_help_text') }}</span>
                @if (Sentry::getUser()->address)
                <div class="form-group">
                    <label for="copy-user-address">
                        {{ Form::checkbox('copy_address', null) }}
                        {{ Lang::get('ads.copy_user_address') }}
                    </label>
                </div>
                @endif
                <div id="ad-location-address">
                    <div class="form-group">
                        <label for="ad-address-1">{{ Lang::get('ads.address_1') }}</label>
                        {{ Form::text('address1', '', ['class' => 'form-control', 'id' => 'ad-address-1']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-address-2">{{ Lang::get('ads.address_2') }}</label>
                        {{ Form::text('address2', '', ['class' => 'form-control', 'id' => 'ad-address-2']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-city">{{ Lang::get('ads.city') }}</label>
                        {{ Form::text('city', '', ['class' => 'form-control', 'id' => 'ad-city']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-province">{{ Lang::get('ads.state_province') }}</label>
                        {{ Form::text('province', '', ['class' => 'form-control', 'id' => 'ad-province']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-country">{{ Lang::get('ads.country') }}</label>
                        {{ Form::select('country',
                            ['' => 'Select Country'] + Country::getList(), '',
                            ['class' => 'form-control combobox', 'id' => 'ad-country', 'autocomplete' => 'off']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-postal-code">{{ Lang::get('ads.postal_code') }}</label>
                        {{ Form::text('postal_code', '', ['class' => 'form-control', 'id' => 'ad-postal-code']) }}
                    </div>
                </div>
            </fieldset>
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>
@stop

@section('more-header-scripts')
{{ HTML::style('assets/dropzone/css/dropzone.css') }}
@stop

@section('more-footer-scripts')
{{ HTML::script('assets/dropzone/dropzone.min.js') }}
{{ HTML::script('assets/js/image-dropzone.js') }}
<script type="text/javascript">
    jQuery(function() {
        /**
         * Enable or disable the location fields.
         *
         * @param bool disable
         */
        function disableLocation(disable) {
            if (disable) {
                jQuery('#ad-location-address').find(':input').each(function(){
                    jQuery(this).val('');
                    jQuery(this).prop('disabled', true);
                });
            } else {
                jQuery('#ad-location-address').find(':input').each(function(){
                    jQuery(this).prop('disabled', false);
                });
            }
        }

        disableLocation(jQuery('input[name="copy_address"]').is(':checked'));
        jQuery('input[name="copy_address"]').click(function(){
            disableLocation(jQuery(this).is(':checked'));
        });
    });
</script>
@stop