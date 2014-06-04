@extends('layouts.master')

@section('content')
<div id="static-pages" class="row">
    <div class="col-sm-3">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ URL::to('about-us') }}">{{ Lang::get('general.about_us') }</a></li>
            <li class="active"><a href="{{ URL::to('/vision-mission') }}">Vision and Mission</a></li>
            <li><a href="{{ URL::to('our-story') }}">{{ Lang::get('general.our_story') }</a></li>
            <li><a href="{{ URL::to('privacy-policy') }}">{{ Lang::get('general.privacy_policy') }}</a></li>
            <li><a href="{{ URL::to('terms-and-condition') }}">{{ Lang::get('general.terms_and_conditions') }}</a></li>
        </ul>
    </div>
    <div class="col-sm-9">
        <div class="container-fluid">
            <div class="row text-center">
                <h1>Vision</h1>
                <p class="lead">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et orci interdum, placerat felis eget, blandit elit."
                </p>
                <h1>Mission</h1>
                <p class="lead">
                    "Ut feugiat elit vel ipsum egestas hendrerit. Etiam quis felis nec augue consequat lacinia in a nunc. Proin vel augue risus."
                </p>
            </div>
        </div>
    </div>
</div>
@stop