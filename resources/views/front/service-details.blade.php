@if(isset($_GET['service']))
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
@foreach($services_header_data as $row2)
@php
    $service_header_photo = $row2->header_photo;
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
    <section class="breadcrumbs" style="background-image: url({{asset('assets_admin/services_image/'.$service_header_photo)}})!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h1>Xidmət haqqında məlumat</h1>
                            @php
                                $service_details_name='';
                                $service_details_photo='';
                                $service_description_photo='';
                                $service_details_text='';
                            @endphp
                            @foreach($services_data as $row)
                                @if($row->id==$_GET['service'])
                                    @php
                                        $service_details_name=$row->name;
                                        $service_details_photo=$row->photo;
                                        $service_description_photo=$row->bg_photo;
                                        $service_details_text=$row->text;
                                    @endphp
                                    @break
                                @endif
                            @endforeach
                            @if(empty($service_details_name))
                                <script>window.location = "/error";</script>
                            @endif
                            <span><a href="{{url('/')}}">Ana Səhifə</a><i class="bi bi-arrow-right"></i>Xidmət haqqında<i class="bi bi-arrow-right"></i>{{$service_details_name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->


    <!-- Start service-details section -->
    <section class="service-details sec-mar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-content">
                        <img src="{{asset('assets_admin/services_image')}}/{{$service_description_photo}}" alt="">
                        <h3><i><img src="{{asset('assets_admin/services_image')}}/{{$service_details_photo}}" alt=""></i>{{$service_details_name}}</h3>
                        <p>{{$service_details_text}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        <h4>KATEQORİYA</h4>
                        <ul class="category">
                            @foreach($services_data as $row)
                            <li><a href="{{url('/project?category='.$row->id)}}">{{$row->name}}<i class="bi bi-arrow-right"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-banner">
                        <img src="{{asset('assets/img/widget-banner-bg.jpg')}}" alt="">
                        <div class="banner-inner">
                            <h3>İstənİlən</h3>
                            <h3>Layİhə üçün <span>zəng edİn.</span>
                                <img class="angle" src="{{asset('assets/img/arrow-angle.png')}}" alt="">
                            </h3></br>
                            <a id="tel1" href="tel:{{$phone_number1}}">{{$phone_number1}}</a>
                            <a id="tel2" href="tel:{{$phone_number2}}">{{$phone_number2}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-items sec-mar-top">
            </div>
        </div>
    </section>
    <!-- End service-details section -->

</main>
<!-- End creasoft-wrap section -->

@include('front.includes.footer')

</body>

</html>
@else
    @include('front.error')
@endif
