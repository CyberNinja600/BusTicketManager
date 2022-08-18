@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <!-- <script src="assets/js/pace.min.js"></script> -->

  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />
</head>

<body class="bg-theme bg-theme2">


<div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="col-lg-6" >
                <div class="card">
                    <div class="card-body">
                        <h3>Register as a Brand</h3>
                        <hr>
                        <div class="card-title">
                            <form action="BrandRequestSubmit" method="POST">
                                @csrf 
                                @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
                                    <label for="fname"> <big> Name of the Brand:</big></label><br>
                                    <input class="form-control form-control-rounded" name="name" type="text" placeholder="Name" id="fname" name="fname"><br>

                                    <label for="fname"> <big> Email:</big></label><br>
                                    <input type="email" required name="email"class="form-control form-control-rounded" id="email" placeholder="Enter Your Email Address"><br>

                                    <label for="lname"><big>Verification intel and queries:</label><br>
                                    <textarea name="message" class="form-control form-control-rounded" placeholder=" Message" rows="2" cols="50" type="text" name="lname"></textarea>
                                <hr>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!---------------------------------->

  <!--start overlay-->
  <div class="overlay toggle-menu"></div>
  <!--end overlay-->
  </div>
  <!-- End container-fluid-->
  </div>
  <!--End content-wrapper-->
  <!--Start Back To Top Button-->
  <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
  <!--End Back To Top Button-->

  <!--Start footer-->

  <!--End footer-->

  
  <!--end color switcher-->

  </div>
  <!--End wrapper-->

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