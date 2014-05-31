@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-7">
        <h3>Register for your My-Ad account</h3>
        <p>Please complete the following fields. All fields are required.</p>
        @include('partials.form-errors', $errors)
        {{ Form::open(['url' => 'register', 'role' => 'form']) }}
            <div class="form-group">
                <label for="first_name">First Name</label>
                {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => 'first_name']) }}
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                {{ Form::text('last_name', '', ['class' => 'form-control', 'id' => 'last_name']) }}
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email']) }}
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
            </div>
            {{ Form::submit('Register', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
    <div class="col-md-4">
        <h3>Already Registered?</h3>
        <a href="{{ URL::to('login') }}">Click here to login.</a>
    </div>
</div>
@stop