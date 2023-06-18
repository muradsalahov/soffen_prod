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
@foreach($projects_header_data as $row2)
@php
    $project_header_data = $row2->header_photo;
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
    <section class="breadcrumbs" style="background-image: url({{asset('assets_admin/projects_image/'.$project_header_data)}})!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <h1>Layihə</h1>
                            <span><a href="{{url('/')}}">Ana Səhifə</a><i class="bi bi-arrow-right"></i>Layihələr</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->

    <!-- Start project-area section -->
    <section class="project-area sec-mar" id="test">
        <div class="container">
            <div class="title-wrap">
                <div class="sec-title">
                    <h2>Layihə</h2>
                    <p>Sizə uyğun layihə haqqında məlumat ala bilərsiniz.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="isotope-menu">
                        <li class="active all" data-filter="*" >All</li>
                        @foreach($services_data as $data)
                        <li data-filter=".{{$data->id}}" class="{{$data->id}}">{{$data->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row g-4 project-items">
                @foreach($projects as $value)
                <div class="col-md-6 col-lg-4 single-item {{$value->project_service_id}}">
                    <div class="item-img">
                        <a href="{{url('/project-details?project='.$value->id)}}"><img src="{{asset('assets_admin/projects_image')}}/{{$value->photo1}}" alt=""></a>
                    </div>
                    <div class="item-inner-cnt">
                        <span>{{$value->project_title}}</span>
                        <h4>{{$value->project_name}}</h4>
                        <div class="view-btn">
                            <a href="{{url('/project-details?project='.$value->id)}}">daha ətraflı</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End project-area section -->
    <section class="subscribe-newsletter sec-mar-top mb-4">
        <div class="container">

        </div>
    </section>
</main>
<!-- End creasoft-wrap section -->

@include('front.includes.footer')

</body>

</html>
