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
                            <h1>Xidmət</h1>
                            <span><a href="{{url('/')}}">Ana Səhifə</a><i class="bi bi-arrow-right"></i>Xidmət</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->

    <!-- Start services-grid section -->
    <section class="services-grid sec-mar">
        <div class="container">
            <div class="title-wrap">
                <div class="sec-title">
                    <span>Həllərimiz</span>
                    <h2>Xidmətlər</h2>
                    <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
                </div>
            </div>
            <div class="row g-4">
                @php $count=1; @endphp
                @foreach($services_data as $row)
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <span>{{$count}}</span>
                        <div class="icon">
                            <img src="{{asset('assets_admin/services_image')}}/{{$row->photo}}" alt="">
                        </div>
                        <h4>{{$row->name}}</h4>
                        <p>{{$row->description}}</p>
                        <div class="read-btn">
                            <a href="{{url('/service-details?service='.$row->id)}}">Daha çox</a>
                        </div>
                    </div>
                </div>
                    @php $count++; @endphp
                @endforeach
            </div>
        </div>
    </section>
    <!-- End services-grid section -->

</main>
<!-- End creasoft-wrap section -->

@include('front.includes.footer')

</body>

</html>
