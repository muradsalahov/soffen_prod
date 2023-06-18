@include('admin.admin_includes.header')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-1 grid-margin">
                <a class="nav-link" href="{{ url('/projects_index') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Geriyə qayıt</button></a>
            </div>
            <form class="forms-sample" action="{{url('/projects_update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Layihə Adı</label>
                    <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Layihə adı" value="{{$data->project_name}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Layihə başlığı</label>
                    <input type="text" class="form-control" name="project_title" id="project_title" placeholder="Layihə başlığı" value="{{$data->project_title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Plan başlığı</label>
                    <select class="form-control" name="project_service_id" id="project_service_id" required>
                        @if(isset($services[0]->id))
                            @foreach($services as $row)
                                @if(($row->id)==($data->project_service_id))
                                    @php $selected='selected'; @endphp
                                @else
                                    @php $selected=null; @endphp
                                @endif
                                <option value="{{$row->id}}" {{$selected}}>{{$row->name}}</option>
                            @endforeach
                        @else
                            <option disabled selected>İlk öncə Servis seçin</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Sifarişçi</label>
                    <input type="text" class="form-control" name="project_company" id="project_company" placeholder="Sifarişçi" value="{{$data->project_company}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Açıqlama</label>
                    <textarea class="form-control" name="description" id="description" rows="4">{{$data->description}}</textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>Başlıq foto (370x350)</label>
                        <div class="col-md-2">
                            <img src="{{asset('assets_admin/projects_image')}}/{{$data->photo1}}" height="200" width="200">
                        </div>
                        <div class="col-md-2">
                            <input type="file" class="custom-file-input" id="photo1" name="photo1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>Layihə detal foto (770x400)</label>
                        <div class="col-md-2">
                            <img src="{{asset('assets_admin/projects_image')}}/{{$data->photo2}}" height="100" width="200">
                        </div>
                        <div class="col-md-2">
                            <input type="file" class="custom-file-input" id="photo2" name="photo2">
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
        if ($("#pricing").hasClass("active")) {
            setTimeout(function () {
                $("#features").removeClass("active");
                $("#home").removeClass("active");
                $("#services").removeClass("active");
                $("#pricing_body").removeClass("active");
                $("#pricing_header").removeClass("active");
                $("#pricing").removeClass("active");
                $("#about_us").removeClass("active");
                $("#abouttext").removeClass("active");
                $("#whychoose").removeClass("active");
            });
            $("#asd").hide();
            $("#colllapse_about").hide();
        }
    });
</script>
