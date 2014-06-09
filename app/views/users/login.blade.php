@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h3>{{ Lang::get('general.user_login') }}</h3>
        <hr />
        @include('partials.form-errors', $errors)
        {{ Form::open(['url' => 'login', 'role' => 'form']) }}
            <div class="form-group">
                <label for="email">Email</label>
                {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email']) }}
            </div>
            <div class="form-group">
                <label for="password">{{ Lang::get('general.password') }}</label>
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
            </div>
            {{ Form::submit(Lang::get('general.sign_in'), ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
    <div class="col-md-7">
        <h3>{{ Lang::get('registration.not_registered') }}</h3>
        <a href="{{ URL::to('register') }}">{{ Lang::get('registration.click_to_register') }}</a>
    </div>
</div>
@stop