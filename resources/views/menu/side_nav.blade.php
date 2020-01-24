<!-- BEGIN MAIN MENU -->
<ul id="main-menu" class="gui-controls">

    <!-- BEGIN DASHBOARD -->
    <li>
    <a href="{{url('./admin')}}" >
            <div class="gui-icon"><i class="md md-home"></i></div>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{url('./admin_email')}}">
            <div class="gui-icon"><i class="md md-email"></i></div>
            <span class="title">Email</span>
        </a>
    </li>
    <li>
        <a href="{{url('./profile')}}">
            <div class="gui-icon"><i class="md md-web"></i></div>
            <span class="title">Profile</span>
        </a>
    </li>
    <li>
        <a href="{{url('./admin_application')}}" >
            <div class="gui-icon"><i class="md md-assessment"></i></div>
            <span class="title">Applications</span>
        </a>
    </li>
    {{-- <li>
        <a>
            <div class="gui-icon"><i class="fa fa-table"></i></div>
            <span class="title">Tables</span>
        </a>
    </li>
    <li>
        <a href="" >
            <div class="gui-icon"><i class="md md-assessment"></i></div>
            <span class="title">Charts</span>
        </a>
    </li> --}}
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <div class="gui-icon"><i class="md md-lock"></i></div>
            <span class="title">Logout</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </a>
    </li>
</ul>
<!--end .main-menu -->
<!-- END MAIN MENU -->