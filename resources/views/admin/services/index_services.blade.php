@include('admin.admin_includes.header')
@if(isset($data_header[0]->id))
    @foreach($data_header as $ass)
        <form class="forms-sample" action="{{url('/services_header_update',$ass->id)}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="row">
                    <label>Servis baslıq şəkili əlavə et (1920x482)</label>
                    <div class="col-md-2">
                        <img src="{{asset('assets_admin/services_image')}}/{{$ass->header_photo}}" height="120" width="200">
                    </div>
                    <div class="col-md-2">
                        <input type="file" class="custom-file-input" id="header_photo" name="header_photo">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Başlıq şəkilini dəyişdir</button>
            <div class="mt-4"></div>
        </form>
    @endforeach
@else
    <form class="forms-sample" action="{{url('/services_header_create')}}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="row">
                <label>Servis baslıq şəkili əlavə et (1920x482)</label>
                <input type="file" class="custom-file-input" id="header_photo" name="header_photo" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-2">Başlıq şəkili əlavə et</button>
        <div class="mt-4"></div>
    </form>
@endif
<hr>
<div class="col-lg-1 grid-margin">
    <a class="nav-link" href="{{ url('/services_create') }}"><button type="button" class="btn btn-success btn-rounded btn-fw">Servis Əlavə et</button></a>
</div>
<hr>
<div class="col-auto">
    <div class="table-responsive">
        <table id="services_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Adı</th>
                <th>Açıqlama</th>
                <th>Şəkil</th>
                <th>Əmaliyyat</th>
            </tr>
            </thead>
            <tbody>
            @if($data)
                @foreach($data as $as)
                    <tr>
                        <td>{{$as->id}}</a></td>
                        <td>{{$as->name}}</td>
                        <td>{{$as->description}}</td>
                        <td><img src="{{asset('assets_admin/services_image/'.$as->photo)}}" style="width: 92px;height: 85px;border-radius: 0%;"></td>
                        <td>
                            <a href="{{url('/services_edit', $as->id)}}" class="btn btn-primary"><i class="mdi mdi-tooltip-edit"></i> Dəyiş</a>
                            <a href="{{url('/services_delete', $as->id)}}" class="btn btn-danger"><i class="mdi mdi-delete"></i> Sil</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>Məlumat tapılmadı</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>
@include('admin.admin_includes.footer')
