@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h3>User Login</h3>
        <hr />
        @include('partials.form-errors', $errors)
        {{ Form::open(['url' => 'login', 'role' => 'form']) }}
            <div class="form-group">
                <label for="email">Email</label>
                {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email']) }}
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
            </div>
            {{ Form::submit('Sign in', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
    <div class="col-md-7">
        <h3>Not Registered?</h3>
        <a href="{{ URL::to('register') }}">Click here to register for an account.</a>
    </div>
</div>
@stop