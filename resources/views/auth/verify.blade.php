<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eyethu - Verify Your Email Address</title>
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

        <!-- BEGIN LOGIN SECTION -->
        <section class="section-account">
            <div class="img-backdrop" style="background-image: url('/admin_assets/img/slider-img.jpg')"></div>
            <div class="spacer"></div>
            <div class="card contain-sm style-transparent">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <br>
                            <p class="text-center">
                                <img src="{{asset('admin_assets/img/logo.png')}}" class="img-responsive" alt="logo">
                            </p>
                            <h3 class="text-center">Verify Your Email Address</h3>
                            <div class="form-group">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ __('A fresh verification link has been sent to your email address.') }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                                <div class="row">
                                    <div class="col-xs-12">
                                        <br>
                                        <a class="btn btn-block btn-raised btn-primary" href="{{ route('login') }}">Sign In</a>
                                    </div>
                                </div><!--end .row -->
                            </div>
                        </div><!--end .col -->
                        <div class="col-sm-3">
                        </div><!--end .col -->
                            </div><!--end .row -->
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </section>
                <!-- END LOGIN SECTION -->

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
