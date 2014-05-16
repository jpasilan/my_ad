<nav class="navbar navbar-static-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 no-padding-right">
                <div class="col-sm-2 hidden-xs">
                    <div class="navbar-header">
                        <a href="{{ URL::to('/') }}" class="navbar-brand"><img id="header-logo" src="{{ URL::asset('assets/css/images/logo.png') }}" height="150"></a>
                    </div>
                </div>
                <div class="col-sm-10 no-padding-right">
                    <div class="container-fluid">
                        <div class="row">
                            <form method="post" action="" class="navbar-form navbar-right">
                                <input type="email" class="form-control input-sm" id="id-input-login-email" placeholder="Email">
                                <input type="password" class="form-control input-sm" id="id-input-login-password" placeholder="Password">
                                <button type="button" class="btn btn-primary">Sign in</button>
                                <button type="button" class="btn btn-primary btn-register">Register</button>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="checkbox"><label class="small"><input type="checkbox"> Remember me</label></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="checkbox"><label class="small"><a href="#" class="yellow-text">Forgot Password?</a></label></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <p class="navbar-text navbar-right social-media">
                                <span><strong>Sign in using:</strong></span>
                                <a href="#"><img src="{{ URL::asset('assets/css/images/google_plus.png') }}" /></a>
                                <a href="#"><img src="{{ URL::asset('assets/css/images/facebook.png') }}" /></a>
                                <a href="#"><img src="{{ URL::asset('assets/css/images/twitter.png') }}" /></a>
                            </p>
                        </div>
                        <div class="row">
                            <ul class="nav nav-tabs navbar-right">
                                <li class="active"><a href="{{ URL::to('/') }}">Classifieds</a></li>
                                <li><a href="{{ URL::to('/') }}">Vehicles</a></li>
                                <li><a href="{{ URL::to('/') }}">Real Estate</a></li>
                                <li><a href="{{ URL::to('/') }}">My-Ad</a></li>
                                <li><a href="{{ URL::to('/') }}">Post an Ad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>