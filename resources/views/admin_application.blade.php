<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eyethu - Admin Application</title>
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
                            <div class="col-md-12">
                                @if (session('message'))
                                    <div class="alert alert-success" role="alert">
                                        <strong class="text-center">{{ session('messages') }}</strong>
                                    </div>
                                @endif
                                @if (session('sorry'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong class="text-center">{{ session('sorry') }}</strong>
                                    </div>
                                @endif
                                <div class="card panel">
                                    <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion7" data-target="#accordion7-4">
                                        <header>Add Application</header>
                                        <div class="tools">
                                            <a class="btn btn-icon-toggle"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div id="accordion7-4" class="collapse">
                                        <div class="card-body">
                                            <form class="form" action="{{action('ApplicationController@addapplication')}} " method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="reward" value="175.00">
                                                <input type="hidden" name="app_id" value="{{Auth::user()->id}}">
                                                <div class="card no-margin">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    @error('name')
                                                                        <span class="alert alert-danger" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name">
                                                                    <label for="name">Name & Surname</label>				
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    @error('email')
                                                                        <span class="alert alert-danger" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required>
                                                                    <label for="email">Email Address</label>				
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    @error('work_code')
                                                                        <span class="alert alert-danger" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <input id="work_code" type="text" class="form-control @error('work_code') is-invalid @enderror" name="work_code" value="{{Auth::user()->work_code}}" required>
                                                                    <label for="work_code">Eyethu Work Code</label>				
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    @error('contact_no')
                                                                        <span class="alert alert-danger" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <select name="cover" id="cover" class="form-control" required>
                                                                        <option value="">Select Cover</option>
                                                                        <option value="Bronze">Bronze = R50 = Cover = R50.000</option>
                                                                        <option value="Silver">Silver = R100 = Cover = R100.000</option>
                                                                        <option value="Gold">Gold = R150 = Cover = R150.000</option>
                                                                        <option value="Platinum">Platinum = R200 = Cover = R200.000</option>
                                                                        <option value="Diamond">Diamond = R230 = Cover = R250.000</option> 
                                                                        <option value="Prestige">Prestige = R280 = Cover = R300.000</option>
                                                                    </select>
                                                                    <label for="contact_no">Policy Cover</label>				
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    @error('form')
                                                                        <span class="alert alert-danger" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <input name="form" id="form" type="file" class="form-control autosize">
                                                                    <label for="form"><i class="md md-attach-file"></i> Add Application Form</label>				
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end .card-body -->
                                                    <div class="card-actionbar">
                                                        <div class="card-actionbar-row">
                                                            <button type="submit" class="btn btn-flat btn-accent ink-reaction">Add Application</button>
                                                        </div><!--end .card-actionbar-row -->
                                                    </div><!--end .card-actionbar -->
                                                </div><!--end .card -->
                                            </form>
                                        </div> 
                                    </div>       
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                    @if($uploads->count()>0)
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Agent Name</th>
                                                                <th>Work Code</th>
                                                                <th>Email</th>
                                                                <th>Policy Cover</th>
                                                                <th>Reward</th>
                                                                <th>Download Form</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($uploads as $upload)
                                                                <tr>
                                                                <td>{{$upload->id}}</td>
                                                                    <td>{{$upload->name}}</td>
                                                                    <td>{{$upload->work_code}}</td>
                                                                    <td>{{$upload->email}}</td>
                                                                    <td>{{$upload->cover}}</td>
                                                                    <td>R {{$upload->reward}}</td>
                                                                    <td><a href="{{url('/storage/application-forms'.$upload->form)}}" class="btn ink-reaction btn-floating-action btn-sm btn-primary btn-loading-state" data-toggle="dropdown" data-loading-text="<i class='fa fa-spinner fa-spin'></i>" download><i class="fa fa-download"></i></a></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    @else
                                                        <div class="alert alert-warning">
                                                            <strong>There are no uploaded application forms!</strong>
                                                        </div>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div><!--end .table-responsive -->
                                    </div><!--end .card-body -->
                                </div><!--end .card -->
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
