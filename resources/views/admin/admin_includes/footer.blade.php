
<!-- container-scroller -->
<!-- plugins:js -->
<script>
    $(document).ready(function(){
        var id = '@php echo $pgname @endphp';
        $('#'+id+'_table').DataTable({
            bLengthChange: true,
            "lengthMenu": [ [5, 10, 15, 25, 50, -1], [5, 10, 15, 25, 50, "All"] ],
            "iDisplayLength": 5,
            bInfo: false,
            responsive: true,
            /*"bAutoWidth": false0*/
        });
    });
    $(document).ready(function(){
        $("#pricing_plan").click(function(){
            $("#asd").toggle(300);
        });
    });
    $(document).ready(function(){
        $("#about_us_collapse").click(function(){
            $("#colllapse_about").toggle(300);
        });
    });
    $(document).mouseup(function(e)
    {
        $("#asd").hide(300);
        $("#colllapse_about").hide(300);
    });
</script>

<script src="{{asset('js/admin.js')}}"></script>
<!-- Datatables -->

</body>
</html>
