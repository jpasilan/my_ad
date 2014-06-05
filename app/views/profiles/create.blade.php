@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-3">
        <h3>{{ $update ? 'Update Profile' : 'Add Profile' }}</h3>
        @include('partials.form-errors', $errors)
        <h4>Public Information</h4>
        <hr />
        <p>The information below may be displayed throughout the site.</p>
        <?php $url = $update ? 'profile/update' : 'profile/create' ?>
        {{ Form::open(['url' => $url, 'role' => 'form', 'enctype' => 'multipart/form-data']) }}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="first_name">First Name</label>
                        {{ Form::text('first_name', $user->first_name, ['class' => 'form-control', 'id' => 'first_name']) }}
                    </div>
                    <div class="col-md-6">
                        <label for="last_name">Last Name</label>
                        {{ Form::text('last_name', $user->last_name, ['class' => 'form-control', 'id' => 'last_name']) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="photo">Photo/Avatar</label>
                <div id="ad-images">
                    <?php
                        $photo = Input::old('photo') ? : ($update ? $user->profile->photo : '');
                        if ($photo) {
                            list($id, $ext) = explode('.', $photo);
                            // TODO: Refactor the following lines.
                            $uploadPath = DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR .
                                'uploads' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
                            $profileImagePath = DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR .
                                'images' . DIRECTORY_SEPARATOR . 'profile' . DIRECTORY_SEPARATOR;
                            $path = $uploadPath;
                            $size = 0;
                            if (File::exists(public_path() . $uploadPath . $photo)) {
                                $size = File::size(public_path() . $uploadPath . $photo);
                            } else if (File::exists(public_path() . $profileImagePath . $photo)) {
                                $path = $profileImagePath;
                                $size = File::size(public_path() . $profileImagePath . $photo);
                            }
                        }
                    ?>
                    @if ($photo)
                    {{ Form::hidden('photo', $photo, ['id' => $id, 'data-size' => $size, 'data-file-path' => $path]) }}
                    @endif
                </div>
                <div class="col-md-12" id="image-dropzone" data-max-files="1" data-token="{{ csrf_token() }}"
                    data-input-name="photo">
                        <div class="dz-message">
                            <span class="glyphicon glyphicon-cloud-upload"></span> Drop file here to upload.
                        </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address1">Address (Line 1)</label>
                {{ Form::text('address1', $update && $user->address ? $user->address->address1 : '',
                    ['class' => 'form-control', 'id' => 'address1']) }}
            </div>
            <div class="form-group">
                <label for="address2">Address (Line 2)</label>
                {{ Form::text('address2', $update && $user->address ? $user->address->address2 : '',
                ['class' => 'form-control', 'id' => 'address2']) }}
            </div>
            <div class="form-group">
                <label for="city">City</label>
                {{ Form::text('city', $update && $user->address ? $user->address->city : '',
                ['class' => 'form-control', 'id' => 'city']) }}
            </div>
            <div class="form-group">
                <label for="province">State/Province</label>
                {{ Form::text('province', $update && $user->address ? $user->address->province : '',
                ['class' => 'form-control', 'id' => 'province']) }}
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                {{ Form::select('country', ['' => 'Select Country'] + Country::getList(), $update && $user->address
                    ? $user->address->country : '',
                    ['class' => 'form-control combobox', 'id' => 'country', 'autocomplete' => 'off']) }}
            </div>
            <div class="form-group">
                <label for="postal_code">Postal Code</label>
                {{ Form::text('postal_code', $update && $user->address ? $user->address->postal_code : '',
                    ['class' => 'form-control', 'id' => 'postal_code']) }}
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                {{ Form::text('mobile', $update ? $user->profile->mobile : '',
                    ['class' => 'form-control', 'id' => 'mobile']) }}
            </div>
            <h4>Private Information</h4>
            <hr />
            <p>The information below will not be shown anywhere in the site. These will be used for
            future site improvements.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="birth_date">Birth Date</label>
                        {{ Form::text('birth_date', $update ? $user->profile->birth_date : ''
                            , ['class' => 'form-control', 'id' => 'birth-date-dp']) }}
                    </div>
                    <div class="col-md-6">
                        <label for="gender">Gender</label>
                        {{ Form::select('gender', ['' => 'Select Gender', 'male' => 'Male', 'female' => 'Female'],
                            $update ? $user->profile->gender : '', ['class' => 'form-control combobox', 'id' => 'gender']) }}
                    </div>
                </div>
            </div>
            {{ Form::submit($update ? 'Update' : 'Save', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
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