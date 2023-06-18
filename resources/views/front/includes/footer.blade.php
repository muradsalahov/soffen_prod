<!-- Start footer section -->
<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}"><img src="{{asset('assets_admin/home_image')}}/{{$site_logo}}"
                                                          alt=""></a>
                        </div>
                        <ul class="social-media-icons">
                            <li><a href="https://www.facebook.com/{{$facebook}}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/{{$instagram}}"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/{{$linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <h4>Bizim servislər</h4>
                        <ul class="footer-menu">
                            @foreach($services_data as $row)
                                <li><a href="{{ url('/service-details') }}">{{$row->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <h4>Sürətli keçid</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ url('/') }}">Ana səhifə</a></li>
                            <li><a href="{{ url('/about') }}">Haqqımızda</a></li>
                            <li><a href="{{ url('/service') }}">Servislər</a></li>
                            <li><a href="{{ url('/project') }}">Layihələr</a></li>
                            <li><a href="{{ url('/blog') }}">Bloq</a></li>
                            <li><a href="{{ url('/contact') }}">Əlaqə</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="footer-widget">
                        <h4>Contacts</h4>
                        <div class="number">
                            <div class="num-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="phone">
                                <a href="tel:{{$phone_number1}}">{{$phone_number1}}</a>
                                <a href="tel:{{$phone_number2}}">{{$phone_number2}}</a>
                            </div>
                        </div>
                        <div class="office-mail">
                            <div class="mail-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="email">
                                <a href="mailto:{{$email1}}">{{$email1}}</a>
                                <a href="mailto:{{$email2}}">{{$email2}}</a>
                            </div>
                        </div>
                        <div class="address">
                            <div class="address-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p>{{$adress_name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-lg-4 col-xl-5">
                    <div class="copy-txt">
                        <span>Copyright 2022 | Design By <a href="#">Murad Salahov</a></span>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-7">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer section -->

</main>
<!-- End creasoft-wrap section -->


<!--cursor design-->
<div class="cursor"></div>
<!--cursor design-->
<!--  Main jQuery  -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Popper and Bootstrap JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Swiper slider JS -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- Waypoints JS -->
<script src="assets/js/waypoints.min.js"></script>
<!-- Counterup JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Isotope  JS -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Magnific-popup  JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>
