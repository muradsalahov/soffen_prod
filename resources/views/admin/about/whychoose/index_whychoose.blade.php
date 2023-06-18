@include('admin.admin_includes.header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        @if(isset($data[0]->id))
            @foreach($data as $as)
                <form class="forms-sample" action="{{url('/whychoose_update',$as->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label>Şəkil1 (270x476)</label>
                            <div class="col-md-2">
                                <img src="{{asset('assets_admin/whychoose_image')}}/{{$as->photo1}}" height="120" width="200">
                            </div>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="photo1" name="photo1">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <label>Şəkil2 (300x226)</label>
                            <div class="col-md-2">
                                <img src="{{asset('assets_admin/whychoose_image')}}/{{$as->photo2}}" height="120" width="200">
                            </div>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="photo2" name="photo2">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <label>Şəkil3 (300x250)</label>
                            <div class="col-md-2">
                                <img src="{{asset('assets_admin/whychoose_image')}}/{{$as->photo3}}" height="120" width="200">
                            </div>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="photo3" name="photo3">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Təcrübə müddəti</label>
                        <input type="text" class="form-control" name="years" id="name" placeholder="Təcrübə müddəti" value="{{$as->years}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Başlıq yazı</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Başlıq əlavə et" value="{{$as->name}}">
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
            <form class="forms-sample" action="{{url('/whychoose_create')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label>Şəkil1 (270x476)</label>
                        <input type="file" class="custom-file-input" id="photo1" name="photo1" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <label>Şəkil2 (300x226)</label>
                        <input type="file" class="custom-file-input" id="photo2" name="photo2" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <label>Şəkil3 (300x250)</label>
                        <input type="file" class="custom-file-input" id="photo3" name="photo3" required>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleInputPassword4">Təcrübə müddəti</label>
                    <input type="text" class="form-control" name="years" id="years" placeholder="Təcrübə müddəti" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Başlıq yazı</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Başlıq əlavə et" value="">
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
