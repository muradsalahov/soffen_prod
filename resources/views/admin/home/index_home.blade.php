@include('admin.admin_includes.header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        @if(isset($contact_header[0]->id))
            @foreach($contact_header as $ass)
                <form class="forms-sample" action="{{url('/contact_header_update',$ass->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label>Əlaqə baslıq şəkili əlavə et (1920x482)</label>
                            <div class="col-md-2">
                                <img src="{{asset('assets_admin/contact_image')}}/{{$ass->header_photo}}" height="120" width="200">
                            </div>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="header_photo" name="header_photo">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Başlıq foto dəyişdir</button>
                    <div class="mt-4"></div>
                </form>
            @endforeach
        @else
            <form class="forms-sample" action="{{url('/contact_header_create')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label>Əlaqə baslıq şəkili əlavə et (1920x482)</label>
                        <input type="file" class="custom-file-input" id="header_photo" name="header_photo" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Başlıq foto əlavə et</button>
                <div class="mt-4"></div>
            </form>
        @endif
        <hr>
        @if(isset($data[0]->id))
            @foreach($data as $as)
                <form class="forms-sample" action="{{url('/admin_home_update',$as->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label>Logo (165x25)</label>
                            <div class="col-md-2">
                                <img src="{{asset('assets_admin/home_image')}}/{{$as->site_logo}}" height="120"
                                     width="200">
                            </div>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="site_logo" name="site_logo">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleInputPassword4">H1 text</label>
                        <input type="text" class="form-control" name="home_text1" id="home_text1"
                               placeholder="h1 elave edin" value="{{$as->home_text1}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">P text</label>
                        <input type="text" class="form-control" name="home_text2" id="home_text2"
                               placeholder="p elave edin" value="{{$as->home_text2}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Açıqlama</label>
                        <textarea class="form-control" name="description" id="description" rows="4"
                                  required>{{$as->description}}</textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Əlaqə nömrəsi 1</label>
                        <input type="text" class="form-control" name="phone_number1" id="phone_number1"
                               placeholder="Əlaqə nömrəsi 1" value="{{$as->phone_number1}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Əlaqə nömrəsi 2</label>
                        <input type="text" class="form-control" name="phone_number2" id="phone_number2"
                               placeholder="Əlaqə nömrəsi 2" value="{{$as->phone_number2}}" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">Email 1</label>
                        <input type="text" class="form-control" name="email1" id="email1" placeholder="Email adress 1"
                               value="{{$as->email1}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Email 2</label>
                        <input type="text" class="form-control" name="email2" id="email2" placeholder="Email adress 2"
                               value="{{$as->email2}}" >
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword4">Adress açıqlama adı</label>
                                <input type="text" class="form-control" name="adress_name" id="adress_name"
                                       placeholder="Adress açıqlama adı" value="{{$as->adress_name}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword4">Adress X və Y nümunə:40.409264 49.867092</label>
                                <input type="text" class="form-control" name="adress_pin" id="adress_pin"
                                       placeholder="nümunə: 40.409264 49.867092" value="{{$as->adress_pin}}" >
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Facebook</label>
                        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook"
                               value="{{$as->facebook}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Instagram</label>
                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram"
                               value="{{$as->instagram}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Linkedin</label>
                        <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin"
                               value="{{$as->linkedin}}" >
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Dəyişikliyi təsdiq et</button>
                    <div class="mt-4"></div>
                </form>
            @endforeach
        @else
            <form class="forms-sample" action="{{url('/admin_home_create')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label>Logo (165x25)</label>
                        <input type="file" class="custom-file-input" id="site_logo" name="site_logo">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleInputPassword4">H1 text</label>
                    <input type="text" class="form-control" name="home_text1" id="home_text1"
                           placeholder="h1 elave edin" value="" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">P text</label>
                    <input type="text" class="form-control" name="home_text2" id="home_text2" placeholder="p elave edin"
                           value="" required>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Açıqlama</label>
                    <textarea class="form-control" name="description" id="description" rows="4" required></textarea>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleInputPassword4">Əlaqə nömrəsi 1</label>
                    <input type="text" class="form-control" name="phone_number1" id="phone_number1"
                           placeholder="Əlaqə nömrəsi 1" value="" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Əlaqə nömrəsi 2</label>
                    <input type="text" class="form-control" name="phone_number2" id="phone_number2"
                           placeholder="Əlaqə nömrəsi 2" value="" >
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword4">Email 1</label>
                    <input type="text" class="form-control" name="email1" id="email1" placeholder="Email adress 1"
                           value="" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Email 2</label>
                    <input type="text" class="form-control" name="email2" id="email2" placeholder="Email adress 2"
                           value="" >
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword4">Adress açıqlama adı</label>
                            <input type="text" class="form-control" name="adress_name" id="adress_name"
                                   placeholder="Adress açıqlama adı" value="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword4">Adress X və Y nümunə:40.409264 49.867092</label>
                            <input type="text" class="form-control" name="adress_pin" id="adress_pin"
                                   placeholder="nümunə: 40.409264 49.867092" value="" >
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleInputPassword4">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook"
                           value="" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Instagram</label>
                    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram"
                           value="" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin"
                           value="" required>
                </div>
                <button type="submit" class="btn btn-primary me-2">Əlavə et</button>
                <div class="mt-4"></div>
            </form>
        @endif
    </div>
    <!-- content-wrapper ends -->
</div>
<!-- partial -->
@include('admin.admin_includes.footer')
<script>
    $(document).ready(function(){
        if ($("#home").hasClass("active")) {
            setTimeout(function () {
                $("#services").removeClass("active");
            });
        }
    });
</script>
