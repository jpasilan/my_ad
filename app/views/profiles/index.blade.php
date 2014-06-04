@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ URL::asset('/assets/uploads/images/' . $user->profile->photo) }}" style="width: 100px; height: 100px;" />
            </div>
            <div class="col-md-10">
                <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                <small>
                    {{ $user->profile->address1 }}<br />
                    {{ $user->profile->address2 }}<br />
                    {{ $user->profile->city }}, {{ $user->profile->province }} {{ $user->profile->postal_code }}
                </small>
            </div>
        </div>
    </div>
</div>
@stop