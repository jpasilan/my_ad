@extends('layouts.master')

@section('content')
<div id="static-pages">
    <div class="row">
        <div class="col-md-5">
                <h1>About Us</h1>
        </div>
        <div class="col-md-7 {{ App::getLocale() }}">
                <nav class="pull-right">
                    <a href="{{ URL::to('vision-mission') }}">Vision Mission</a>
                    <a href="{{ URL::to('our-story') }}">Our Story</a>
                    <a href="{{ URL::to('privacy-policy') }}">Privacy Policy</a>
                    <a href="{{ URL::to('terms-and-condition') }}">Terms & Condition</a>
                </nav>
        </div>
    </div>
    <div class="row">
        <div class="team-profile clearfix">
            <div class="col-md-4 no-padding-left">
                <img src="{{ URL::asset('assets/css/images/image-placeholder.png') }}" class="img-responsive" />
                <h4>Richard Valdevit</h4>
                <p class="position">Founder, Visionary</p>
            </div>
            <div class="col-md-8 no-padding-right">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et orci interdum, placerat felis eget, blandit elit. Phasellus velit ligula, iaculis a velit vel, accumsan suscipit massa. Vivamus aliquam venenatis condimentum. Curabitur ut sapien sed libero bibendum tristique ut eu libero. Mauris pretium imperdiet velit eu congue. Suspendisse vitae diam augue. Proin porta est vitae luctus facilisis. Morbi scelerisque at arcu ut iaculis. Proin aliquet erat vel enim vehicula eleifend. Aliquam ut nunc mi. Mauris molestie condimentum tellus, eget feugiat felis tempor ac. Curabitur sed porttitor neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc dignissim in tortor non facilisis. Phasellus id purus nunc.
                </p>
                <p>
                    Ut feugiat elit vel ipsum egestas hendrerit. Etiam quis felis nec augue consequat lacinia in a nunc. Proin vel augue risus. Aenean urna erat, consequat vel augue in, rutrum auctor diam. Aenean egestas tortor quis est euismod, et facilisis tortor blandit. Nullam suscipit odio odio, eleifend congue nibh laoreet vel. Phasellus ut nulla ac arcu blandit sollicitudin in eu tortor. Vestibulum mattis risus congue nisl faucibus lacinia. In aliquet tellus eu fringilla sagittis. Cras dapibus ipsum sit amet odio facilisis eleifend id vitae nunc. Sed libero lacus, varius eget turpis nec, rutrum semper erat.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="team-profile clearfix">
            <div class="col-md-4 no-padding-left">
                <img src="{{ URL::asset('assets/css/images/image-placeholder.png') }}" class="img-responsive" />
                <h4>Ritche Felix Cartagena</h4>
                <p class="position">Project Manger</p>
            </div>
            <div class="col-md-8 no-padding-right">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et orci interdum, placerat felis eget, blandit elit. Phasellus velit ligula, iaculis a velit vel, accumsan suscipit massa. Vivamus aliquam venenatis condimentum. Curabitur ut sapien sed libero bibendum tristique ut eu libero. Mauris pretium imperdiet velit eu congue. Suspendisse vitae diam augue. Proin porta est vitae luctus facilisis. Morbi scelerisque at arcu ut iaculis. Proin aliquet erat vel enim vehicula eleifend. Aliquam ut nunc mi. Mauris molestie condimentum tellus, eget feugiat felis tempor ac. Curabitur sed porttitor neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc dignissim in tortor non facilisis. Phasellus id purus nunc.
                </p>
                <p>
                    Ut feugiat elit vel ipsum egestas hendrerit. Etiam quis felis nec augue consequat lacinia in a nunc. Proin vel augue risus. Aenean urna erat, consequat vel augue in, rutrum auctor diam. Aenean egestas tortor quis est euismod, et facilisis tortor blandit. Nullam suscipit odio odio, eleifend congue nibh laoreet vel. Phasellus ut nulla ac arcu blandit sollicitudin in eu tortor. Vestibulum mattis risus congue nisl faucibus lacinia. In aliquet tellus eu fringilla sagittis. Cras dapibus ipsum sit amet odio facilisis eleifend id vitae nunc. Sed libero lacus, varius eget turpis nec, rutrum semper erat.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="team-profile clearfix">
            <div class="col-md-4 no-padding-left">
                <img src="{{ URL::asset('assets/css/images/image-placeholder.png') }}" class="img-responsive" />
                <h4>John Doe</h4>
                <p class="position">Back-End Developer</p>
            </div>
            <div class="col-md-8 no-padding-right">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et orci interdum, placerat felis eget, blandit elit. Phasellus velit ligula, iaculis a velit vel, accumsan suscipit massa. Vivamus aliquam venenatis condimentum. Curabitur ut sapien sed libero bibendum tristique ut eu libero. Mauris pretium imperdiet velit eu congue. Suspendisse vitae diam augue. Proin porta est vitae luctus facilisis. Morbi scelerisque at arcu ut iaculis. Proin aliquet erat vel enim vehicula eleifend. Aliquam ut nunc mi. Mauris molestie condimentum tellus, eget feugiat felis tempor ac. Curabitur sed porttitor neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc dignissim in tortor non facilisis. Phasellus id purus nunc.
                </p>
                <p>
                    Ut feugiat elit vel ipsum egestas hendrerit. Etiam quis felis nec augue consequat lacinia in a nunc. Proin vel augue risus. Aenean urna erat, consequat vel augue in, rutrum auctor diam. Aenean egestas tortor quis est euismod, et facilisis tortor blandit. Nullam suscipit odio odio, eleifend congue nibh laoreet vel. Phasellus ut nulla ac arcu blandit sollicitudin in eu tortor. Vestibulum mattis risus congue nisl faucibus lacinia. In aliquet tellus eu fringilla sagittis. Cras dapibus ipsum sit amet odio facilisis eleifend id vitae nunc. Sed libero lacus, varius eget turpis nec, rutrum semper erat.
                </p>
            </div>
        </div>
    </div>
</div>
@stop