<footer>
    <div class="ft-h-container">
    </div>
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3 text-left">
                        <h4 class="ft-headings">{{ Lang::get('general.reviews') }}</h4>
                        <p>"Lorem ipsum dolor sit amet, dicat mollis deseruisse ea per, habemus fuisset reformidans per at. Vel graeco scriptorem in, eu mea diceret utroque pertinacia, sea dolor nusquam dissentiet et."</p>
                        <p>~ Bryan Adams</p>
                        <p>"Minim tritani no ius, vel alterum posidonium deterruisset an. Per eu volutpat efficiantur mediocritatem, mel an facer virtute constituto. Nec id laudem habemus iracundia."</p>
                        <p>~ Celine Dion</p>
                    </div>
                    <div class="col-sm-3 text-left">
                        <h4 class="ft-headings">{{ Lang::get('general.my_ad') }}</h4>
                        <ul class="list-unstyled ctm-sitemap-list">
                            <li>{{ Lang::get('general.my_ad') }}</li>
                            <li>{{ Lang::get('general.post_an_ad') }}</li>
                            <li>{{ Lang::choice('ads.vehicles', 2); }}</li>
                            <li>{{ Lang::get('ads.real_estate') }}</li>
                            <li>{{ Lang::get('general.classifieds') }}</li>
                            <ul class="list-unstyled site-map-subcategory">
                                <li>{{ Lang::get('ads.electronics') }}</li>
                                <li>{{ Lang::choice('ads.computers', 1) }}</li>
                                <li>{{ Lang::choice('ads.furniture', 1) }}</li>
                                <li>{{ Lang::choice('ads.tools', 2) }}</li>
                                <li>{{ Lang::choice('ads.pets', 2) }}</li>
                                <li>{{ Lang::choice('ads.jobs', 2) }}</li>
                                <li>{{ Lang::get('ads.travel') }}</li>
                                <li>{{ Lang::choice('ads.sports', 2) }}</li>
                                <li>{{ Lang::get('ads.family') }}</li>
                                <li>{{ Lang::choice('ads.services', 2) }}</li>
                                <li>{{ Lang::get('ads.food') }}</li>
                                <li>{{ Lang::get('ads.community') }}</li>
                                <li>{{ Lang::get('ads.dating') }}</li>
                                <li>{{ Lang::get('ads.others') }}</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-sm-3 text-left">
                        <h4 class="ft-headings">Info</h4>
                        <div>
                            <ul class="list-unstyled">
                                <li><a href="{{ URL::to('about-us') }}">{{ Lang::get('general.about_us') }}</a></li>
                                <li><a href="{{ URL::to('/vision-mission') }}">{{ Lang::get('general.vission_mission') }}</a></li>
                                <li><a href="{{ URL::to('our-story') }}">{{ Lang::get('general.our_story') }}</a></li>
                                <li><a href="{{ URL::to('privacy-policy') }}">{{ Lang::get('general.privacy_policy') }}</a></li>
                                <li><a href="{{ URL::to('terms-and-condition') }}">{{ Lang::get('general.terms_and_conditions') }}</a></li>
                            </ul>
                        </div>
                        <div class="social-media">
                            <h4>{{ Lang::get('general.connect_with_us') }}</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"><img src="{{ URL::asset('assets/css/images/google_plus-white.png') }}" /></a></li>
                                <li><a href="#"><img src="{{ URL::asset('assets/css/images/facebook-white.png') }}" /></a></li>
                                <li><a href="#"><img src="{{ URL::asset('assets/css/images/twitter-white.png') }}" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h4 class="ft-headings">{{ ucfirst(Lang::get('general.contact_us')) }}</h4>
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="form-contact-name" placeholder="{{ Lang::get('general.name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="form-contact-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="control-label footer-contact-message">{{ Lang::get('general.your_message') }}</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label class="control-label footer-subscribe-check">
                                        <input type="checkbox" />{{ Lang::get('general.subscription_text') }}
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-red pull-right">{{ Lang::get('general.send') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="container">
        <p class="footer-copy">{{ Lang::get('general.copyright') }} &copy 2014 &nbsp;&nbsp;|&nbsp;&nbsp; www.{{ Lang::get('general.site_base_name') }}</p>
    </div>
</footer>