@include('admin.admin_includes.header')
<div class="col-lg-1 grid-margin">
    <a class="nav-link" href="{{ url('/pricing_create') }}"><button type="button" class="btn btn-success btn-rounded btn-fw">Əlavə et</button></a>
</div>
<div class="col-auto">
    <div class="table-responsive">
        <table id="pricing_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Plan Adı</th>
                <th>Qiymət</th>
                <th>Açıqlama</th>
                <th>Əmaliyyat</th>
            </tr>
            </thead>
            <tbody>
            @if($data)
                @foreach($data as $as)
                    <tr>
                        <td>{{$as->id}}</a></td>
                        <td>{{$as->name}}</td>
                        <td>{{$as->price}}</td>
                        <td>{{$as->description}}</td>
                        <td>
                            <a href="{{url('/pricing_edit', $as->id)}}" class="btn btn-primary"><i class="mdi mdi-tooltip-edit"></i> Dəyiş</a>
                            <a href="{{url('/pricing_delete', $as->id)}}" class="btn btn-danger"><i class="mdi mdi-delete"></i> Sil</a>
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
