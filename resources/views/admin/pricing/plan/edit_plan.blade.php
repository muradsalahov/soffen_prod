@include('admin.admin_includes.header')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-1 grid-margin">
                <a class="nav-link" href="{{ url('/plan_index') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Geriyə qayıt</button></a>
            </div>
            <form class="forms-sample" action="{{url('/plan_update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Plan tərkibi Adı</label>
                    <input type="text" class="form-control" name="plan_name" id="plan_name" placeholder="Plan tərkibi adı" value="{{$data->plan_name}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Plan başlığı</label>
                    <select class="form-control" name="pricing_id" id="pricing_id" required>
                        @if(isset($pricing_data[0]->id))
                            @foreach($pricing_data as $row)
                                @if(($row->id)==($data->pricing_id))
                                    @php $selected='selected'; @endphp
                                @else
                                    @php $selected=null; @endphp
                                @endif
                                <option value="{{$row->id}}" {{$selected}}>{{$row->name}}</option>
                            @endforeach
                        @else
                            <option disabled selected>İlk öncə Plan basligi secin</option>
                        @endif
                    </select>
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
                $("#pricing_header").removeClass("active");
            });
        }
    });
</script>
