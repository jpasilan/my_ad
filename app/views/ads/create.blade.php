@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
        <h3>Create Advertisement</h3>
        <hr />
        @include('partials.form-errors', $errors)
        {{ Form::open(['url' => URL::to('ad'), 'role' => 'form']) }}
            <div class="form-group">
                <label for="photo">Photos</label>
                <?php
                    $photos = null;
                    if (Input::old('photos')) {
                        $photos = Input::old('photos');
                    }
                ?>
                <div id="ad-images">
                @if ($photos)
                    <?php $count = 0 ?>
                    @foreach ($photos as $photo)
                    <?php $name = "photos[" . ++$count . "]" ?>
                    {{ Form::hidden($name, $photo) }}
                    @endforeach
                @endif
                </div>
                <span class="help-block">Upload photos of the item you want to sell. Maximum file size per image is 1MB.</span>
                <div class="col-md-12" id="image-dropzone" data-input-name="photos"
                     data-max-files="4" data-token="{{ csrf_token() }}">
                    <div class="dz-message"><span class="glyphicon glyphicon-cloud-upload"></span> Drop files here to upload.</div>
                </div>
            </div>
            <div class="form-group">
                <label for="ad-title">Title</label>
                {{ Form::text('title', '', ['class' => 'form-control', 'id' => 'ad-title']) }}
                <span class="help-block">Keep the title short and avoid including too many keywords.</span>
            </div>
            <div class="form-group">
                <label for="ad-price">Price</label>
                {{ Form::text('price', '', ['class' => 'form-control', 'id' => 'ad-price']) }}
                <span class="help-block">Set a price that is appropriate for the item to be sold.</span>
            </div>
            <div class="form-group">
                <label for="ad-description">Description</label>
                {{ Form::textarea('description', '', ['class' => 'form-control', 'id' => 'ad-description']) }}
                <span class="help-block">Describe accurately the item to be sold.</span>
            </div>
            <div class="form-group">
                <label for="ad-condition">Condition</label>
                {{ Form::select('ad_condition',
                    ['' => 'Select Condition', 'used' => 'Used', 'brand_new' => 'Brand New'], '',
                    ['class' => 'form-control combobox', 'id' => 'ad-condition', 'autocomplete' => 'off']) }}
            </div>
            <div class="form-group">
                <label for="ad-category">Category</label>
                {{ Form::select('ad_category_id', ['' => 'Select Category'] + AdCategory::getList(), '',
                    ['class' => 'form-control', 'id' => 'ad-category']) }}
            </div>
            <fieldset id="ad-location">
                <legend>Location</legend>
                <span class="help-block">A location is required for real estate advertisements.</span>
                @if (Sentry::getUser()->address)
                <div class="form-group">
                    <label for="copy-user-address">
                        {{ Form::checkbox('copy_address', null) }}
                        Use my profile address
                    </label>
                </div>
                @endif
                <div id="ad-location-address">
                    <div class="form-group">
                        <label for="ad-address">Address</label>
                        {{ Form::text('address', '', ['class' => 'form-control', 'id' => 'ad-address']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-city">City</label>
                        {{ Form::text('city', '', ['class' => 'form-control', 'id' => 'ad-city']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-province">State/Province</label>
                        {{ Form::text('province', '', ['class' => 'form-control', 'id' => 'ad-province']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-country">Country</label>
                        {{ Form::select('country',
                            ['' => 'Select Country'] + Country::getList(), '',
                            ['class' => 'form-control combobox', 'id' => 'ad-country', 'autocomplete' => 'off']) }}
                    </div>
                    <div class="form-group">
                        <label for="ad-postal-code">Postal Code</label>
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
         * Show or hide location input fields.
         *
         * @param val
         * @param obj
         */
        function showHideLocation(val, obj) {
            if (obj.hasOwnProperty(val)) {
                jQuery('#ad-location').show();
            } else {
                jQuery('#ad-location').hide();
            }
        }

        var realEstateChildren = {};
        jQuery.ajax({
            url: '/ad/data/category-children',
            type: 'GET',
            data: { category: 'Real Estate' },
            success: function(data) {
                showHideLocation(jQuery('#ad-category').val(), data);
                realEstateChildren = data;
            }
        });

        jQuery('#ad-category').change(function() {
            showHideLocation(jQuery(this).val(), realEstateChildren);
        });

        jQuery('input[name="copy_address"]').click(function(){
            if (jQuery(this).is(':checked')) {
                jQuery('#ad-location-address').find(':input').each(function(){
                    jQuery(this).val('');
                    jQuery(this).prop('disabled', true);
                });
            } else {
                jQuery('#ad-location-address').find(':input').each(function(){
                    jQuery(this).prop('disabled', false);
                });
            }
        });
    });
</script>
@stop