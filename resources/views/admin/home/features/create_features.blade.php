@include('admin.admin_includes.header')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-1 grid-margin">
                <a class="nav-link" href="{{ url('/features_index') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Geriyə qayıt</button></a>
            </div>
            <form class="forms-sample" action="{{url('/features_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Adı</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="adı" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Say</label>
                    <input type="number" class="form-control" name="number" id="number" placeholder="say" >
                </div>
                <div class="form-group">
                    <div class="row">
                        <label>İcon (92x85)</label>
                        <input type="file" class="custom-file-input" id="photo" name="photo" required>
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
        if ($("#services").hasClass("active")) {
            setTimeout(function () {
                $("#home").removeClass("active");
            });
        }
    });
</script>
