<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eyethu - Dashboard</title>
        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="ELP Portal">
        <meta name="description" content="Eyethu Legal Protection Portal">
        <!-- END META -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="{{asset('admin_assets/img/favicon.png')}}">
        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="{{asset('admin_assets/css/theme-default/bootstrap.css?1422792965')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('admin_assets/css/theme-default/materialadmin.css?1425466319')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('admin_assets/css/theme-default/font-awesome.min.css?1422529194')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('admin_assets/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="{{asset('admin_assets/js/libs/utils/html5shiv.js?1403934957')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/js/libs/utils/respond.min.js?1403934956')}}"></script>
        <![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed ">
        <!-- include navigation -->
        @include('menu.main_nav')
        <!-- End navigation -->

        <!-- BEGIN BASE-->
        <div id="base">
            <!-- BEGIN OFFCANVAS LEFT -->
            <div class="offcanvas">
            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS LEFT -->

            <!-- BEGIN CONTENT-->
            <div id="content">

                <!-- BEGIN PROFILE HEADER -->
                <section class="full-bleed">
                    <div class="section-body style-default-dark force-padding text-shadow">
                        <div class="img-backdrop" style="background-image: url('./admin_assets/img/slider-img.jpg')"></div>
                        <div class="overlay overlay-shade-top stick-top-left height-3"></div>
                        <div class="row">
                            <div class="col-md-3 col-xs-5">
                                <img class="img-circle border-white border-xl img-responsive auto-width" src="{{asset('admin_assets/img/avatar1.jpg?1403934956')}}" alt="" />
                            <h3>{{Auth::user()->name}}<br/><small>Eyethu Sales Agent</small></h3>
                            <h4>{{Auth::user()->work_code}}</h4>
                            </div><!--end .col -->
                            <div class="col-md-9 col-xs-7">
                                <div class="width-3 text-center pull-right">
                                    <strong class="text-xl">
                                        @if($uploads->count()>0)
                                            @foreach ($uploads as $upload)
                                            R {{ number_format($upload->reward * $reward->count(),2) }}
                                            @endforeach
                                        @else
                                            R 0.00
                                        @endif
                                    </strong><br/>
                                    <span class="text-light opacity-75">Rewards</span>
                                </div>
                                <div class="width-3 text-center pull-right">
                                <strong class="text-xl">{{$reward->count()}}</strong><br/>
                                    <span class="text-light opacity-75">Applications</span>
                                </div>
                            </div><!--end .col -->
                        </div><!--end .row -->
                        <div class="overlay overlay-shade-bottom stick-bottom-left force-padding text-right">
                            <a href="{{url('./admin_email')}}" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Send Email"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div><!--end .section-body -->
                </section>
                <!-- END PROFILE HEADER  -->

                <section>
                    <div class="section-body no-margin">
                        <div class="row">
                            <div class="col-md-8">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <h2>Dashboard</h2>

                  

                                <!-- BEGIN ENTER MESSAGE -->

                                <!-- BEGIN MESSAGE ACTIVITY -->
                                <div class="tab-pane" id="activity">
                                    <ul class="timeline collapse-lg timeline-hairline">
                                        <li class="timeline-inverted">
                                            <div class="timeline-circ circ-xl style-primary"><i class="md md-event"></i></div>
                                            <div class="timeline-entry">
                                                <div class="card style-default-light">
                                                    <div class="card-body small-padding">
                                                        <span class="text-medium">Received a <a class="text-primary" href="../../html/mail/inbox.html">message</a> from <span class="text-primary">Ann Lauren</span></span><br/>
                                                        <span class="opacity-50">
                                                            Saturday, Oktober 18, 2014
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!--end .timeline-entry -->
                                        </li>
                                    </ul>
                                </div><!--end #activity -->
                            </div><!--end .col -->
                            <!-- END MESSAGE ACTIVITY -->

                            <!-- BEGIN PROFILE MENUBAR -->
                            <div class="col-lg-offset-1 col-lg-3 col-md-4">
                                <div class="card card-underline style-default-dark">
                                    <div class="card-head">
                                        <header class="opacity-75"><small>Friends</small></header>
                                        <div class="tools">
                                            <form class="navbar-search" role="search">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="friendSearch" placeholder="Enter your keyword">
                                                </div>
                                                <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div><!--end .tools -->
                                    </div><!--end .card-head -->
                                    <div class="card-body no-padding">
                                        <ul class="list">
                                            @if (count($users)>0)
                                                @foreach ($users as $user)
                                                <li class="tile">
                                                    <a class="tile-content ink-reaction" href="" data-toggle="offcanvas" data-backdrop="false">
                                                        <div class="tile-icon">
                                                            <img src="../../assets/img/avatar4.jpg?1404026791" alt="" />
                                                        </div>
                                                        <div class="tile-text">
                                                            {{$user->name}}
                                                            <small>{{$user->contact_no}}</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            @else
                                            <div class="alert alert-danger" role="alert">
                                                <strong>There are no users to be displayed!</strong>
                                            </div>  
                                            @endif 
                                        </ul>
                                    </div><!--end .card-body -->
                                </div><!--end .card -->
                                <div class="card card-underline style-default-dark">
                                    <div class="card-head">
                                        <header class="opacity-75"><small>Personal info</small></header>
                                        <div class="tools">
                                            <a class="btn btn-icon-toggle ink-reaction"><i class="md md-edit"></i></a>
                                        </div><!--end .tools -->
                                    </div><!--end .card-head -->
                                    <div class="card-body no-padding">
                                        <ul class="list">
                                            <li class="tile">
                                                <a class="tile-content ink-reaction">
                                                    <div class="tile-icon">
                                                        <i class="md md-location-on"></i>
                                                    </div>
                                                    <div class="tile-text">
                                                        {{ Auth::user()->address }}
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="divider-inset"></li>
                                            <li class="tile">
                                                <a class="tile-content ink-reaction">
                                                    <div class="tile-icon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <div class="tile-text">
                                                        {{ Auth::user()->contact_no }}
                                                        <small>Mobile</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!--end .card-body -->
                                </div><!--end .card -->
                            </div><!--end .col -->
                            <!-- END PROFILE MENUBAR -->

                        </div><!--end .row -->
                    </div><!--end .section-body -->
                </section>
            </div><!--end #content-->
            <!-- END CONTENT -->

            <!-- BEGIN MENUBAR-->
            <div id="menubar" class="menubar-inverse ">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="expanded">
                        <a href="{{ url('/admin') }}">
                            <img src="{{asset('admin_assets/img/logo.png')}}" class="img-responsive" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="menubar-scroll-panel">
                    <!-- include navigation -->
                    @include('menu.side_nav')
                    <!-- End navigation -->
                    <div class="menubar-foot-panel">
                        <small class="no-linebreak hidden-folded">
                            <span class="opacity-75">Copyright &copy; 2020</span> <strong>Eyethu Sales Portal</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
            <!-- END MENUBAR -->

            <!-- BEGIN OFFCANVAS RIGHT -->
            <div class="offcanvas">

                <!-- BEGIN OFFCANVAS SEARCH -->
                <div id="offcanvas-search" class="offcanvas-pane width-8">
                    <div class="offcanvas-head">
                        <header class="text-primary">Search</header>
                        <div class="offcanvas-tools">
                            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                                <i class="md md-close"></i>
                            </a>
                        </div>
                    </div>
                    <div class="offcanvas-body no-padding">
                        <ul class="list">
                            @if (count($users)>0)
                                @foreach ($users as $user)
                                <li class="tile">
                                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                                        <div class="tile-icon">
                                            <img src="../../assets/img/avatar4.jpg?1404026791" alt="" />
                                        </div>
                                        <div class="tile-text">
                                            {{$user->name}}
                                            <small>{{$user->contact_no}}</small>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            @else
                              <div class="alert alert-danger" role="alert">
                                  <strong>There are no users to be displayed!</strong>
                              </div>  
                            @endif
                        </ul>
                    </div><!--end .offcanvas-body -->
                </div><!--end .offcanvas-pane -->
                <!-- END OFFCANVAS SEARCH -->

                <!-- BEGIN OFFCANVAS CHAT -->
                <div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
                    <div class="offcanvas-head style-default-bright">
                        <header class="text-primary">Chat with Ann Laurens</header>
                        <div class="offcanvas-tools">
                            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                                <i class="md md-close"></i>
                            </a>
                            <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                                <i class="md md-arrow-back"></i>
                            </a>
                        </div>
                        <form class="form">
                            <div class="form-group floating-label">
                                <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>
                                <label for="sidebarChatMessage">Leave a message</label>
                            </div>
                        </form>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-chats">
                            <li>
                                <div class="chat">
                                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
                                    <div class="chat-body">
                                        Yes, it is indeed very beautiful.
                                        <small>10:03 pm</small>
                                    </div>
                                </div><!--end .chat -->
                            </li>
                            <li class="chat-left">
                                <div class="chat">
                                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar9.jpg?1404026744" alt="" /></div>
                                    <div class="chat-body">
                                        Did you see the changes?
                                        <small>10:02 pm</small>
                                    </div>
                                </div><!--end .chat -->
                            </li>
                            <li>
                                <div class="chat">
                                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
                                    <div class="chat-body">
                                        I just arrived at work, it was quite busy.
                                        <small>06:44pm</small>
                                    </div>
                                    <div class="chat-body">
                                        I will take look in a minute.
                                        <small>06:45pm</small>
                                    </div>
                                </div><!--end .chat -->
                            </li>
                            <li class="chat-left">
                                <div class="chat">
                                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar9.jpg?1404026744" alt="" /></div>
                                    <div class="chat-body">
                                        The colors are much better now.
                                    </div>
                                    <div class="chat-body">
                                        The colors are brighter than before.
                                        I have already sent an example.
                                        This will make it look sharper.
                                        <small>Mon</small>
                                    </div>
                                </div><!--end .chat -->
                            </li>
                            <li>
                                <div class="chat">
                                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
                                    <div class="chat-body">
                                        Are the colors of the logo already adapted?
                                        <small>Last week</small>
                                    </div>
                                </div><!--end .chat -->
                            </li>
                        </ul>
                    </div><!--end .offcanvas-body -->
                </div><!--end .offcanvas-pane -->
                <!-- END OFFCANVAS CHAT -->

            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS RIGHT -->

        </div><!--end #base-->
        <!-- END BASE -->
        <!-- BEGIN JAVASCRIPT -->
        <script src="{{asset('admin_assets/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/libs/spin.js/spin.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/libs/autosize/jquery.autosize.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/source/App.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/source/AppNavigation.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/source/AppOffcanvas.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/source/AppCard.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/source/AppForm.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/source/AppNavSearch.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/source/AppVendor.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/demo/Demo.js')}}"></script>
        <!-- END JAVASCRIPT -->

    </body>
</html>
