@include('admin.admin_includes.header')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-1 grid-margin">
                <a class="nav-link" href="{{ url('/services_index') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Geriyə qayıt</button></a>
            </div>
            <form class="forms-sample" action="{{url('/services_update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Adı</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="servis adı" value="{{$data->name}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Açıqlama</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="açıqlama" value="{{$data->description}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Servis haqqında yazı</label>
                    <textarea class="form-control" name="text" id="text" rows="4">{{$data->text}}</textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>İcon (92x85)</label>
                        <div class="col-md-2">
                            <img src="{{asset('assets_admin/services_image')}}/{{$data->photo}}" height="92" width="85">
                        </div>
                        <div class="col-md-2">
                            <input type="file" class="custom-file-input" id="photo" name="photo">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>Servis Haqqında başlıq foto (770x350)</label>
                        <div class="col-md-2">
                            <img src="{{asset('assets_admin/services_image')}}/{{$data->bg_photo}}" height="100" width="200">
                        </div>
                        <div class="col-md-2">
                            <input type="file" class="custom-file-input" id="bg_photo" name="bg_photo">
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary me-2">Dəyişikliyi təsdiq et</button>
            </form>
        </div>
    </div>
</div>
@include('admin.admin_includes.footer')
<script>
    $(document).ready(function(){
        if ($("#services").hasClass("active")) {
            setTimeout(function () {
                $("#features").removeClass("active");
                $("#home").removeClass("active");
                $("#pricing").removeClass("active");
                $("#pricing_header").removeClass("active");
                $("#pricing_body").removeClass("active");
                $("#about_us").removeClass("active");
                $("#abouttext").removeClass("active");
                $("#whychoose").removeClass("active");
                $("#projects").removeClass("active");
            });
            $("#asd").hide();
            $("#colllapse_about").hide();
        }
    });
</script>
