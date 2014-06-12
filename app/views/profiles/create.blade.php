@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                {{ $edit ? Lang::get('profile.update_profile') : Lang::get('profile.add_profile') }}
            </div>
            <div class="panel-body">
                @include('partials.form-errors', $errors)
                <?php $url = $edit ? 'profile/edit' : 'profile/create' ?>
                {{ Form::open(['url' => $url, 'role' => 'form', 'enctype' => 'multipart/form-data']) }}
                    <div class="row">
                        <div class="col-md-6">
                            <h4>{{ Lang::get('profile.public_information') }}</h4>
                            <hr />
                            <p>{{ Lang::get('profile.public_information_help') }}</p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="first_name">{{ Lang::get('general.first_name') }}</label>
                                        {{ Form::text('first_name', $user->first_name,
                                            ['class' => 'form-control', 'id' => 'first_name']) }}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name">{{ Lang::get('general.last_name') }}</label>
                                        {{ Form::text('last_name', $user->last_name,
                                            ['class' => 'form-control', 'id' => 'last_name']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photo">{{ Lang::get('profile.photo') }}</label>
                                <?php
                                $photo = false;
                                if (Input::old('photo')) {
                                    $photo = Input::old('photo');
                                } else if ($edit && $user->photo) {
                                    $photo = json_encode(Libraries\Helper\Image::getInfoById($user->photo->id));
                                }
                                ?>
                                <div id="ad-images">{{ $photo ? Form::hidden('photo', $photo) : '' }}</div>
                                <div class="col-md-12" id="image-dropzone" data-max-files="1" data-token="{{ csrf_token() }}"
                                     data-input-name="photo">
                                    <div class="dz-message">
                                        <span class="glyphicon glyphicon-cloud-upload"></span>
                                        {{ Lang::get('profile.photo_upload') }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile">{{ Lang::get('general.mobile_number') }}</label>
                                {{ Form::text('mobile', $edit ? $user->profile->mobile : '',
                                    ['class' => 'form-control', 'id' => 'mobile']) }}
                            </div>
                            <h4>{{ Lang::get('profile.private_information') }}</h4>
                            <hr />
                            <p>{{ Lang::get('profile.private_information_help') }}</p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="birth_date">Birth Date</label>
                                        {{ Form::text('birth_date', $edit ? $user->profile->birth_date : '',
                                            ['class' => 'form-control', 'id' => 'birth-date-dp']) }}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender">{{ Lang::get('profile.gender') }}</label>
                                        {{ Form::select('gender', ['' => Lang::get('profile.select_gender'),
                                            'male' => Lang::get('profile.male'), 'female' => Lang::get('profile.female')],
                                            $edit ? $user->profile->gender : '',
                                            ['class' => 'form-control combobox', 'id' => 'gender']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>{{ Lang::get('profile.address') }}</h4>
                            <hr />
                            <p>{{ Lang::get('profile.address_help') }}</p>
                            <div class="form-group">
                                <label for="address1">{{ Lang::get('general.address_1') }}</label>
                                {{ Form::text('address1', $edit && $user->address ? $user->address->address1 : '',
                                    ['class' => 'form-control', 'id' => 'address1']) }}
                            </div>
                            <div class="form-group">
                                <label for="address2">{{ Lang::get('general.address_2') }}</label>
                                {{ Form::text('address2', $edit && $user->address ? $user->address->address2 : '',
                                    ['class' => 'form-control', 'id' => 'address2']) }}
                            </div>
                            <div class="form-group">
                                <label for="city">{{ Lang::get('general.city') }}</label>
                                {{ Form::text('city', $edit && $user->address ? $user->address->city : '',
                                    ['class' => 'form-control', 'id' => 'city']) }}
                            </div>
                            <div class="form-group">
                                <label for="province">{{ Lang::get('general.state_province') }}</label>
                                {{ Form::text('province', $edit && $user->address ? $user->address->province : '',
                                    ['class' => 'form-control', 'id' => 'province']) }}
                            </div>
                            <div class="form-group">
                                <label for="country">{{ Lang::get('general.country') }}</label>
                                {{ Form::select('country',
                                    ['' => Lang::get('general.select_country')] + Country::getList(),
                                    $edit && $user->address ? $user->address->country : '',
                                    ['class' => 'form-control combobox', 'id' => 'country', 'autocomplete' => 'off']) }}
                            </div>
                            <div class="form-group">
                                <label for="postal_code">{{ Lang::get('general.postal_code') }}</label>
                                {{ Form::text('postal_code', $edit && $user->address ? $user->address->postal_code : '',
                                    ['class' => 'form-control', 'id' => 'postal_code']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::submit($edit ? Lang::get('general.update') : Lang::get('general.save'),
                                ['class' => 'btn btn-lg btn-primary pull-right']) }}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop
@section('more-header-scripts')
{{ HTML::style('assets/pikaday/css/pikaday.css') }}
{{ HTML::style('assets/dropzone/css/dropzone.css') }}
@stop

@section('more-footer-scripts')
{{ HTML::script('assets/pikaday/pikaday.js') }}
{{ HTML::script('assets/pikaday/plugins/pikaday.jquery.js') }}
{{ HTML::script('assets/dropzone/dropzone.min.js') }}
{{ HTML::script('assets/js/image-dropzone.js') }}
<script type="text/javascript">
    //<![CDATA[
    jQuery(function() {
        // Pikaday stuff
        var today = moment.utc(new Date());
        var fiveYearsAgo = today.subtract('years', 5);
        var birthDate = moment.utc(new Date(jQuery('#birth-date-dp').val()));

        var datepicker = jQuery('#birth-date-dp').pikaday({
            format: 'YYYY-MM-DD',
            defaultDate:  birthDate.isValid() ? birthDate.toDate() : fiveYearsAgo.toDate(),
            setDefaultDate:  birthDate.isValid() ? true : false,
            maxDate: fiveYearsAgo.toDate(),
            yearRange: [1900, fiveYearsAgo.year()]
        });
    });
    //]]>
</script>
@stop