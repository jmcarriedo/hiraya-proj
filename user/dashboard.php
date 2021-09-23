<?php 
    require('session.php');

    if($_SESSION['accessRole'] == 'admin') {
        $welcome = "Welcome " . $_SESSION['accessRole'] . " " . $_SESSION['email'];
        $isAdmin = true;
    } else {
        $welcome = "Welcome " . $_SESSION['accessRole'];
        $isAdmin = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <!-- <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template"> -->

    <!-- Title Page-->
    <title>Admin Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="dashboardassets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="dashboardassets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="dashboardassets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="dashboardassets/css/theme.css" rel="stylesheet" media="all">

    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        ! function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                        t[e] = t.factory(e);
                    }), t.load = function(t) {
                        var e = 3e5,
                            n = Math.ceil(new Date() / e) * e,
                            o = document.createElement("script");
                        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                        var i = document.getElementsByTagName("script")[0];
                        i.parentNode.insertBefore(o, i);
                    };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('mf8ww89upe9t');
    </script>
    <!-- End of Async Drift Code -->

    <script src="https://meet.jit.si/external_api.js"></script>
    
</head>

<body>
<div class="page-wrapper">

    <!-- HEADER MOBILE-->
    <?php include '_headerMobile.php'; ?>
    <!-- END HEADER MOBILE-->
    <!-- MENU SIDEBAR-->
    <?php include '_sidebar.php'; ?>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
    <!-- HEADER DESKTOP-->
    <?php include '_headerDesktop.php'; ?>
    <!-- HEADER DESKTOP-->

    <!-- MAIN CONTENT-->
   
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h2 class="title-1 m-b-25"><?php echo $welcome; ?></h2>

                        <div class="card">
                            <div class="card-header">
                                <strong>In order to book, please complete your profile first. </strong>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="./profile.php" role="button">Complete My Profile</a>
                            </div>
                        </div>
                   
                        <!-- ALL BOOKINGS -->
                       

                        <div class="row text-small">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <div class="m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>My Bookings</h3>
                                        <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th class="text-center">name</th>
                                                <th class="text-center">event</th>
                                                <th class="text-center">date</th>
                                                <th class="text-center">time</th>
                                                <th class="text-center">venue</th>
                                                <th class="text-center">package</th>
                                                <th class="text-center">package price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John Doe</td>
                                                <td>Birthday</td>
                                                <td>Jan 1, 2022</td>
                                                <td>Morning</td>
                                                <td class="text-center">Venue</td>
                                                <td class="text-center">Wedding B</td>
                                                <td class="text-center">1000</td>
                                            </tr>
                                            <tr>
                                                <td>John Doe Doe</td>
                                                <td>Birthday</td>
                                                <td>Feb 1, 2022</td>
                                                <td>Afternoon</td>
                                                <td class="text-center">Venue</td>
                                                <td class="text-center">Wedding A</td>
                                                <td class="text-center">1000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>   
                            </div>
                                <!-- END USER DATA-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>
</div>

    <!-- Jquery JS-->
    <script src="dashboardassets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="dashboardassets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="dashboardassets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="dashboardassets/vendor/slick/slick.min.js">
    </script>
    <script src="dashboardassets/vendor/wow/wow.min.js"></script>
    <script src="dashboardassets/vendor/animsition/animsition.min.js"></script>
    <script src="dashboardassets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="dashboardassets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="dashboardassets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="dashboardassets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="dashboardassets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dashboardassets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="dashboardassets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="dashboardassets/js/main.js"></script>
   
</body>
</html>