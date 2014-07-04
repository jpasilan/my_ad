<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ Lang::get('general.site_base_name') }}</title>
        <link rel="icon" href="" />
        {{ HTML::style('assets/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('assets/bootstrap/css/bootstrap-theme.min.css') }}
        {{ HTML::style('assets/bootstrap/combobox/css/bootstrap-combobox.css') }}
        {{ HTML::style('assets/css/custom.css') }}

        @yield('more-header-scripts')
    </head>
    <body>
        @include('layouts.navbar')

        <div id="content-{{ App::getLocale() }}" class="content container-fluid">
            @if (Session::has('message'))
            <div class="alert alert-{{ key(Session::get('message')) }} alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message')[key(Session::get('message'))] }}
            </div>
            @endif
            @yield('content')
        </div>

        @include('layouts.footer')

        {{ HTML::script('assets/bootstrap/js/jquery.min.js') }}
        {{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('assets/bootstrap/combobox/js/bootstrap-combobox.js') }}

        {{-- Delegate the date/time formatting and conversion to momentjs. --}}
        {{ HTML::script('assets/js/moment.min.js') }}
        @if ('fr' == App::getLocale())
        {{ HTML::script('assets/js/moment-fr-ca.js') }}
        @endif

        {{-- Loading the ckeditor --}}
        {{ HTML::script('assets/ckeditor/ckeditor.js') }}

        <script type="text/javascript">
            jQuery(function() {
                // Turn elements with the .combobox class to combobox.
                jQuery('.combobox').combobox();

                // Humanize elements that have the .moment-humanize class.
                jQuery('.moment-humanize').each(function(i, el) {
                    var dt = moment.utc(jQuery(el).text());
                    if (dt.isValid()) {
                        // Set the element with the humanized text.
                        jQuery(el).text(dt.fromNow());
                    }
                });
                
                // Enable Bootstrap tooltip
                jQuery("[data-toggle='tooltip']").tooltip()
            });
        </script>
        @yield('more-footer-scripts')
    </body>
</html>
