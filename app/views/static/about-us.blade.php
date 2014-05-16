@extends('layouts.master');

@section('content')
<div class="row">
    <div class="col-sm-2 col-sm-offset-1">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{ URL::to('about-us') }}">About Us</a></li>
            <li><a href="{{ URL::to('/') }}">Vision and Mission</a></li>
            <li><a href="{{ URL::to('our-story') }}">Our Story</a></li>
            <li><a href="{{ URL::to('privacy-policy') }}">Privacy Policy</a></li>
            <li><a href="{{ URL::to('terms-and-condition') }}">Terms & Conditions</a></li>
        </ul>
    </div>
    <div class="col-sm-8">
        <div class="container-fluid">
            <h1>About Us</h1>
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{ URL::asset('assets/css/images/generic-profile-image.png') }}" class="img-responsive img-rounded" />
                    <div class="text-center profile-image-description">
                        <h4>Richard Valdevit</h4>
                        <p>Founder, Visionary</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="{{ URL::asset('assets/css/images/generic-profile-image.png') }}" class="img-responsive img-rounded" />
                    <div class="text-center profile-image-description">
                        <h4>Ritche Felix Cartagena</h4>
                        <p>Project Manager</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="{{ URL::asset('assets/css/images/generic-profile-image.png') }}" class="img-responsive img-rounded" />
                    <div class="text-center profile-image-description">
                        <h4>John Doe</h4>
                        <p>Developer</p>
                    </div>
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et orci interdum, placerat felis eget, blandit elit. Phasellus velit ligula, iaculis a velit vel, accumsan suscipit massa. Vivamus aliquam venenatis condimentum. Curabitur ut sapien sed libero bibendum tristique ut eu libero. Mauris pretium imperdiet velit eu congue. Suspendisse vitae diam augue. Proin porta est vitae luctus facilisis. Morbi scelerisque at arcu ut iaculis. Proin aliquet erat vel enim vehicula eleifend. Aliquam ut nunc mi. Mauris molestie condimentum tellus, eget feugiat felis tempor ac. Curabitur sed porttitor neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc dignissim in tortor non facilisis. Phasellus id purus nunc.
            </p>
            <p>
                Ut feugiat elit vel ipsum egestas hendrerit. Etiam quis felis nec augue consequat lacinia in a nunc. Proin vel augue risus. Aenean urna erat, consequat vel augue in, rutrum auctor diam. Aenean egestas tortor quis est euismod, et facilisis tortor blandit. Nullam suscipit odio odio, eleifend congue nibh laoreet vel. Phasellus ut nulla ac arcu blandit sollicitudin in eu tortor. Vestibulum mattis risus congue nisl faucibus lacinia. In aliquet tellus eu fringilla sagittis. Cras dapibus ipsum sit amet odio facilisis eleifend id vitae nunc. Sed libero lacus, varius eget turpis nec, rutrum semper erat.
            </p>
            <p>
                Sed imperdiet neque massa, a convallis felis lacinia eget. Donec pretium, velit eu aliquet pulvinar, mauris felis feugiat nisl, vel cursus enim mauris eget enim. Nulla facilisi. In hac habitasse platea dictumst. Vestibulum tincidunt ipsum id vehicula tempor. In massa metus, ullamcorper et leo quis, euismod convallis odio. Pellentesque placerat ac mauris in scelerisque. Nunc id viverra justo. Donec luctus consequat enim, id sodales enim consequat quis. Vestibulum aliquam viverra euismod. Nam risus sapien, rutrum non massa eget, sagittis consectetur nisl.
            </p>
        </div>
    </div>
</div>
@stop