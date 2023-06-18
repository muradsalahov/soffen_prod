@include('admin.admin_includes.header')
<div class="col-lg-1 grid-margin">
    <a class="nav-link" href="{{ url('/features_create') }}"><button type="button" class="btn btn-success btn-rounded btn-fw">Əlavə et</button></a>
</div>
<div class="col-auto">
    <div class="table-responsive">
        <table id="features_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Adı</th>
                <th>Say</th>
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
                        <td>{{$as->number}}</td>
                        <td><img src="{{asset('assets_admin/features_image/'.$as->photo)}}" style="width: 92px;height: 85px;border-radius: 0%;"></td>
                        <td>
                            <a href="{{url('/features_edit', $as->id)}}" class="btn btn-primary"><i class="mdi mdi-tooltip-edit"></i> Dəyiş</a>
                            <a href="{{url('/features_delete', $as->id)}}" class="btn btn-danger"><i class="mdi mdi-delete"></i> Sil</a>
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
