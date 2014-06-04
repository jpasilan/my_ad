<nav class="navbar navbar-static-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="navbar-header">
                    <a href="{{ URL::to('/') }}" class="navbar-brand"><img id="header-logo" src="{{ URL::asset('assets/css/images/logo.png') }}" height="147"></a>
                </div>
            </div>
            <div class="col-sm-10 no-padding-right">
                <div class="container-fluid">
                    <?php $loggedIn = Sentry::check() ?>
                    <div class="row inline-login-form{{ isset($hide_login) || $loggedIn ? ' hide-sign-in' : ''}}">
                        {{ Form::open(['url' => 'login', 'class' => 'navbar-form navbar-right', 'role' => 'form']) }}
                            {{ Form::email('email', '', ['placeholder' => 'Email', 'class' => 'form-control']) }}
                            {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
                            {{ Form::submit('Sign in', ['class' => 'btn btn-primary']) }}
                            <a href="{{ URL::to('register') }}" class="btn btn-register" role="button">Register</a>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="checkbox remember"><label>{{ Form::checkbox('remember_me') }} <span class="remember-text">Remember me</span></label></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        <label>
                                            <a data-toggle="modal" data-target="#resetModal" class="yellow-text">
                                                Forgot Password?
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div class="row{{ isset($hide_login) || $loggedIn ? ' hide-sign-in' : ''}}">
                        <p class="navbar-text navbar-right social-media">
                            <span><strong>Sign in using:</strong></span>
                            <a href="#"><img src="{{ URL::asset('assets/css/images/google_plus.png') }}" /></a>
                            <a href="#"><img src="{{ URL::asset('assets/css/images/facebook.png') }}" /></a>
                            <a href="#"><img src="{{ URL::asset('assets/css/images/twitter.png') }}" /></a>
                        </p>
                    </div>
                    <div class="row">
                        <ul class="nav nav-tabs navbar-right nav-fix">
                            <li {{ Request::is('/') ? 'class="active"' : '' }}><a href="{{ URL::to('/') }}">Classifieds</a></li>
                            <li {{ Request::is('search-vehicles') ? 'class="active"' : '' }}><a href="{{ URL::to('/search-vehicles') }}">Vehicles</a></li>
                            <li><a href="{{ URL::to('/') }}">Real Estate</a></li>
                            <li><a href="{{ URL::to('/') }}">My-Ad</a></li>
                            @if ($loggedIn)
                            <li>
                                <a href="{{ URL::to('ad/create') }}">{{ Lang::get('ads.post_an_ad') }}</a>
                            </li>
                            <li><a href="{{ URL::to('/logout') }}">Logout</a></li>
                            @endif
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</nav>
@if (!$loggedIn)
<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="resetModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="resetModalLabel">Password Reset</h3>
            </div>
            {{ Form::open(['url' => 'password/request']) }}
            <div class="modal-body">
                <p>Please enter your e-mail address so that we can send you the instructions.</p>
                <div class="form-group">
                    {{ Form::email('email', '', ['class' => 'form-control input-lg', 'placeholder' => 'Email']) }}
                </div>
                {{ Form::submit('Reset My Password', ['class' => 'btn btn-primary btn-lg btn-block']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endif
