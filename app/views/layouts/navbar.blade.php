<nav class="navbar navbar-static-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 hidden-xs">
                <div class="navbar-header">
                    <a href="{{ URL::to('/') }}" class="navbar-brand"><img id="header-logo" src="assets/css/images/logo.jpg"></a>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="container-fluid">
                    <?php $loggedIn = Sentry::check() ?>
                    <div class="row{{ isset($hide_login) || $loggedIn ? ' hide-sign-in' : ''}}">
                        {{ Form::open(['url' => 'login', 'class' => 'navbar-form navbar-right', 'role' => 'form']) }}
                            {{ Form::email('email', '', ['placeholder' => 'Email', 'class' => 'form-control']) }}
                            {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
                            {{ Form::submit('Sign in', ['class' => 'btn btn-primary']) }}
                            <a href="{{ URL::to('register') }}" class="btn btn-register" role="button">Register</a>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="checkbox"><label>{{ Form::checkbox('remember_me') }} Remember me</label></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        <label>
                                            <a href="{{ URL::to('password/reset') }}" class="yellow-text">Forgot Password?</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div class="row{{ isset($hide_login) || $loggedIn ? ' hide-sign-in' : ''}}">
                        <p class="navbar-text navbar-right social-media">
                            <span><strong>Sign in using:</strong></span>
                            <a href="#"><img src="assets/css/images/google_plus.png" /></a>
                            <a href="#"><img src="assets/css/images/facebook.png" /></a>
                            <a href="#"><img src="assets/css/images/twitter.png" /></a>
                        </p>
                    </div>
                    <div class="row">
                        <ul class="nav nav-tabs navbar-right">
                            <li class="active"><a href="index.htm">Classifieds</a></li>
                            <li><a href="vehicles.htm">Vehicles</a></li>
                            <li><a href="real_estate.htm">Real Estate</a></li>
                            <li><a href="#">My-Ad</a></li>
                            <li><a href="#">Post an Ad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>