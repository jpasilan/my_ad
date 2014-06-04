@extends('layouts.master')

@section('content')
<div id="static-pages" class="row">
    <div class="col-sm-3">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ URL::to('about-us') }}">{{ Lang::get('general.about_us') }}</a></li>
            <li><a href="{{ URL::to('/vision-mission') }}">Vision and Mission</a></li>
            <li class="active"><a href="{{ URL::to('our-story') }}">{{ Lang::get('general.our_story') }}</a></li>
            <li><a href="{{ URL::to('privacy-policy') }}">{{ Lang::get('general.privacy_policy') }}</a></li>
            <li><a href="{{ URL::to('terms-and-condition') }}">{{ Lang::get('general.terms_and_conditions') }}</a></li>
        </ul>
    </div>
    <div class="col-sm-9">
        <div class="container-fluid">
            <h1>{{ Lang::get('general.our_story') }}</h1>
            <div class="col-sm-3">
                <img src="{{ URL::asset('assets/css/images/generic-profile-image.png') }}" class="img-responsive img-rounded" />
                <div class="text-center profile-image-description">
                    <h4>Richard Valdevit</h4>
                    <p>Founder, Visionary</p>
                </div>
            </div>
            <div class="col-sm-9">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et orci interdum, placerat felis eget, blandit elit.
                    Phasellus velit ligula, iaculis a velit vel, accumsan suscipit massa. Vivamus aliquam venenatis condimentum. Curabitur
                    ut sapien sed libero bibendum tristique ut eu libero. Mauris pretium imperdiet velit eu congue. Suspendisse vitae diam
                    augue. Proin porta est vitae luctus facilisis. Morbi scelerisque at arcu ut iaculis. Proin aliquet erat vel enim
                    vehicula eleifend. Aliquam ut nunc mi. Mauris molestie condimentum tellus, eget feugiat felis tempor ac. Curabitur
                    sed porttitor neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc
                    dignissim in tortor non facilisis. Phasellus id purus nunc.
                </p>
                <p>
                    Ut feugiat elit vel ipsum egestas hendrerit. Etiam quis felis nec augue consequat lacinia in a nunc. Proin vel
                    augue risus. Aenean urna erat, consequat vel augue in, rutrum auctor diam. Aenean egestas tortor quis est euismod,
                    et facilisis tortor blandit. Nullam suscipit odio odio, eleifend congue nibh laoreet vel. Phasellus ut nulla ac
                    arcu blandit sollicitudin in eu tortor. Vestibulum mattis risus congue nisl faucibus lacinia. In aliquet tellus eu
                    fringilla sagittis. Cras dapibus ipsum sit amet odio facilisis eleifend id vitae nunc. Sed libero lacus, varius eget
                    turpis nec, rutrum semper erat.
                </p>
                <p>
                    Sed imperdiet neque massa, a convallis felis lacinia eget. Donec pretium, velit eu aliquet pulvinar, mauris felis
                    feugiat nisl, vel cursus enim mauris eget enim. Nulla facilisi. In hac habitasse platea dictumst. Vestibulum
                    tincidunt ipsum id vehicula tempor. In massa metus, ullamcorper et leo quis, euismod convallis odio. Pellentesque
                    placerat ac mauris in scelerisque. Nunc id viverra justo. Donec luctus consequat enim, id sodales enim consequat
                    quis. Vestibulum aliquam viverra euismod. Nam risus sapien, rutrum non massa eget, sagittis consectetur nisl.
                </p>
            </div>
        </div>
    </div>
</div>
@stop