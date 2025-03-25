<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title">
            <a href="{{route('dashboard')}}" class="site_title">
                @if ($setting->logo)
                <img src="{{asset('storage/'.$setting->logo)}}" height="32px" width="42px">
                @else
                <img src="{{asset('dist/img/logo.jpg')}}" height="32px" width="42px" alt="">
                @endif
                <span style="font-size: 0.65rem;">{{$setting->name}}</span>
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
            <div class="menu_section ">
                {{-- <h3>General</h3> --}}
                <ul class="nav side-menu">
                    
                    <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a></li>
                    
                    <li><a href="{{route('admin.program.index')}}"><i class="fa fa-book"></i> Programs </a></li>
                    <li><a href="{{route('admin.university.index')}}"><i class="fa fa-graduation-cap"></i> Universities </a></li>
                    <li><a href="{{route('admin.country.index')}}"><i class="fa fa-globe"></i> Countries </a></li>
                    <li><a href="{{route('admin.course.index')}}"><i class="fa fa-cube"></i> Services </a></li>
                    <li><a href="{{route('admin.course.index')}}"><i class="fa fa-file-text"></i> Courses </a></li>
                    <li><a href="{{route('admin.event.index')}}"><i class="fa fa-slideshare"></i> Events </a></li>
                    <li><a href="{{route('admin.appointment.index')}}"><i class="fa fa-bell"></i> Appointments </a></li>
                    <li><a href="{{route('admin.faqs.index')}}"><i class="fa fa-slideshare"></i> FAQS </a></li>
                    <li><a href="{{route('profile.edit')}}"><i class="fa fa-user"></i> Profile </a></li>
                    <li><a><i class="fa fa-cog"></i> Settings<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.team.index')}}"> Team </a></li>
                            <li><a href="{{route('admin.about-us.show')}}"> About us </a></li>
                            <li><a href="{{route('admin.site.setting')}}">Website Setting</a></li>
                        </ul>
                    </li>
                  
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->


    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle" style="padding: 1.2rem"><i class="fa fa-bars"></i> </a>
                <div>
                    <h5> {{ $setting->name ?? 'Organization Name' }} </h5>
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right header-right" style="width:50%;">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{asset('storage/'.$setting->logo)??''}}" style="width: 40px"  alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                            <div style="display: flex;align-items: center; gap:1rem;padding:1rem;">
                                <img src="{{asset('storage/'.$setting->logo)??''}}"
                                    class="img-circle elevation-2" height="36px" width="48px">
                                    <br>
                                <strong style="font-size: 18px;">{{ Auth::user()->name }}</strong>
                            </div>
                        </li>

                        <li> <a href="{{ route('home') }}" class="dropdown-item">
                                <i class="mr-2 fa fa-home"></i>&nbsp; Homepage
                            </a>
                        </li>
                        <li> <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="mr-2 fa fa-user"></i>&nbsp; My Profile
                            </a>
                        </li>
                        <li><a id="logOutBtn"><i class="fa fa-sign-out "></i>&nbsp; Log Out</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</div>

<!-- /top navigation -->
