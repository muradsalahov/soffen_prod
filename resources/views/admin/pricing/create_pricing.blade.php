@include('admin.admin_includes.header')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-1 grid-margin">
                <a class="nav-link" href="{{ url('/pricing_index') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Geriyə qayıt</button></a>
            </div>
            <form class="forms-sample" action="{{url('/pricing_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Plan Adı</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Plan adı" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Açıqlama</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="açıqlama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Qiymət</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Qiymət">
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
