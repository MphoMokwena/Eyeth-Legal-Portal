<!-- BEGIN HEADER-->
<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        <a href="{{ url('/admin') }}">
                            <img src="{{asset('admin_assets/img/logo.png')}}" class="img-responsive" alt="logo">
                            {{-- <span class="text-lg text-bold text-primary">EYETHU SALES PORTAL</span> --}}
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <ul class="header-nav header-nav-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                        <img src="{{asset('images')}}/{{Auth::user()->photo }}" alt="" />
                        {{-- @if({{Auth::user()->photo}} != ""))
                        <img src="{{asset('images')}}/{{Auth::user()->photo }}" alt="" />
                        @else
                        <img src="{{asset('admin_assets/img/avatar1.jpg?1403934956')}}" alt="" />
                        @endif --}}
                        <span class="profile-info">
                            {{ Auth::user()->name }}
                            <small>Eyethu Sales Agent</small>
                        </span>
                    </a>
                    <ul class="dropdown-menu animation-dock">
                        <li class="dropdown-header">Config</li>
                    <li><a href="{{url('./profile')}}">My Profile</a></li>
                    <li><a href="{{url('./admin_application')}}">My Applications</a></li>
                    
                        <li><a href="../../html/pages/calendar.html">My Emails</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-profile -->
            {{-- <ul class="header-nav header-nav-toggle">
                <li>
                    <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </li>
            </ul> --}}
            <!--end .header-nav-toggle -->
        </div><!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->