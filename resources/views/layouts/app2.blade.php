<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sri Vigneshwara Auto Finance</title>
    <!-- plugins:css -->
     <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{asset('template/vendors/ti-icons/css/themify-icons.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('template/vendors/base/vendor.bundle.base.css')}}"> -->
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('sriva_theme/main.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
              
        @include('partials.ui_settings')
        @include('partials.navbar')

        <div class="app-main">
                   
            <!-- partial:partials/_sidebar.html -->
            @include('partials.sidebar')
            <!-- partial -->
            @yield('content')
            
        </div>
    </div>


<!-- <div class="container-scroller"> -->
    <!-- partial:partials/_navbar.html -->
    
    <!-- partial -->
    <!-- <div class="container-fluid page-body-wrapper"> -->
        
        <!-- main-panel ends -->
    <!-- </div> -->
    <!-- @include('partials.footer') -->
    <!-- page-body-wrapper ends -->
<!-- </div> -->
<!-- Scripts -->

<!-- plugins:js -->
<!-- <script src="{{asset('template/vendors/base/vendor.bundle.base.js')}}"></script> -->
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- <script src="{{asset('template/vendors/chart.js/Chart.min.js')}}"></script> -->
<!-- End plugin js for this page-->
<!-- inject:js -->
<!-- <script src="{{asset('template/js/off-canvas.js')}}"></script> -->
<!-- <script src="{{asset('template/js/hoverable-collapse.js')}}"></script> -->
<!-- <script src="{{asset('template/js/template.js')}}"></script> -->
<!-- <script src="{{asset('template/js/todolist.js')}}"></script> -->
<!-- endinject -->
<!-- Custom js for this page-->
<!-- <script src="{{asset('template/js/dashboard.js')}}"></script> -->
<!-- <script src="{{asset('template/js/jquery-steps.min.js')}}"></script> -->

<!-- MDBootstrap Datatables  -->
<!-- <link href="css/addons/datatables2.min.css" rel="stylesheet"> -->
<!-- MDBootstrap Datatables  -->
<!-- <script type="text/javascript" src="js/addons/datatables2.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="{{asset('sriva_theme/assets/scripts/main.js')}}"></script>

<script src="{{asset('sriva_theme/assets/scripts/custom.js')}}"></script>
<script>
    
</script>
<script>
    var APP_URL = {!! json_encode(url('/')) !!};
    console.log(APP_URL);
</script>

<script>
    $('.vehicle_type').on('change', function(e){
        console.log(e);
        var id = e.target.value;
        var append_id ="";
        var get_m = "";
        var type_id = e.target.id.split('_')[1];
        if(type_id == 'category'){
            var append_id = '#vehicle_brand';
            get_m = 'brand';
            $('#vehicle_model').empty();
        }else{
            var append_id = '#vehicle_model';
            get_m = 'model';
        }
        $.get(APP_URL+'/create/ajax-vehicle-type?type_id=' + type_id +'&id='+id, function(data) {
            console.log(data);
            console.log(get_m);
            $(append_id).empty();
            $(append_id).append('<option value="">select the option  </option>');
            $.each(data.data, function(index,subCatObj){
                console.log(subCatObj);
                console.log(subCatObj[get_m]);
                var option = "<option value =' "+ index  +"'>"+subCatObj[get_m]+"</option>";
                $(append_id).append(''+option+'');
            });
        });
    });
</script>

<!-- End custom js for this page-->
</body>
</html>
