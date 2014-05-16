<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-sm-3 text-left">
                        <h4>Reviews</h4>
                    </div>
                    <div class="col-sm-3 text-left">
                        <h4>My-Ad</h4>
                    </div>
                    <div class="col-sm-3 text-left">
                        <h4>Info</h4>
                    </div>
                    <div class="col-sm-3 text-left">
                        <h4>Contact Us</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-sm-3 text-left">
                        <p>"Lorem ipsum dolor sit amet, dicat mollis deseruisse ea per, habemus fuisset reformidans per at. Vel graeco scriptorem in, eu mea diceret utroque pertinacia, sea dolor nusquam dissentiet et."</p>
                        <p>~ Bryan Adams</p>
                        <p>"Minim tritani no ius, vel alterum posidonium deterruisset an. Per eu volutpat efficiantur mediocritatem, mel an facer virtute constituto. Nec id laudem habemus iracundia."</p>
                        <p>~ Celine Dion</p>
                    </div>
                    <div class="col-sm-3 text-left">
                        <ul class="list-unstyled ctm-sitemap-list">
                            <li>My-Ad</li>
                            <li>Post an ad</li>
                            <li>Vehicles</li>
                            <li>Real Estate</li>
                            <li>Classifieds</li>
                            <ul class="list-unstyled site-map-subcategory">
                                <li>Electronic</li>
                                <li>Computer</li>
                                <li>Furniture</li>
                                <li>Tools</li>
                                <li>Pets</li>
                                <li>Jobs</li>
                                <li>Travel</li>
                                <li>Sports</li>
                                <li>Family</li>
                                <li>Services</li>
                                <li>Food</li>
                                <li>Community</li>
                                <li>Dating</li>
                                <li>Others</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-sm-3 text-left">
                        <div>
                            <ul class="list-unstyled">
                                <li><a href="{{ URL::to('about-us') }}">About Us</a></li>
                                <li><a href="{{ URL::to('/') }}">Vision and Mission</a></li>
                                <li><a href="{{ URL::to('our-story') }}">Our Story</a></li>
                                <li><a href="{{ URL::to('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ URL::to('terms-and-condition') }}">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="social-media">
                            <h4>Connect with Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"><img src="{{ URL::asset('assets/css/images/google_plus.png') }}" /></a></li>
                                <li><a href="#"><img src="{{ URL::asset('assets/css/images/facebook.png') }}" /></a></li>
                                <li><a href="#"><img src="{{ URL::asset('assets/css/images/twitter.png') }}" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="form-contact-name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="form-contact-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="control-label footer-contact-message">Your message</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label class="control-label footer-subscribe-check">
                                        <input type="checkbox" />I would like to subscribe to My-Ad's newsletter for tips and news.
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-very-red pull-right">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="container">
        <p class="footer-copy">Copyright &copy 2014 &nbsp;&nbsp;|&nbsp;&nbsp; www.my-ad.ca</p>
    </div>
</footer>