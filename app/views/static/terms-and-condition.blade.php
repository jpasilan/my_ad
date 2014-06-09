@extends('layouts.master')

@section('content')
<div id="static-pages" class="row">
    <div class="col-sm-3">
        <div id="side-affix">
            <ul class="nav list-unstyled">
                <li><a href="#terms-and-condition">{{ Lang::get('general.terms_and_condition') }}</a></li>
                <li><a href="#permitted-and-prohibited">{{ Lang::get('general.permitted_prohibited') }}</a></li>
                <li><a href="#user-submissions">{{ Lang::get('general.user_submissions') }}</a></li>
                <li><a href="#user-discussion">{{ Lang::get('general.user_discussion') }}</a></li>
                <li><a href="#use-of-personally">{{ Lang::get('general.use_identifiable_info') }}</a></li>
                <li><a href="#indemnification">{{ Lang::get('general.idemnification') }}</a></li>
                <li><a href="#termination">{{ Lang::get('general.termination') }}</a></li>
                <li><a href="#warranty-disclaimer">{{ Lang::get('general.warranty_disclaimer') }}</a></li>
                <li><a href="#general">{{ Lang::get('general.general') }}</a></li>
                <li><a href="#links-to-other">{{ Lang::get('general.links_to_materials') }}</a></li>
                <li><a href="#notification-of-possible">{{ Lang::get('general.notification_copyright') }}</a></li>
            </ul>
         </div>
    </div>
    <div class="col-sm-9">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" id="scroll-able">
                    <h1 id="terms-and-condition">{{ Lang::get('general.terms_and_condition') }}</h1>

                    <p>{{ Lang::get('general.tc_texts_1') }}</p>

                    <p>{{ Lang::get('general.tc_texts_2') }}</p>

                    <p>{{ Lang::get('general.tc_texts_3') }} <a href="{{ URL::to('privacy-policy') }}">{{ Lang::get('general.privacy_policy') }}</a>, {{ Lang::get('general.tc_texts_4') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="permitted-and-prohibited">{{ Lang::get('general.permitted_prohibited') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_5') }}</p>

                    <p>{{ Lang::get('general.tc_texts_6') }}</p>

                    <p>{{ Lang::get('general.tc_texts_7') }}</p>

                    <p>{{ Lang::get('general.tc_texts_8') }}</p>

                    <p>{{ Lang::get('general.tc_texts_9') }}</p>

                    <p>{{ Lang::get('general.tc_texts_10') }}</p>

                    <p>{{ Lang::get('general.tc_texts_11') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="user-submissions">{{ Lang::get('general.user_submissions') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_12') }}</p>

                    <p>{{ Lang::get('general.tc_texts_13') }}</p>

                    <p>{{ Lang::get('general.tc_texts_14') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="user-discussion">{{ Lang::get('general.user_discussion') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_15') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="use-of-personally">{{ Lang::get('general.use_identifiable_info') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_16') }}</p>

                    <p>{{ Lang::get('general.tc_texts_17') }}</p>

                    <p>{{ Lang::get('general.tc_texts_18') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="indemnification">{{ Lang::get('general.idemnification') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_19') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="termination">{{ Lang::get('general.termination') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_20') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="warranty-disclaimer">{{ Lang::get('general.warranty_disclaimer') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_21') }}</p>

                    <p>{{ Lang::get('general.tc_texts_22') }}</p>

                    <p>{{ Lang::get('general.tc_texts_23') }}</p>

                    <p>{{ Lang::get('general.tc_texts_24') }}</p>

                    <p>{{ Lang::get('general.tc_texts_25') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="general">{{ Lang::get('general.general') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_26') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="links-to-other">{{ Lang::get('general.links_to_materials') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_27') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="notification-of-possible">{{ Lang::get('general.notification_copyright') }}</h3>

                    <p>{{ Lang::get('general.tc_texts_28') }} <a href="#">{{ Lang::get('general.contact_us') }}</a>.</p>
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