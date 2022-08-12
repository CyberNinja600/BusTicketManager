@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="public/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="piblic/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="public/assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="public/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="public/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="public/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="public/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
  <div id="wrapper">
  
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="#">
        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        <h5 class="logo-text">Admin</h5>
      </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="#DB">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#form">
            <i class="zmdi zmdi-account-circle"></i> <span>Creator-Studio</span>
          </a>
        </li>
        <li>
          <a href="forms.html">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Register</span>
          </a>
        </li>

      </ul>
   
  </div>
   <!--End sidebar-wrapper-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid" >

  <!--Start Dashboard Content-->

	<div class="card mt-3" id=#DB>
     <div class="card-content" id=#DB>
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
        </div>
    </div>
    </div>  

	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Recent Order Tables
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Product ID</th>
                     <th>Amount</th>
                     <th>Date</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Iphone 5</td>
                    <td>#9405822</td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td>#9405820</td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td>#9405840</td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
                   </tr>
				   
				   <tr>
                    <td>Clasic Shoes</td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
                   </tr>

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->
      <!--End Dashboard Content-->

    <!----------creator studio---------------->
    <div id="form">
        <div class="row mt-3">
            <div class="col-lg-6">

             <!-- register table--->
                <div>
                <form >
                    <div class="card">
                    <div class="card-body">
                    <div class="card-title"><H4>Register New Account</H4></div>
                    <hr>
                    <div class="form-group">
                        <label for="input-6">Name</label>
                        <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="input-7">Email</label>
                        <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
                    </div>

                    
                    <div class="form-group">
                        <label for="input-6">User-Type</label>
                            <select required  class="form-control form-control-rounded" name="roleType" id="roleTypeId" placeholder="select">
                                <option onkeyup="saveValue(this);" value="Admin">Admin</option>
                                <option onkeyup="saveValue(this);" value="Customer">Customer</option>
                                <option onkeyup="saveValue(this);" value="Brand">Brand</option>
                            </select>
                    </div>


                    <div class="form-group">
                        <label for="input-9">Password</label>
                        <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="input-10">Confirm Password</label>
                        <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password">
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
                    </div>
                
                    </div>
                </form>
                </div>
      
              <!--Register1-->
              <!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
              <!---table1-->
              <div>
              <form >
                    <div class="card">
                    <div class="card-body">
                    <div class="card-title"><H4>Delete Existing Account</H4></div>
                    <hr>
                    
                    <div class="form-group">
                        <label for="input-6">User-Type</label>
                            <select required  class="form-control form-control-rounded" name="roleType" id="roleTypeId" placeholder="select">
                                <option onkeyup="saveValue(this);" value="Admin">Name</option>
                            </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add</button>
                    </div>
                
                    </div>
                </form>
                </div>
              <!---table1-->
              <!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
              
              <!---table2-->
              <div>
              <form action="AdminRouteAddSubmit" method="POST">
                    @csrf
                    <div class="card">
                    <div class="card-body">
                    <div class="card-title"><H4>Add a Route</H4></div>
                    <hr>
                    <div class="form-group">
                        <label for="input-6">Name</label>
                        <input type="text" class="form-control form-control-rounded" name="RouteName" id="input-6" placeholder="Enter Your Name">
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"> Add</button>
                    </div>
                
                    </div>
                </form>
                </div>
              <!---table2-->
              <!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
              <!---table3-->
              <div>
              <form >
                    <div class="card">
                    <div class="card-body">
                    <div class="card-title"><H4>Delete a Route</H4></div>
                    <hr>

                    <div class="form-group">
                        <label for="input-6">User-Type</label>
                            <select required  class="form-control form-control-rounded" name="roleType" id="roleTypeId" placeholder="select">
                                @foreach($allRoutes as $item)
                                <option onkeyup="saveValue(this);" value="Admin">  {{ $item->route_name }}  </option>
                                @endforeach
                            </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add</button>
                    </div>
                
                    </div>
                </form>
                </div>
              <!---table3-->

            </div>
        </div>
    </div>
    <!---------------------------------->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
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
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>

@endsection