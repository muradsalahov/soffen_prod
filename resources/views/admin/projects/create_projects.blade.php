@include('admin.admin_includes.header')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-1 grid-margin">
                <a class="nav-link" href="{{ url('/projects_index') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Geriyə qayıt</button></a>
            </div>
            <form class="forms-sample" action="{{url('/projects_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Layihə Adı</label>
                    <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Layihə adı" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Layihə başlığı</label>
                    <input type="text" class="form-control" name="project_title" id="project_title" placeholder="Layihə başlığı">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Servis seçin</label>
                    <select class="form-control" name="project_service_id" id="project_service_id" required>
                        @if(isset($services[0]->id))
                            @foreach($services as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                        @else
                            <option disabled selected>İlk öncə Servis seçin</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Sifarişçi</label>
                    <input type="text" class="form-control" name="project_company" id="project_company" placeholder="Sifarişçi">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Açıqlama</label>
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>Başlıq foto (370x350)</label>
                        <input type="file" class="custom-file-input" id="photo1" name="photo1" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>Layihə detal foto (770x400)</label>
                        <input type="file" class="custom-file-input" id="photo2" name="photo2" required>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary me-2">Əlavə et</button>
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
            });
        }
    });
</script>
