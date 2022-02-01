@include('master.head')

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   @include('master.sidebar')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
@include('master.topnav')
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
   <div class="container-fluid">
   	
   </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Rocker Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
 @include('master.footer')