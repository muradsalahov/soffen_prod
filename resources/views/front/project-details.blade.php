@if(isset($_GET['project']))
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
                            <h1>Layihə Haqqında Məlumat</h1>
                            @php
                                $project_details_name='';
                                $project_details_title='';
                                $project_details_company='';
                                $project_details_description='';
                                $project_details_photo='';
                                $project_service_id='';
                                $project_service_name='';
                            @endphp
                            @foreach($projects as $row)
                                @if($row->id==$_GET['project'])
                                    @php
                                        $project_details_name=$row->project_name;
                                        $project_details_title=$row->project_title;
                                        $project_details_company=$row->project_company;
                                        $project_details_description=$row->description;
                                        $project_details_photo=$row->photo2;
                                        $project_service_id=$row->project_service_id;
                                        $project_service_name=$row->service_name;
                                    @endphp
                                    @break
                                @endif
                            @endforeach
                            @if(empty($project_details_name))
                                <script>window.location = "/error";</script>
                            @endif
                            <span><a href="{{url('/')}}">Ana Səhifə</a><i class="bi bi-arrow-right"></i>Layihə haqqında<i class="bi bi-arrow-right"></i>{{$project_details_name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumbs section -->

    <!-- Start project-details section -->
    <section class="project-details sec-mar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-details-content">
                        <div class="project-thumb">
                            <img src="{{asset('assets_admin/projects_image')}}/{{$project_details_photo}}" alt="">
                            <div class="tag">
                                <a>{{$project_details_title}}</a>
                            </div>
                        </div>
                        <h3>{{$project_details_name}}</h3>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam eu nibh elementum, accumsan ona neque ac, aliquet nunc. In eu ipsum fringilla, accumsan purus vel, pellentesque risus. Vivamus vehicula nl purus at eros interdum, in dignissim nulla vestibulum. Nunc sit amet finibus felis, ut egestas lacus. Sedan pellentesque quis magna eu vestibulum. Ut sed commodo neque. Morbi erat nisi, vehicula quis faucibus il ut, hendrerit vel tortor. In pharetra lectus luctus ornare sollicitudin. Pellentesque at neque nec justo sokal porttitor egestas nec eget ex.Etiam suscipit neque elit, hendrerit laoreet quam ultrices id. Proin nec tolde lacinia ligula, sed laoreet ex. Sed nisl ligula, euismod vel justo scelerisque, vestibulum ultricies tellus. volv Pellentesque vel turpis vitae urna tincidunt hendrerit at ut est. Sed eget feugiat felis. Integer sed ornare sem, eget porttitor nisi. Nunc erat sapien, porta laoreet gravida ac, dictum eu tortor. Nulla faucibus leoren rhoncus, gravida ligula a, ultrices enim. Proin lacinia malesuada finibus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        <div class="client-box">
                            <span>Servis:</span>
                            <h5>{{$project_service_name}}</h5>
                        </div>
                        <div class="client-box">
                            <span>Sifarişci:</span>
                            <h5>{{$project_details_company}}</h5>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="contact-info">
                            <h3>Kömək lazımdır?</h3>
                            <p>Bizimlə əlaqə saxlayın.</p>
                            <div class="cmpy-info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="cnt">
                                    <h5>Məkan</h5>
                                    <p>{{$adress_name}}</p>
                                </div>
                            </div>
                            <div class="cmpy-info">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cnt">
                                    <h5>Telefon</h5>
                                    <a href="tel:{{$phone_number1}}">{{$phone_number1}}</a>
                                    <a href="tel:{{$phone_number2}}">{{$phone_number2}}</a>
                                </div>
                            </div>
                            <div class="cmpy-info">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="cnt">
                                    <h5>Email</h5>
                                    <a href="mailto:{{$email1}}">{{$email1}}</a>
                                    <a href="mailto:{{$email2}}">{{$email2}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($projects[0]->id))
                <div class="project-slider">
                    <h4>Əlaqəli Layihələr</h4>
                    <div class="arrow">
                        <div class="swiper-button-next-c"><i class="bi bi-arrow-right"></i></div>
                        <div class="swiper-button-prev-c"><i class="bi bi-arrow-left"></i></div>
                    </div>
                    <div class="swiper project-slide">
                        <div class="swiper-wrapper">
                            @foreach($projects as $row2)
                                @if($row2->project_service_id==$project_service_id)
                                <div class="swiper-slide">
                                    <div class="single-item">
                                        <div class="item-img">
                                            <a href="{{url('/project-details?project='.$row2->id)}}"><img src="{{asset('assets_admin/projects_image')}}/{{$row2->photo1}}" alt=""></a>
                                        </div>
                                        <div class="item-inner-cnt">
                                            <span>{{$row2->project_title}}</span>
                                            <h4>{{$row2->project_name}}</h4>
                                            <div class="view-btn">
                                                <a href="{{url('/project-details?project='.$row2->id)}}">daha ətraflı</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <div class="mb-5"></div>
                <div class="mb-5"></div>
            </div>
        </div>
    </section>
    <!-- End project-details section -->

</main>
<!-- End creasoft-wrap section -->

@include('front.includes.footer')

</body>

</html>
@else
    @include('front.error')
@endif
