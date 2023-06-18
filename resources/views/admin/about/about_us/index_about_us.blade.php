@include('admin.admin_includes.header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        @if(isset($data[0]->id))
            @foreach($data as $as)
                <form class="forms-sample" action="{{url('/aboutus_update',$as->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label>Arxa fon şəkil (1920x482)</label>
                            <div class="col-md-2">
                                <img src="{{asset('assets_admin/about_image')}}/{{$as->photo_bg}}" height="120" width="200">
                            </div>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="photo_bg" name="photo_bg">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <label>Haqqımızda şəkil (570x400)</label>
                            <div class="col-md-2">
                                <img src="{{asset('assets_admin/about_image')}}/{{$as->photo_about}}" height="120" width="200">
                            </div>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="photo_about" name="photo_about">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleInputPassword4">P text</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Başlıq əlavə et"
                               value="{{$as->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Açıqlama</label>
                        <textarea class="form-control" name="description" id="description" rows="4">{{$as->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Dəyişikliyi təsdiq et</button>
                    <div class="mt-4"></div>
                </form>
            @endforeach
        @else
            <form class="forms-sample" action="{{url('/aboutus_create')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label>Arxa fon şəkil (1920x482)</label>
                        <input type="file" class="custom-file-input" id="photo_bg" name="photo_bg" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <label>Haqqımızda şəkil (570x400)</label>
                        <input type="file" class="custom-file-input" id="photo_about" name="photo_about" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleInputPassword4">P text</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Başlıq əlavə et"
                           value="">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Açıqlama</label>
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
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
