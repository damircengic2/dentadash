@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Josh Admin Template
@parent
@stop

{{-- page level styles --}}
@section('header_styles')


<link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/only_dashboard.css') }}"/>
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/morrisjs/morris.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/dashboard2.css') }}"/>
<style>
   .list_of_items{
        overflow: auto;
        height:20px;
    }
</style>
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Welcome, <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">{{ Sentinel::getUser()->first_name }}</a>!</h1>
    <ol class="breadcrumb">
        <li class=" breadcrumb-item active">
            <a href="#">
                <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Dashboard
            </a>
        </li>
    </ol>
</section>

<!--</section>-->
<section class="content">
    <!--@if ($analytics_error != 0)
    <div class="alert alert-danger alert-dismissable margin5">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Error:</strong> You Need to add Google Analytics file for full working of the page
    </div>
    @endif-->
    <div class="row">
        
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 margin_10 animated fadeInRightBig form-group">
            <a class="weatherwidget-io" disabled href="https://forecast7.com/en/43d8618d41/sarajevo/" data-label_1="SARAJEVO" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="5" data-theme="original" >SARAJEVO WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
        </div>
        

    </div>
    <!--/row-->
    <div class="row ">
        <div class="col-md-12 col-sm-12 col-lg-8 col-12 no_padding">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12">
                    <div class="card panel-border main_chart">
                        <div class="card-heading ">
                            <h3 class="card-title">
                                <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#EF6F6C"
                                   data-hc="#EF6F6C"></i> Users Stats
                            </h3>
                        </div>
                        <div class="card-body">
                            {!! $db_chart->html() !!}

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 my-3">
                    <div class="card panel-border roles_chart">

                        <div class="card-heading">
                            <h4 class="card-title">
                                <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#F89A14"
                                   data-hc="#F89A14"></i>
                                User Roles
                            </h4>

                        </div>
                        <div class="card-body nopadmar">
                            {!! $user_roles->html() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-3 ">
                    <div class="card panel-border">
                        <div class="card-heading">
                            <h4 class="card-title">
                                <i class="livicon" data-name="barchart" data-size="16" data-loop="true" data-c="#67C5DF"
                                   data-hc="#67C5DF"></i>
                                Yearly visitors
                            </h4>

                        </div>
                        <div class="card-body nopadmar">
                            <div id="bar_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-12">
                    <div class="card panel-border map">

                        <div class="card-heading">
                            <h3 class="card-title">
                                <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763"
                                   data-hc="#515763"></i>
                                Users from countries
                            </h3>

                        </div>
                        <div class="card-body nopadmar">
                            {!! $geo->html() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 my-lg-0 my-3 my-md-3 my-sm-0">
            <div class="card panel-border">
                <div class="card-heading border-light">
                   
                <div class="card-body nopadmar users">
                    <a class="twitter-timeline" data-lang="en" data-height="550" data-theme="light" data-link-color="#19CF86" href="https://twitter.com/AmerDentalAssn?ref_src=twsrc%5Etfw">Tweets by AmerDentalAssn</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

                </div>
            </div>
            <div class="card panel-border my-3">
                <div class="card-heading">
                    <h4 class="card-title">
                        <i class="livicon" data-name="eye-open" data-size="16" data-loop="true" data-c="#EF6F6C"
                           data-hc="#EF6F6C"></i>
                        This week visitors
                    </h4>

                </div>
                <div class="card-body nopadmar">
                    <div id="visitors_chart"></div>
                </div>
            </div>
            <div class="card panel-border">
                <div class="card-heading border-light">
                    <h3 class="card-title">
                        <i class="livicon" data-name="pen" data-size="16" data-color="#00bc8c" data-hc="#00bc8c"
                           data-l="true"></i>
                        Recent Blogs
                    </h3>
                </div>
                <div class="card-body nopadmar blogs">
                    @foreach($blogs as $blog )
                    <div class="media">
                        <div>
                            @if($blog->author->pic)
                            <img src="{{  $blog->author->pic }}"
                                 class="media-object rounded-circle">
                            @else
                            <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}"
                                 class="media-object rounded-circle">
                            @endif
                        </div>

                        <div class="media-body ml-3">
                            <h5 class="media-heading">{{ $blog->title }}</h5>
                            <p>category:  {{ $blog->category->title }} <span
                                    class="user_create_date float-right">by  {{ $blog->author->full_name }} </span></p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Alert</h4>
            </div>
            <div class="modal-body">
                <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>
<!--for calendar-->
<script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
<!-- Back to Top-->
<script type="text/javascript" src="{{ asset('assets/vendors/countUp.js/js/countUp.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
<script src="{{ asset('assets/vendors/morrisjs/morris.min.js') }}"></script>

<script type=""> 
    var useOnComplete = false,
            useEasing = false,
            useGrouping = false,
            options = {
                useEasing: useEasing, // toggle easing
                useGrouping: useGrouping, // 1,000,000 vs 1000000
                separator: ',', // character to use as a separator
                decimal: '.' // character to use as a decimal
            };
    var demo = new CountUp("myTargetElement1", 12.52, {{ $pageVisits }}, 0, 6, options);
    demo.start();
    var demo = new CountUp("myTargetElement2", 1, {{ $blog_count }}, 0, 6, options);
    demo.start();
    var demo = new CountUp("myTargetElement3", 24.02, {{ $visitors }}, 0, 6, options);
    demo.start();
    var demo = new CountUp("myTargetElement4", 125, {{ $user_count }}, 0, 6, options);
    demo.start();

    $('.blogs').slimScroll({
        color: '#A9B6BC',
        height: 350 + 'px',
        size: '5px'
    });

    var week_data = {!! $month_visits !!};
    var year_data = {!! $year_visits !!};

    function lineChart() {
        Morris.Line({
            element: 'visitors_chart',
            data: week_data,
            lineColors: ['#418BCA', '#00bc8c', '#EF6F6C'],
            xkey: 'date',
            ykeys: ['pageViews', 'visitors'],
            labels: ['pageViews', 'visitors'],
            pointSize: 0,
            lineWidth: 2,
            resize: true,
            fillOpacity: 1,
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            hideHover: 'auto'

        });
    }
    function barChart() {
        Morris.Bar({
            element: 'bar_chart',
            data: year_data.length ? year_data : [{label: "No Data", value: 100}],
            barColors: ['#418BCA', '#00bc8c'],
            xkey: 'date',
            ykeys: ['pageViews', 'visitors'],
            labels: ['pageViews', 'visitors'],
            pointSize: 0,
            lineWidth: 2,
            resize: true,
            fillOpacity: 0.4,
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            hideHover: 'auto'

        });
    }
    lineChart();
    barChart();
    $(".sidebar-toggle").on("click", function () {
        setTimeout(function () {
            $('#visitors_chart').empty();
            $('#bar_chart').empty();
            lineChart();
            barChart();
        }, 10);
    });

</script>
{!! Charts::scripts() !!}
{!! $db_chart->script() !!}
{!! $geo->script() !!}
{!! $user_roles->script() !!}

@stop
