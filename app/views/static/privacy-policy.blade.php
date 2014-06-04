@extends('layouts.master')

@section('content')
<div id="static-pages" class="row">
    <div class="col-sm-3">
        <div id="side-affix">
            <ul class="nav list-unstyled">
                <li><a href="#privacy-policy">{{ Lang::get('general.privacy_policy') }}</a></li>
                <li><a href="#sites-covered">{{ Lang::get('general.pp_menu_2') }}</a></li>
                <li><a href="#childrens-privacy">{{ Lang::get('general.pp_menu_3') }}</a></li>
                <li><a href="#links-to">{{ Lang::get('general.pp_menu_4') }}</a></li>
                <li><a href="#types-of">{{ Lang::get('general.pp_menu_5') }}</a>
                    <ul class="nav list-unstyled indented">
                        <li><a href="#non-personal-information">{{ Lang::get('general.pp_menu_5_1') }}</a></li>
                        <li><a href="#aggregate-information">{{ Lang::get('general.pp_menu_5_2') }}</a></li>
                        <li><a href="#log-files">{{ Lang::get('general.pp_menu_5_3') }}</a></li>
                        <li><a href="#cookies">{{ Lang::get('general.pp_menu_5_4') }}</a></li>
                        <li><a href="#beacons">{{ Lang::get('general.pp_menu_5_5') }}</a></li>
                        <li><a href="#personal-information">{{ Lang::get('general.pp_menu_5_6') }}</a></li>
                        <li><a href="#members-only-web">{{ Lang::get('general.pp_menu_5_7') }}</a></li>
                    </ul>
                <li><a href="#how-we-use">{{ Lang::get('general.pp_menu_6') }}</a></li>
                <li><a href="#information-sharing">{{ Lang::get('general.pp_menu_7') }}</a></li>
                <li><a href="#access-to-and-accuracy">{{ Lang::get('general.pp_menu_8') }}</a></li>
                <li><a href="#security">{{ Lang::get('general.pp_menu_9') }}</a></li>
                <li><a href="#opting-out">{{ Lang::get('general.pp_menu_10') }}</a></li>
            </ul>
         </div>
    </div>
    <div class="col-sm-9" data-spy="scroll" data-target="#side-affix">
        <div class="container-fluid" >
            <h1 id="privacy-policy">{{ Lang::get('general.privacy_policy') }}</h1>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        {{ Lang::get('general.pp_texts_1') }} <a href="/contact">{{ Lang::get('general.contact_us') }}</a>; {{ Lang::get('general.pp_texts_2') }}
                    </p>
                    <p>
                        {{ Lang::get('general.pp_texts_3') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="sites-covered">{{ Lang::get('general.pp_menu_2') }}</h3>
                    <p>{{ Lang::get('general.pp_texts_4') }}</p>
                    <p><a href="#header-logo">Back to top</a></p>

                    <h3 id="childrens-privacy">{{ Lang::get('general.pp_menu_3') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_5') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="links-to">{{ Lang::get('general.pp_menu_4') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_6') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="types-of">{{ Lang::get('general.pp_menu_5') }}</h3>

                    <h4 id="non-personal-information">{{ Lang::get('general.pp_menu_5_1') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_7') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="aggregate-information">{{ Lang::get('general.pp_menu_5_2') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_8') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="log-files">{{ Lang::get('general.pp_menu_5_3') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_9') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="cookies">{{ Lang::get('general.pp_menu_5_4') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_10') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_11') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="beacons">{{ Lang::get('general.pp_menu_5_5') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_12') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="personal-information">{{ Lang::get('general.pp_menu_5_6') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_13') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h4 id="members-only-web">{{ Lang::get('general.pp_menu_5_7') }}</h4>
                    <p>
                    {{ Lang::get('general.pp_texts_14') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="how-we-use">{{ Lang::get('general.pp_menu_6') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_15') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_16') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_17') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="information-sharing">{{ Lang::get('general.pp_menu_7') }}</h3>
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
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="access-to-and-accuracy">{{ Lang::get('general.pp_menu_8') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_25') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="security">{{ Lang::get('general.pp_menu_9') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_26') }}
                    </p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="opting-out">{{ Lang::get('general.pp_menu_10') }}</h3>
                    <p>
                    {{ Lang::get('general.pp_texts_27') }}
                    </p>
                    <p>
                    {{ Lang::get('general.pp_texts_28') }} <a href="/contact">{{ Lang::get('general.contact_us') }}</a>.
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