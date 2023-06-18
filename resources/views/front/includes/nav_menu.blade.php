<header class="header-area position_top">
    <div class="site-logo">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{asset('assets_admin/home_image')}}/{{$site_logo}}" alt="image"></a>
        </div>
    </div>
    <div class="main-menu">
        <nav class="main-nav">
            <div class="mobile-menu-logo">
                {{--<a href="{{ url('/') }}"><img src="{{asset('assets_admin/home_image')}}/{{$site_logo}}" alt=""></a>--}}
                <div class="remove">
                    <i class="bi bi-plus-lg"></i>
                </div>
            </div>
            <ul>
                <li class="has-child active">
                    <a href="{{ url('/') }}">Ana səhifə</a>
                </li>
                <li><a href="{{ url('/about') }}">Haqqımızda</a></li>
                <li>
                    <a href="{{ url('/service') }}" id="service_header_class">Xidmətlər</a>
                </li>
                <li>
                    <a href="{{ url('/project') }}" id="project_header_class">Layihələr</a>
                </li>
                <li><a href="{{ url('/contact') }}">Əlaqə</a></li>
            </ul>
            <div class="get-qoute d-flex justify-content-center d-lg-none d-block pt-50">
                <div class="cmn-btn">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <a href="{{ url('/contact') }}">Bizimlə əlaqə saxlıyın</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="nav-right">
        <div class="get-qoute">
            <div class="cmn-btn">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <a href="{{ url('/contact') }}">Bizimlə əlaqə saxlıyın</a>
            </div>
        </div>
        <div class="mobile-menu">
            <a href="javascript:void(0)" class="cross-btn">
                <span class="cross-top"></span>
                <span class="cross-middle"></span>
                <span class="cross-bottom"></span>
            </a>
        </div>
    </div>
</header>
