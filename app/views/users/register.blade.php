@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-7">
        <h3>{{ Lang::get('registration.register_subheader') }}</h3>
        <p>{{ Lang::get('general.complete_fields_text') }}</p>
        @include('partials.form-errors', $errors)
        {{ Form::open(['url' => 'register', 'role' => 'form', 'class' => 'ma-form']) }}
            <div class="form-group">
                <label for="first_name">{{ Lang::get('general.first_name') }}</label>
                {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => 'first_name']) }}
            </div>
            <div class="form-group">
                <label for="last_name">{{ Lang::get('general.last_name') }}</label>
                {{ Form::text('last_name', '', ['class' => 'form-control', 'id' => 'last_name']) }}
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email']) }}
            </div>
            <div class="form-group">
                <label for="password">{{ Lang::get('general.password') }}</label>
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
            </div>
            <div class="form-group">
                <label for="password_confirmation">{{ Lang::get('general.confirm_password') }}</label>
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
            </div>
            {{ Form::submit(Lang::get('general.register'), ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
    <div class="col-md-4">
        <h3>{{ Lang::get('registration.already_registered') }}</h3>
        <a href="{{ URL::to('login') }}">{{ Lang::get('general.click_to_login') }}</a>
    </div>
</div>
@stop