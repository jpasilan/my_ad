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
                <label for="first_name">First Name</label>
                {{ Form::text('first_name', $user->first_name, ['class' => 'form-control', 'id' => 'first_name']) }}
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                {{ Form::text('last_name', $user->last_name, ['class' => 'form-control', 'id' => 'last_name']) }}
            </div>
            <div class="form-group">
                <label for="photo">Photo/Avatar</label>
                {{ Form::hidden('photo', $update ? $user->profile->photo : '', ['id' => 'photoPath']) }}
                <div class="col-md-12" id="photoDropzone">
                    <div class="dz-message"><span class="glyphicon glyphicon-cloud-upload"></span> Drop file here to upload.</div>
                </div>
            </div>
            <div class="form-group">
                <label for="address1">Address (Line 1)</label>
                {{ Form::text('address1', $update ? $user->profile->address1 : '',
                    ['class' => 'form-control', 'id' => 'address1']) }}
            </div>
            <div class="form-group">
                <label for="address2">Address (Line 2)</label>
                {{ Form::text('address2', $update ? $user->profile->address2 : '',
                ['class' => 'form-control', 'id' => 'address2']) }}
            </div>
            <div class="form-group">
                <label for="city">City</label>
                {{ Form::text('city', $update ? $user->profile->city : '',
                ['class' => 'form-control', 'id' => 'city']) }}
            </div>
            <div class="form-group">
                <label for="province">State/Province</label>
                {{ Form::text('province', $update ? $user->profile->province : '',
                ['class' => 'form-control', 'id' => 'province']) }}
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                {{ Form::select('country', ['Select Country'] + Country::getList(), $update ? $user->profile->country : '',
                ['class' => 'form-control', 'id' => 'country']) }}
            </div>
            <div class="form-group">
                <label for="postal_code">Postal Code</label>
                {{ Form::text('postal_code', $update ? $user->profile->postal_code : '',
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
                <label for="birth_date">Birth Date</label>
                <div class="row">
                    <div class="col-md-5">
                        {{ Form::text('birth_date', $update ? $user->profile->birth_date : ''
                            , ['class' => 'form-control', 'id' => 'birth-date-dp']) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <div class="row">
                    <div class="col-md-5">
                        {{ Form::select('gender', ['Select Gender', 'male' => 'Male', 'female' => 'Female'], $update ? $user->profile->gender : '',
                            ['class' => 'form-control', 'id' => 'gender']) }}
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
<style>
    #photoDropzone {
        margin-bottom: 15px;
    }
    .dz-message {
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.5em;
        position: absolute;
        top: 45%;
        left: 20%;
        font-style: italic;
    }
</style>
<script type="text/javascript">
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

        // Dropzone.js stuff
        Dropzone.autoDiscover = false;

        var dropzone = new Dropzone('#photoDropzone',  { url: "{{ URL::to('image') }}", maxFiles: 1 });
        jQuery('#photoDropzone').addClass('dropzone');

        dropzone.on('success', function(file, response) {
            jQuery('input#photoPath').val(response.filename);
        });
    });
</script>
@stop