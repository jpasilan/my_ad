@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h3>Password Reset</h3>
        <p>Please fill up all the fields.</p>
        @include('partials.form-errors', [$errors])
        {{ Form::open(['url' => 'password/reset/' . $key, 'role' => 'form']) }}
            <div class="form-group">
                <label for="email">Email</label>
                {{ Form::email('email', '', ['class' => 'form-control', 'id' =>  'email']) }}
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
            </div>
            {{ Form::submit('Update Password', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>
@stop