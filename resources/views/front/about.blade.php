@php
    $row='';$row2='';$row3='';
@endphp
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
@foreach($aboutus_data as $row2)
@php
    $photo_bg = $row2->photo_bg;
    $photo_about = $row2->photo_about;
    $name_aboutus = $row2->name;
    $description_aboutus = $row2->description;
@endphp
@endforeach
@foreach($whychoose_data as $row3)
@php
    $photo1 = $row3->photo1;
    $photo2 = $row3->photo2;
    $photo3 = $row3->photo3;
    $years = $row3->years;
    $name_whychoose = $row3->name;
    $description_whychoose = $row3->description;
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

    <!-- Start breadcrumbs section -->
    <section class="breadcrumbs" style="background-image: url({{asset('assets_admin/about_image/'.$photo_bg)}})!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h1>Haqqımızda</h1>
                            <span><a href="{{ url('/') }}">Ana Səhifə</a><i class="bi bi-arrow-right"></i>Haqqımızda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->

    <!-- Start why-choose section -->
    <section class="why-choose sec-mar wow animate fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-left">
                        <div class="choose-banner1">
                            <img src="{{asset('assets_admin/whychoose_image')}}/{{$photo1}}" alt="">
                        </div>
                        <div class="choose-banner2">
                            <img src="{{asset('assets_admin/whychoose_image')}}/{{$photo2}}" alt="">
                            <img src="{{asset('assets_admin/whychoose_image')}}/{{$photo3}}" alt="">
                        </div>
                        <div class="years">
                            <h5>{{$years}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-right">
                        <div class="sec-title layout2">
                            <span>Niyə bizi seçməlisiniz?</span>
                            <h2>{{$name_whychoose}}</h2>
                        </div>
                        <div class="counter-boxes">
                            @php $fcount=0; @endphp
                            @foreach($features_data as $row4)
                                @if($fcount==3)
                                    @break
                                @endif
                                <div class="count-box" style="">
                                    <span class="counter">{{$row4->number}}</span><sup>+</sup>
                                    <h5>{{$row4->name}}</h5>
                                </div>
                                @php $fcount++; @endphp
                            @endforeach
                        </div>
                        <p>{{$description_whychoose}}</p>
                        <div class="buttons-group">
                            <span>24/7 Dəstək xidməti</span>
                            <span>Rahat İnterfeys</span>
                            <span>100% Yerli Məhsul</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End why-choose section -->

    <!-- Start about-area section -->
    <section class="about-area sec-mar-bottom wow animate slideInUp mt-5" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 or-2">
                    <div class="sec-title layout2">
                        <span>Bizi Tanıyın</span>
                        <h2>Haqqımızda</h2>
                    </div>
                    <div class="about-left">
                        <h3>{{$name_aboutus}}</h3>
                        <p>{{$description_aboutus}}</p>
                    </div>
                </div>
                <div class="col-lg-6 or-1">
                    <div class="about-right">
                        <div class="banner-1">
                            <img src="{{asset('assets_admin/about_image')}}/{{$photo_about}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-area section -->

    <div class="sec-mar-top"></div>
</main>
<!-- End creasoft-wrap section -->

@include('front.includes.footer')

</body>

</html>
