@extends('layouts.master')

@section('content')
<div id="static-pages" class="row">
    <div class="row">
        <div class="col-sm-5">
            <div class="col-sm-12">
                <h1 class="with-affix red">{{ Lang::get('general.privacy_policy') }}</h1>
            </div>
        </div>
        <div class="col-md-7">
            <div class="col-sm-12">
                <nav class="pull-right">
                    <a href="{{ URL::to('about-us') }}">About Us</a>
                    <a href="{{ URL::to('our-story') }}">Our Story</a>
                    <a href="{{ URL::to('vision-mission') }}">Vision Mission</a>
                    <a href="{{ URL::to('terms-and-condition') }}">Terms & Condition</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-sm-3 hidden-sm hidden-xs">
        <div id="side-affix" class="blue-affix">
            <ul class="nav list-unstyled">
                <li><a href="#privacy-policy">{{ Lang::get('general.privacy_policy') }}</a></li>
                <li><a href="#sites-covered">{{ Lang::get('general.sites_covered') }}</a></li>
                <li><a href="#childrens-privacy">{{ Lang::get('general.childrens_privacy') }}</a></li>
                <li><a href="#links-to">{{ Lang::get('general.links_non_op_websites') }}</a></li>
                <li><a href="#types-of">{{ Lang::get('general.types_of_info') }}</a>
                    <ul class="nav list-unstyled indented">
                        <li><a href="#non-personal-information">{{ Lang::get('general.non_personal_info') }}</a></li>
                        <li><a href="#aggregate-information">{{ Lang::get('general.aggregate_info') }}</a></li>
                        <li><a href="#log-files">{{ Lang::get('general.log_files') }}</a></li>
                        <li><a href="#cookies">{{ Lang::get('general.cookies') }}</a></li>
                        <li><a href="#beacons">{{ Lang::get('general.web_beacons') }}</a></li>
                        <li><a href="#personal-information">{{ Lang::get('general.personal_info') }}</a></li>
                        <li><a href="#members-only-web">{{ Lang::get('general.members_only_sites') }}</a></li>
                    </ul>
                <li><a href="#how-we-use">{{ Lang::get('general.how_we_use_info') }}</a></li>
                <li><a href="#information-sharing">{{ Lang::get('general.info_sharing') }}</a></li>
                <li><a href="#access-to-and-accuracy">{{ Lang::get('general.access_accuracy') }}</a></li>
                <li><a href="#security">{{ Lang::get('general.security') }}</a></li>
                <li><a href="#opting-out">{{ Lang::get('general.opting_out') }}</a></li>
            </ul>
         </div>
    </div>
    <div class="col-sm-9" data-spy="scroll" data-target="#side-affix">
        <div class="container-fluid">
            <div class="row" id="privacy-policy">
                <div class="col-sm-12" id="scroll-able">
                    <p>
                        {{ Lang::get('general.pp_texts_1') }} <a href="/contact">{{ Lang::get('general.contact_us') }}</a>; {{ Lang::get('general.pp_texts_2') }}
                    </p>
                    <p>
                        {{ Lang::get('general.pp_texts_3') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="sites-covered">{{ Lang::get('general.sites_covered') }}</h3>
                    <p>{{ Lang::get('general.pp_texts_4') }}</p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">Back to top</a></p>

                    <h3 id="childrens-privacy">{{ Lang::get('general.childrens_privacy') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_5') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="links-to">{{ Lang::get('general.links_non_op_websites') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_6') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="types-of">{{ Lang::get('general.types_of_info') }}</h3>

                    <h4 id="non-personal-information">{{ Lang::get('general.non_personal_info') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_7') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="aggregate-information">{{ Lang::get('general.aggregate_info') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_8') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="log-files">{{ Lang::get('general.log_files') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_9') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="cookies">{{ Lang::get('general.cookies') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_10') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_11') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="beacons">{{ Lang::get('general.web_beacons') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_12') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="personal-information">{{ Lang::get('general.personal_info') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_13') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="members-only-web">{{ Lang::get('general.members_only_sites') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_14') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="how-we-use">{{ Lang::get('general.how_we_use_info') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_15') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_16') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_17') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="information-sharing">{{ Lang::get('general.info_sharing') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_18') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_19') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_20') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_21') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_22') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_23') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_24') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="access-to-and-accuracy">{{ Lang::get('general.access_accuracy') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_25') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="security">{{ Lang::get('general.security') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_26') }}
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="opting-out">{{ Lang::get('general.opting_out') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_27') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_28') }} <a href="/contact">{{ Lang::get('general.contact_us') }}</a>.
                    </p>
                    <p><a href="#header-logo-{{ App::getLocale() }}">{{ Lang::get('general.back_to_top') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('more-footer-scripts')
<script type="text/javascript">
    jQuery(document).ready(function() {
       jQuery('body').scrollspy({ target: '#side-affix' }); 
       jQuery('#side-affix').affix({
            offset: {
                top: 200, 
                bottom: function () {
                  return (this.bottom = $('footer').outerHeight(true))
                }
            }
       })
    });
</script>
@stop