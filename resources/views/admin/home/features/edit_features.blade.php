@include('admin.admin_includes.header')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-1 grid-margin">
                <a class="nav-link" href="{{ url('/features_index') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Geriyə qayıt</button></a>
            </div>
            <form class="forms-sample" action="{{url('/features_update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Adı</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="servis adı" value="{{$data->name}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Açıqlama</label>
                    <input type="number" class="form-control" name="number" id="number" placeholder="say" value="{{$data->number}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>Foto (92x85)</label>
                        <div class="col-md-2">
                            <img src="{{asset('assets_admin/features_image')}}/{{$data->photo}}" height="92" width="85">
                        </div>
                        <div class="col-md-2">
                            <input type="file" class="custom-file-input" id="photo" name="photo">
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
        if ($("#features").hasClass("active")) {
            setTimeout(function () {
                $("#services").removeClass("active");
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
