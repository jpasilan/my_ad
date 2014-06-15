@extends('layouts.master')

@section('content')
<div id="static-pages" class="row">
    <div class="col-sm-3">
        <div id="side-affix">
            <ul class="nav list-unstyled">
                <li><a href="#terms-and-condition">{{ Lang::get('terms-condition.terms_and_condition') }}</a></li>
                <li><a href="#permitted-and-prohibited">{{ Lang::get('terms-condition.permitted_prohibited') }}</a></li>
                <li><a href="#user-submissions">{{ Lang::get('terms-condition.user_submissions') }}</a></li>
                <li><a href="#user-discussion">{{ Lang::get('terms-condition.user_discussion') }}</a></li>
                <li><a href="#use-of-personally">{{ Lang::get('terms-condition.use_identifiable_info') }}</a></li>
                <li><a href="#indemnification">{{ Lang::get('terms-condition.idemnification') }}</a></li>
                <li><a href="#termination">{{ Lang::get('terms-condition.termination') }}</a></li>
                <li><a href="#warranty-disclaimer">{{ Lang::get('terms-condition.warranty_disclaimer') }}</a></li>
                <li><a href="#general">{{ Lang::get('terms-condition.general') }}</a></li>
                <li><a href="#links-to-other">{{ Lang::get('terms-condition.links_to_materials') }}</a></li>
                <li><a href="#notification-of-possible">{{ Lang::get('terms-condition.notification_copyright') }}</a></li>
            </ul>
         </div>
    </div>
    <div class="col-sm-9">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" id="scroll-able">
                    <h1 id="terms-and-condition">{{ Lang::get('terms-condition.terms_and_condition') }}</h1>

                    <p>{{ Lang::get('terms-condition.paragraph_1') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_2') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_3') }} <a href="{{ URL::to('privacy-policy') }}">{{ Lang::get('general.privacy_policy') }}</a>, {{ Lang::get('terms-condition.paragraph_4') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="permitted-and-prohibited">{{ Lang::get('terms-condition.permitted_prohibited') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_5') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_6') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_7') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_8') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_9') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_10') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_11') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="user-submissions">{{ Lang::get('terms-condition.user_submissions') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_12') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_13') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_14') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="user-discussion">{{ Lang::get('terms-condition.user_discussion') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_15') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="use-of-personally">{{ Lang::get('terms-condition.use_identifiable_info') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_16') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_17') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_18') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="indemnification">{{ Lang::get('terms-condition.idemnification') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_19') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="termination">{{ Lang::get('terms-condition.termination') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_20') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="warranty-disclaimer">{{ Lang::get('terms-condition.warranty_disclaimer') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_21') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_22') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_23') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_24') }}</p>

                    <p>{{ Lang::get('terms-condition.paragraph_25') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="general">{{ Lang::get('terms-condition.general') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_26') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="links-to-other">{{ Lang::get('terms-condition.links_to_materials') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_27') }}</p>
                    <p><a href="#header-logo">{{ Lang::get('general.back_to_top') }}</a></p>

                    <h3 id="notification-of-possible">{{ Lang::get('terms-condition.notification_copyright') }}</h3>

                    <p>{{ Lang::get('terms-condition.paragraph_28') }} <a href="#">{{ Lang::get('general.contact_us') }}</a>.</p>
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