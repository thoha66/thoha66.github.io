<script type="text/javascript">
    (function() {

        var laravel = {
            initialize: function() {
                this.methodLinks = $('a[data-method]');
                this.token = $('a[data-token]');
                this.registerEvents();
            },

            registerEvents: function() {
                this.methodLinks.on('click', this.handleMethod);
            },

            handleMethod: function(e) {
                var link = $(this);
                var httpMethod = link.data('method').toUpperCase();
                var form;

                // If the data-method attribute is not PUT or DELETE,
                // then we don't know what to do. Just ignore.
                if ( $.inArray(httpMethod, ['PUT', 'DELETE']) === - 1 ) {
                    return;
                }

                // Allow user to optionally provide data-confirm="Are you sure?"
                if ( link.data('confirm') ) {
                    if ( ! laravel.verifyConfirm(link) ) {
                        return false;
                    }
                }

                form = laravel.createForm(link);
                form.submit();

                e.preventDefault();
            },

            verifyConfirm: function(link) {
                return confirm(link.data('confirm'));
            },

            createForm: function(link) {
                var form =
                        $('<form>', {
                            'method': 'POST',
                            'action': link.attr('href')
                        });

                var token =
                        $('<input>', {
                            'type': 'hidden',
                            'name': '_token',
                            'value': link.data('token')
                        });

                var hiddenInput =
                        $('<input>', {
                            'name': '_method',
                            'type': 'hidden',
                            'value': link.data('method')
                        });

                return form.append(token, hiddenInput)
                        .appendTo('body');
            }
        };

        laravel.initialize();

    })();
</script>

<script src="{{ url('assets/script/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('assets/script/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ url('assets/script/jquery-ui.js') }}"></script>
<script src="{{ url('assets/script/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/script/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{ url('assets/script/html5shiv.js') }}"></script>
<script src="{{ url('assets/script/respond.min.js') }}"></script>
<script src="{{ url('assets/script/jquery.metisMenu.js') }}"></script>
<script src="{{ url('assets/script/jquery.slimscroll.js') }}"></script>
<script src="{{ url('assets/script/jquery.cookie.js') }}"></script>
<script src="{{ url('assets/script/icheck.min.js') }}"></script>
<script src="{{ url('assets/script/custom.min.js') }}"></script>
<script src="{{ url('assets/script/jquery.news-ticker.js') }}"></script>
<script src="{{ url('assets/script/jquery.menu.js') }}"></script>
<script src="{{ url('assets/script/pace.min.js') }}"></script>
<script src="{{ url('assets/script/holder.js') }}"></script>
<script src="{{ url('assets/script/responsive-tabs.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.categories.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.pie.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.tooltip.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.resize.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.stack.js') }}"></script>
<script src="{{ url('assets/script/jquery.flot.spline.js') }}"></script>
<script src="{{ url('assets/script/zabuto_calendar.min.js') }}"></script>
<script src="{{ url('assets/script/index.js') }}"></script>
<!--LOADING SCRIPTS FOR CHARTS-->
<script src="{{ url('assets/script/highcharts.js') }}"></script>
<script src="{{ url('assets/script/data.js') }}"></script>
<script src="{{ url('assets/script/drilldown.js') }}"></script>
<script src="{{ url('assets/script/exporting.js') }}"></script>
<script src="{{ url('assets/script/highcharts-more.js') }}"></script>
<script src="{{ url('assets/script/charts-highchart-pie.js') }}"></script>
<script src="{{ url('assets/script/charts-highchart-more.js') }}"></script>
<!--CORE JAVASCRIPT-->
<script src="{{ url('assets/script/main.js') }}"></script>
<script>        (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145464-12', 'auto');
    ga('send', 'pageview');
</script>
