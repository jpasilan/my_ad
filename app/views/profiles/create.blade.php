@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h3>{{ $update ? 'Update Profile' : 'Add Profile' }}</h3>
        @include('partials.form-errors', $errors)
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
                <label for="photo">Photo</label>
                {{ Form::file('photo', ['id' => 'photoDropZone']) }}
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
            <div class="form-group">
                <label for="birth_date">Birth Date</label>
                {{ Form::text('birth_date', $update ? $user->profile->birth_date : '',
                ['class' => 'form-control', 'id' => 'birth_date']) }}
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                {{ Form::select('gender', ['Select Gender', 'male' => 'Male', 'female' => 'Female'], $update ? $user->profile->gender : '',
                ['class' => 'form-control', 'id' => 'gender']) }}
            </div>
            {{ Form::submit($update ? 'Update' : 'Save', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>
@stop