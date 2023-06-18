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
@foreach($contacts_header_data as $row2)
@php
    $contact_header_data = $row2->header_photo;
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
    <section class="breadcrumbs" style="background-image: url({{asset('assets_admin/contact_image/'.$contact_header_data)}})!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h1>Əlaqə</h1>
                            <span><a href="{{url('/')}}">Ana Səhifə</a><i class="bi bi-arrow-right"></i>Əlaqə</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->

    <!-- Start contact-area section -->
    <section class="contact-area sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="contact-left">
                        <div class="sec-title layout2">
                            <h2>Sualınız yaranarsa, </h2>
                            <h2>bizimlə əlaqə saxlayın.</h2>
                        </div>
                        <ul class="social-follow">
                            <li><a href="https://www.facebook.com/{{$facebook}}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/{{$instagram}}"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/{{$linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                        <div class="informations">
                            <div class="single-info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h3>Məkan</h3>
                                    <p>{{$adress_name}}</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info">
                                    <h3>Telefon</h3>
                                    <a href="tel:{{$phone_number1}}">{{$phone_number1}}</a>
                                    <a href="tel:{{$phone_number2}}">{{$phone_number2}}</a>
                                </div>
                            </div>
                            <div class="single-info">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <h3>Email</h3>
                                    <a href="mailto:{{$email1}}">{{$email1}}</a>
                                    <a href="mailto:{{$email2}}">{{$email2}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            {{--<iframe src="https://maps.google.com/maps?q=baku%20azerbaijan&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>--}}
                            <iframe src="https://maps.google.com/maps?q={{$adress_pin}}&z=13&output=embed" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-area section -->

</main>
<!-- End creasoft-wrap section -->

@include('front.includes.footer')

</body>

</html>
