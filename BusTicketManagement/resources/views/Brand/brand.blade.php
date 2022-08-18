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
    <script src="piblic/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="public/assets/images/favicon.ico" type="image/x-icon">
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

<body class="bg-theme bg-theme3">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">

                <h3>
                    <a style="color:#FFFAF0">
                        <i>{{Auth::user()->name}}</i>
                    </a>
                </h3>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="zamdi zamdi-format-list-bulleted"></i><span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30%" height="30%" viewBox="0 0 1950 850" preserveAspectRatio="xMinYMin meet">
                                <rect id="svgEditorBackground" x="0" y="0" width="1950" height="850" style="fill: none; stroke: none;" />
                                <defs id="svgEditorDefs">
                                    <pattern height="10" id="hatch-black-45" patternTransform="rotate(45) scale(0.4)" patternUnits="userSpaceOnUse" viewBox="0 0 10 10" width="10" x="0" y="0">
                                        <line style="stroke:black;stroke-width:1px;" x1="0" x2="10" y1="5" y2="5" />
                                    </pattern>
                                    <pattern height="28" id="cloud-p" patternContentUnits="userSpaceOnUse" patternUnits="userSpaceOnUse" preserveAspectRatio="xMinYMin meet" viewBox="0 0 56 28" width="56" x="0" y="0">
                                        <rect height="28" style="fill:#DFDBE5;stroke:none;" width="56" x="0" y="0" />
                                        <path d="M56 26c-2.813 0-5.456.726-7.752 2H56v-2zm-26 2h4.087C38.707 20.783 46.795 16 56 16v-2c-.672 0-1.339.024-1.999.07L54 14a2 2 0 0 1 2-2v-2a4 4 0 0 0-3.98 3.602 28.087 28.087 0 0 0-2.793-3.862A7.994 7.994 0 0 1 56 6V4a9.988 9.988 0 0 0-8.17 4.232 28.156 28.156 0 0 0-3.03-2.634A13.979 13.979 0 0 1 56 0h-7.752a16.078 16.078 0 0 0-5.09 4.454 27.941 27.941 0 0 0-3.536-1.936c.63-.896 1.33-1.738 2.095-2.518H39.03c-.46.557-.893 1.137-1.297 1.737A27.787 27.787 0 0 0 33.723.585c.12-.196.24-.392.364-.585H30l-.001.07A28.406 28.406 0 0 0 26 .07L26 0h-4.087c.124.193.245.389.364.585a27.787 27.787 0 0 0-4.009 1.152c-.404-.6-.837-1.18-1.297-1.737h-2.688c.764.78 1.466 1.622 2.095 2.518-1.23.562-2.41 1.21-3.536 1.936A16.078 16.078 0 0 0 7.752 0H0c4.58 0 8.645 2.199 11.2 5.598a28.156 28.156 0 0 0-3.03 2.634A9.988 9.988 0 0 0 0 4v2a7.994 7.994 0 0 1 6.773 3.74 28.087 28.087 0 0 0-2.793 3.862A4 4 0 0 0 0 10v2a2 2 0 0 1 1.999 2.07C1.339 14.024.672 14 0 14v2c9.205 0 17.292 4.783 21.913 12H26a2 2 0 1 1 4 0zM7.752 28C5.456 26.726 2.812 26 0 26v2h7.752zM56 20c-6.832 0-12.936 3.114-16.971 8h2.688A19.94 19.94 0 0 1 56 22v-2zm-39.029 8C12.936 23.114 6.831 20 0 20v2a19.94 19.94 0 0 1 14.283 6h2.688zm15.01-.398a28.087 28.087 0 0 1 2.792-3.862A7.994 7.994 0 0 0 28 20a7.994 7.994 0 0 0-6.773 3.74 28.087 28.087 0 0 1 2.793 3.862 4 4 0 0 1 7.96 0zm14.287-11.865C42.318 9.864 35.61 6 28 6c-7.61 0-14.318 3.864-18.268 9.737a27.787 27.787 0 0 0-4.009-1.152C10.275 7.043 18.548 2 28 2c9.452 0 17.725 5.043 22.277 12.585a27.787 27.787 0 0 0-4.009 1.152zm-5.426 2.717a27.941 27.941 0 0 1 3.536-1.936C40.76 11.367 34.773 8 28 8s-12.76 3.367-16.378 8.518c1.23.562 2.41 1.21 3.536 1.936C18.075 14.537 22.741 12 28 12s9.925 2.537 12.842 6.454zm-4.672 3.778a28.156 28.156 0 0 1 3.03-2.634A13.979 13.979 0 0 0 28 14c-4.58 0-8.645 2.199-11.2 5.598a28.156 28.156 0 0 1 3.03 2.634A9.988 9.988 0 0 1 28 18a9.988 9.988 0 0 1 8.17 4.232z" fill-rule="evenodd" style="fill:#9C92AC;fill-opacity:0.4;" />
                                    </pattern>
                                    <linearGradient id="lgrd3-fr-h">
                                        <stop offset="0%" stop-color="blue" />
                                        <stop offset="50%" stop-color="black" stop-opacity="0" />
                                        <stop offset="100%" stop-color="red" />
                                    </linearGradient>
                                    <linearGradient gradientUnits="objectBoundingBox" id="lgrd2-black-white" spreadMethod="pad" x1="0%" x2="100%" y1="0%" y2="100%">
                                        <stop offset="0%" stop-color="black" />
                                        <stop offset="100%" stop-color="white" />
                                    </linearGradient>
                                    <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" gradientUnits="objectBoundingBox" id="rgrd3-red-blue-red-reflect" r="5%" spreadMethod="reflect">
                                        <stop offset="0%" stop-color="red" />
                                        <stop offset="50%" stop-color="blue" />
                                        <stop offset="100%" stop-color="red" />
                                    </radialGradient>
                                    <radialGradient cy="60%" fx="45%" fy="45%" gradientUnits="objectBoundingBox" id="rgrd11-b" r="2">
                                        <stop offset="0%" stop-color="#48afc1" />
                                        <stop offset="10%" stop-color="#b4c63b" />
                                        <stop offset="20%" stop-color="#ef5b2b" />
                                        <stop offset="30%" stop-color="#503969" />
                                        <stop offset="40%" stop-color="#ab6294" />
                                        <stop offset="50%" stop-color="#1cb98f" />
                                        <stop offset="60%" stop-color="#48afc1" />
                                        <stop offset="70%" stop-color="#b4c63b" />
                                        <stop offset="80%" stop-color="#ef5b2b" />
                                        <stop offset="90%" stop-color="#503969" />
                                        <stop offset="100%" stop-color="#ab6294" />
                                    </radialGradient>
                                    <linearGradient id="lgrd3-fr-v" x1="0" x2="0" y1="0" y2="100%">
                                        <stop offset="0%" stop-color="blue" />
                                        <stop offset="50%" stop-color="black" stop-opacity="0" />
                                        <stop offset="100%" stop-color="red" />
                                    </linearGradient>
                                    <radialGradient gradientUnits="objectBoundingBox" id="rgrd-wave" r="5%" spreadMethod="reflect">
                                        <stop offset="0%" stop-color="navy" stop-opacity="1.00" />
                                        <stop offset="20%" stop-color="navy" stop-opacity="0.90" />
                                        <stop offset="40%" stop-color="navy" stop-opacity="0.65" />
                                        <stop offset="60%" stop-color="navy" stop-opacity="0.35" />
                                        <stop offset="80%" stop-color="navy" stop-opacity="0.10" />
                                        <stop offset="100%" stop-color="navy" stop-opacity="0.00" />
                                    </radialGradient>
                                    <pattern height="10" id="hatch-blue-dash-120" patternTransform="rotate(120) scale(0.4)" patternUnits="userSpaceOnUse" viewBox="0 0 24 10" width="24" x="0" y="0">
                                        <line style="stroke:blue;stroke-width:1px;stroke-dasharray:4,4;" x1="0" x2="24" y1="5" y2="5" />
                                    </pattern>
                                    <pattern height="20" id="square-p" patternContentUnits="userSpaceOnUse" patternUnits="userSpaceOnUse" preserveAspectRatio="xMinYMin meet" viewBox="0 0 20 20" width="20" x="0" y="0">
                                        <rect fill="#fff" height="20" width="20" />
                                        <rect fill="#ccc" height="10" width="10" />
                                        <rect fill="#ccc" height="10" width="10" x="10" y="10" />
                                    </pattern>
                                </defs><text style="fill:url(#cloud-p);font-family:Arial;font-size:500px;stroke:url(#square-p)" x="465.01" y="319.63" id="e1_texte" xml:space="preserve" transform="matrix(0.95614 0 0 0.95614 -423.956 306.474)">TICK-IT</text>
                            </svg></span>
                    </a>
                </li>
            </ul>
        </div>
        <!--End sidebar-wrapper-->

        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <div class="card mt-3" id=#DB>
                    <div class="card-content" id=#DB>
                        <div class="row row-group m-0">
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <h5 class="text-white mb-0">{{$numberofticket}}<span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:100%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Total Orders <span class="float-right"> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <h5 class="text-white mb-0">{{$totalrevenue}}৳<span class="float-right"><i class="fa fa-TAKA"></i></span></h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:100%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Total Revenue <span class="float-right"> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
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
                                            <th>Customer Name</th>
                                            <th>Customer ID</th>
                                            <th>Brand</th>
                                            <th>Ticket ID</th>
                                            <th>Ticket Bought</th>
                                            <th>Departure Date</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Paid
                                            <th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allticket as $item)
                                        <tr>
                                            <td>{{ $item->customer_name }}</td>
                                            <td>{{ $item->customer_id }}</td>
                                            <td>{{ $item->ticketbrand }}</td>
                                            <td>{{ $item->ticketid }}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->from }}</td>
                                            <td>{{ $item->to }}</td>
                                            <td>{{ $item->totalprice}}৳</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->
                <!--End Dashboard Content-->
                <!--show all ticket-->
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Available Tickets </h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Ticket-ID</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure</th>
                                            <th>Available Seats</th>
                                            <th>Price</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($brandSpecifiedTicket as $item)
                                        <tr>
                                            <td> {{ $item->id}} </td>
                                            <td> {{ $item->brand_ticket_from}} </td>
                                            <td> {{ $item->brand_ticket_to}} </td>
                                            <td> {{ $item->brand_ticket_date}} </td>
                                            <td> {{ $item->brand_ticket_seat}} </td>
                                            <td> {{ $item->brand_ticket_price}} </td>
                                            <td> {{ $item->created_at   }} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--show all ticket ends==-->
                <!--show all expired ticket-->
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Expired Tickets</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Ticket-ID</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Departure</th>
                                            <th>Available Seats</th>
                                            <th>Price</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($brandSpecifiedExpiredTicketDate as $item)
                                        <td> {{ $item->id}} </td>
                                        <td> {{ $item->brand_ticket_from}} </td>
                                        <td> {{ $item->brand_ticket_to}} </td>
                                        <td> {{ $item->brand_ticket_date}} </td>
                                        <td> {{ $item->brand_ticket_seat}} </td>
                                        <td> {{ $item->brand_ticket_price}} </td>
                                        <td> {{ $item->created_at   }} </td>
                                        </tr>
                                        @endforeach
                                        @foreach($brandSpecifiedExpiredTicketSeat as $item)
                                        <td> {{ $item->id}} </td>
                                        <td> {{ $item->brand_ticket_from}} </td>
                                        <td> {{ $item->brand_ticket_to}} </td>
                                        <td> {{ $item->brand_ticket_date}} </td>
                                        <td> {{ $item->brand_ticket_seat}} </td>
                                        <td> {{ $item->brand_ticket_price}} </td>
                                        <td> {{ $item->created_at   }} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--show all expired ticket ends==-->
                <!-- start ticket form--->
                <form action="BrandAddTicketSubmit" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <H4>Register New Ticket</H4>
                            </div>
                            <hr>
                            <div class="col-xxs-12 col-xs-6 mt">
                                <div class="input-field">
                                    <label for="from">
                                        <H6>From:</H6>
                                    </label>
                                    <!-- <input type="text" class="form-control" id="from-place" placeholder="Dhaka, Bangladesh"/> -->
                                    <select required class="form-control form-control-rounded" name="Start_RouteName" id="input-6" placeholder="select">>
                                        @foreach($allRoutes as $item)
                                        <option onkeyup="saveValue(this);" value="{{ $item->route_name }}"> {{ $item->route_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="col-xxs-12 col-xs-6 mt">
                                <div class="input-field">
                                    <label for="from">
                                        <H6>To:</H6>
                                    </label>
                                    <select required class="form-control form-control-rounded" name="Destination_RouteName" id="input-6" placeholder="select">>
                                        @foreach($allRoutes as $item)
                                        <option onkeyup="saveValue(this);" value="{{ $item->route_name }}"> {{ $item->route_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="col-xxs-12 col-xs-6 mt">
                                <div class="input-field">
                                    <label for="quantity">
                                        <H6>Seats:</H6>
                                    </label>
                                    <input name="No_Seats" type="number" class="form-control rounded-0" placeholder="Seats" required="" min="0" max="41" step="1" pattern="\d*">
                                </div>
                            </div>
                            <hr>
                            <div class="col-xxs-12 col-xs-6 mt">
                                <div class="input-field">
                                    <label for="quantity">
                                        <H6>Time:</H6>
                                    </label>
                                    <input class="form-control rounded-0" type="datetime-local" id="starttime" name="Start_Time" onfocus="(this.type='datetime-local')" onblur="(this.type='datetime-local')">
                                </div>
                            </div>
                            <hr>
                            <div class="col-xxs-12 col-xs-6 mt">
                                <div class="input-field">
                                    <label for="quantity">
                                        <H6>Price(BDT):</H6>
                                    </label>
                                    <input name="Ticket_Price" type="number" class="form-control rounded-0" placeholder="BDT" value="1000" required="" min="200" max="10000" step="1" pattern="\d*">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Submit-Ticket</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--delete ticket-->
                <form action="BrandDeleteTicketSubmit" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <H4>Remove Ticket</H4>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label for="input-6">Remove</label>
                                <select required class="form-control form-control-rounded" name="ticket_delete" id="input-6" placeholder="select">>
                                    @foreach($brandSpecifiedTicket as $item)
                                    <option onkeyup="saveValue(this);" value="{{ $item->id }}"> {{ $item->id}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Remove</button>
                            </div>

                        </div>
                    </div>
                </form>
                <!--end ticket form -->
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
    <!-- <footer class="footer">
        <div class="container">
        </div>
    </footer> -->
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