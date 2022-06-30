<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="{{route('home')}}"><img src="{{asset('assets/dashboard/images/CLEANER_logo.svg')}}" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{asset('assets/dashboard/images/logo-mini.svg')}}" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{Auth::user()->image}}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
            <span>{{Auth::user()->role}}</span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="{{route('v_profile')}}" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Profile settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('dashboard')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Booking</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('pending')}}">Pending</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('approved')}}">Approved</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('booking_service')}}">Booking service</a></li>
        </ul>
      </div>
    </li>

@can('admin_auth')
      <li class="nav-item menu-items">
          <a class="nav-link"  href="{{route('users.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
              <span class="menu-title">User List</span>
          </a>
      </li>
    <li class="nav-item menu-items {{ (request()->is('service*')) ? 'active' : '' }}">
      <a class="nav-link" href="{{route('service.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">Service</span>
      </a>
    </li>
    <li class="nav-item menu-items {{ (request()->is('admin-cleaner*')) ? 'active' : '' }}">
      <a class="nav-link" id="cleaner" href="{{route('admin-cleaner.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">Cleaner</span>
      </a>
    </li>

          <li class="nav-item menu-items {{ (request()->is('image-head*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{route('image-head.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
                  <span class="menu-title">Home Head Image</span>
              </a>
          </li>

          <li class="nav-item menu-items {{ (request()->is('becom-cleaner*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{route('becom-cleaner.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
                  <span class="menu-title">BeCome Cleaner </span>
              </a>
          </li>



          <li class="nav-item menu-items {{ (request()->is('blog*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{route('blog.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
                  <span class="menu-title">Post Blog</span>
              </a>
          </li>

          <li class="nav-item menu-items {{ (request()->is('contact-admin*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{route('contact-admin.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
                  <span class="menu-title">User Contact</span>
              </a>
          </li>
      @endcan

{{--    <li class="nav-item menu-items">--}}
{{--      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">--}}
{{--        <span class="menu-icon">--}}
{{--          <i class="mdi mdi-security"></i>--}}
{{--        </span>--}}
{{--        <span class="menu-title">User Pages</span>--}}
{{--        <i class="menu-arrow"></i>--}}
{{--      </a>--}}
{{--      <div class="collapse" id="auth">--}}
{{--        <ul class="nav flex-column sub-menu">--}}
{{--          <li class="nav-item"> <a class="nav-link" href="blank"> Blank Page </a></li>--}}
{{--          <li class="nav-item"> <a class="nav-link" href="404"> 404 </a></li>--}}
{{--          <li class="nav-item"> <a class="nav-link" href="500"> 500 </a></li>--}}
{{--          <li class="nav-item"> <a class="nav-link" href="d-login"> Login </a></li>--}}
{{--          <li class="nav-item"> <a class="nav-link" href="d-register"> Register </a></li>--}}
{{--        </ul>--}}
{{--      </div>--}}
{{--    </li>--}}

{{--    <li class="nav-item menu-items">--}}
{{--      <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">--}}
{{--        <span class="menu-icon">--}}
{{--          <i class="mdi mdi-file-document-box"></i>--}}
{{--        </span>--}}
{{--        <span class="menu-title">Calender</span>--}}
{{--      </a>--}}
{{--    </li>--}}
  </ul>
</nav>
