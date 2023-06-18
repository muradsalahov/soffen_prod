@foreach($home_data as $row)
@php
    $site_logo = $row->site_logo;
    $home_text1 = $row->home_text1;
    $home_text2 = $row->home_text2;
    $description = $row->description;
    $phone_number1 = $row->phone_number1;
    $phone_number2 = $row->phone_number2;
    $email1 = $row->email1;
    $email2 = $row->email2;
    $adress_name = $row->adress_name;
    $adress_pin = $row->adress_pin;
    $facebook = $row->facebook;
    $instagram = $row->instagram;
    $linkedin = $row->linkedin;
@endphp
@endforeach
<!doctype html>
<html lang="en">

<head>
    @include('front.includes.header')
</head>

<body>
<!-- Preloader Start -->
<div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- Preloader End -->
<!-- Start header section -->
@include('front.includes.nav_menu')
<!-- End header section -->

<!-- Start creasoft-wrap section -->
<main class="creasoft-wrap">

    <!-- Start line animation section -->
    <div class="line_wrap">
        <div class="line_item"></div>
        <div class="line_item"></div>
        <div class="line_item"></div>
        <div class="line_item"></div>
        <div class="line_item"></div>
    </div>
    <!-- End line animation section -->

    <!-- Start hero-area section -->
    <section class="hero-area">

        <div class="verticale-social">
            <ul class="vertical-media">
                <li><a href="https://www.facebook.com/{{$facebook}}">Facebook</a></li>
                <li><a href="https://www.instagram.com/{{$instagram}}">Instagram</a></li>
                <li><a href="https://www.linkedin.com/{{$linkedin}}">Linkedin</a></li>
            </ul>
        </div>
        <div class="hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1>{{$home_text1}}<span>{{$home_text2}}</span></h1>
                            <p>{{$description}}</p>
                            <div class="buttons">
                                <div class="cmn-btn">
                                    <div class="line-1"></div>
                                    <div class="line-2"></div>
                                    <a href="{{ url('/about') }}">Haqqımızda</a>
                                </div>
                                <div class="cmn-btn layout-two">
                                    <div class="line-1"></div>
                                    <div class="line-2"></div>
                                    <a href="{{ url('/project') }}">Layihələr</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End hero-area section -->

    <!-- Start services-area section -->
    <section class="services-area sec-mar">
        <div class="container">
            <div class="title-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="sec-title">
                    <h2>Xidmətlər</h2>
                    <p>Burada servislərlə bagli sablon yazi ola biler.Burada servislərlə bagli sablon yazi ola biler.Burada servislərlə bagli sablon yazi ola biler.</p>
                </div>
            </div>
            <div class="swiper services-slider">
                <div class="swiper-wrapper">
                    @php $count=1; @endphp
                    @foreach($services_data as $row)
                    <div class="swiper-slide wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="single-service">
                            <span>{{$count}}</span>
                            <div class="icon">
                                <img src="{{asset('assets_admin/services_image')}}/{{$row->photo}}" alt="">
                            </div>
                            <h4>{{$row->name}}</h4>
                            <p>{{$row->description}}</p>
                            <div class="read-btn">
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                        @php $count++; @endphp
                    @endforeach
                </div>
                <div class="swiper-pagination d-md-none d-md-block"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End services-area section -->

    <!-- Start features-area section -->
    <section class="features-area">
        <div class="container">
            <div class="title-wrap  wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="sec-title white">
                    <h2>Nəaliyyətlər</h2>
                    <p>Burada nealiyyetle bagli sablon yazi ola biler.Burada nealiyyetle bagli sablon yazi ola biler.Burada nealiyyetle bagli sablon yazi ola biler.</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach($features_data as $row)
                <div class="col-md-6 col-lg-3 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-feature">
                        <div class="feature-inner">
                            <div class="icon">
                                <img src="{{asset('assets_admin/features_image')}}/{{$row->photo}}" alt="">
                            </div>
                            <span class="counter">{{$row->number}}</span><sup>+</sup>
                            <h4>{{$row->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End features-area section -->

    <!-- Start priceing-plan section -->
    <section class="priceing-plan sec-mar">
        <div class="container">
            <div class="title-wrap">
                <div class="sec-title">
                    <h2>Qiymət planı</h2>
                    <p>Burada qiymet plani ile bagli sablon yazi ola biler.Burada qiymet plani ile bagli sablon yazi ola biler.Burada qiymet plani ile bagli sablon yazi ola biler.</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach($pricings_data as $row)
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="price-box">
                        <h3>{{$row->name}}</h3>
                        <span>{{$row->description}}</span>
                        <strong>₼{{$row->price}}<sub>/Aylıq</sub></strong>
                        <ul class="item-list">
                            @foreach($plan_data as $plan)
                                @if($row->id==$plan->pricing_id)
                                    <li><i class="bi bi-check"></i>{{$plan->plan_name}}</li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="price-btn">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <a href="{{ url('/contact') }}">İndi Başla</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End priceing-plan section -->

@include('front.includes.footer')

</body>

</html>
