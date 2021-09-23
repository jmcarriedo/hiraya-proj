<?php
    require('session.php');
    require('server.php');

    $sort = "ASC";
    $column = "user_id";
    if(isset($_GET['column']) && isset($_GET['sort'])) {
        $column = $_GET['column'];
        $sort = $_GET['sort'];
        // Descending order
        $sort == "ASC" ? $sort = "DESC" : $sort = "ASC";
    }
    $query = "SELECT * FROM users ORDER BY $column $sort";
    $sqlUsers = mysqli_query($connection, $query);
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
    </style>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1"></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-25"></div>

                    <!-- ALL BOOKINGS -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="title-1 m-b-25">All Users</h2>
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>booking ID</th>
                                            <th>name</th>
                                            <th>date</th>
                                            <th class="text-right">time</th>
                                            <th class="text-right">venue</th>
                                            <th class="text-right">package</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2018-09-29 05:57</td>
                                            <td>100398</td>
                                            <td>iPhone X 64Gb Grey</td>
                                            <td class="text-right">$999.00</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$999.00</td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-28 01:22</td>
                                            <td>100397</td>
                                            <td>Samsung S8 Black</td>
                                            <td class="text-right">$756.00</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$756.00</td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-27 02:12</td>
                                            <td>100396</td>
                                            <td>Game Console Controller</td>
                                            <td class="text-right">$22.00</td>
                                            <td class="text-right">2</td>
                                            <td class="text-right">$44.00</td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-26 23:06</td>
                                            <td>100395</td>
                                            <td>iPhone X 256Gb Black</td>
                                            <td class="text-right">$1199.00</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$1199.00</td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-25 19:03</td>
                                            <td>100393</td>
                                            <td>USB 3.0 Cable</td>
                                            <td class="text-right">$10.00</td>
                                            <td class="text-right">3</td>
                                            <td class="text-right">$30.00</td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-29 05:57</td>
                                            <td>100392</td>
                                            <td>Smartwatch 4.0 LTE Wifi</td>
                                            <td class="text-right">$199.00</td>
                                            <td class="text-right">6</td>
                                            <td class="text-right">$1494.00</td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-24 19:10</td>
                                            <td>100391</td>
                                            <td>Camera C430W 4k</td>
                                            <td class="text-right">$699.00</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">$699.00</td>
                                        </tr>
                                        <tr>
                                            <td>2018-09-22 00:43</td>
                                            <td>100393</td>
                                            <td>USB 3.0 Cable</td>
                                            <td class="text-right">$10.00</td>
                                            <td class="text-right">3</td>
                                            <td class="text-right">$30.00</td>
                                        </tr>
                                    </tbody>
                                </table>
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