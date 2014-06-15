@extends('layouts.master')

@section('content')
<div id="static-pages" class="row">
    <div class="col-sm-3">
        <div id="side-affix">
            <ul class="nav list-unstyled">
                <li><a href="#privacy-policy">{{ Lang::get('general.privacy_policy') }}</a></li>
                <li><a href="#sites-covered">{{ Lang::get('privacy-policy.sites_covered') }}</a></li>
                <li><a href="#childrens-privacy">{{ Lang::get('privacy-policy.childrens_privacy') }}</a></li>
                <li><a href="#links-to">{{ Lang::get('privacy-policy.links_non_op_websites') }}</a></li>
                <li><a href="#types-of">{{ Lang::get('privacy-policy.types_of_info') }}</a>
                    <ul class="nav list-unstyled indented">
                        <li><a href="#non-personal-information">{{ Lang::get('privacy-policy.non_personal_info') }}</a></li>
                        <li><a href="#aggregate-information">{{ Lang::get('privacy-policy.aggregate_info') }}</a></li>
                        <li><a href="#log-files">{{ Lang::get('privacy-policy.log_files') }}</a></li>
                        <li><a href="#cookies">{{ Lang::get('privacy-policy.cookies') }}</a></li>
                        <li><a href="#beacons">{{ Lang::get('privacy-policy.web_beacons') }}</a></li>
                        <li><a href="#personal-information">{{ Lang::get('privacy-policy.personal_info') }}</a></li>
                        <li><a href="#members-only-web">{{ Lang::get('privacy-policy.members_only_sites') }}</a></li>
                    </ul>
                <li><a href="#how-we-use">{{ Lang::get('privacy-policy.how_we_use_info') }}</a></li>
                <li><a href="#information-sharing">{{ Lang::get('privacy-policy.info_sharing') }}</a></li>
                <li><a href="#access-to-and-accuracy">{{ Lang::get('privacy-policy.access_accuracy') }}</a></li>
                <li><a href="#security">{{ Lang::get('privacy-policy.security') }}</a></li>
                <li><a href="#opting-out">{{ Lang::get('privacy-policy.opting_out') }}</a></li>
            </ul>
         </div>
    </div>
    <div class="col-sm-9" data-spy="scroll" data-target="#side-affix">
        <div class="container-fluid" >
            <h1 id="privacy-policy">{{ Lang::get('general.privacy_policy') }}</h1>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        {{ Lang::get('privacy-policy.paragraph_1') }} <a href="/contact">{{ Lang::get('general.contact_us') }}</a>; {{ Lang::get('privacy-policy.paragraph_2') }}
                    </p>
                    <p>
                        {{ Lang::get('privacy-policy.paragraph_3') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="sites-covered">{{ Lang::get('privacy-policy.sites_covered') }}</h3>
                    <p>{{ Lang::get('privacy-policy.paragraph_4') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="childrens-privacy">{{ Lang::get('privacy-policy.childrens_privacy') }}</h3>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_5') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="links-to">{{ Lang::get('privacy-policy.links_non_op_websites') }}</h3>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_6') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="types-of">{{ Lang::get('privacy-policy.types_of_info') }}</h3>

                    <h4 id="non-personal-information">{{ Lang::get('privacy-policy.non_personal_info') }}</h4>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_7') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="aggregate-information">{{ Lang::get('privacy-policy.aggregate_info') }}</h4>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_8') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="log-files">{{ Lang::get('privacy-policy.log_files') }}</h4>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_9') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="cookies">{{ Lang::get('privacy-policy.cookies') }}</h4>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_10') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_11') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="beacons">{{ Lang::get('privacy-policy.web_beacons') }}</h4>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_12') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="personal-information">{{ Lang::get('privacy-policy.personal_info') }}</h4>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_13') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="members-only-web">{{ Lang::get('privacy-policy.members_only_sites') }}</h4>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_14') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="how-we-use">{{ Lang::get('privacy-policy.how_we_use_info') }}</h3>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_15') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_16') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_17') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="information-sharing">{{ Lang::get('privacy-policy.info_sharing') }}</h3>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_18') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_19') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_20') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_21') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_22') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_23') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_24') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="access-to-and-accuracy">{{ Lang::get('privacy-policy.access_accuracy') }}</h3>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_25') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="security">{{ Lang::get('privacy-policy.security') }}</h3>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_26') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="opting-out">{{ Lang::get('privacy-policy.opting_out') }}</h3>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_27') }}
                    </p>
                    <p>
                    {{ Lang::get('privacy-policy.paragraph_28') }} <a href="/contact">{{ Lang::get('general.contact_us') }}</a>.
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>
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