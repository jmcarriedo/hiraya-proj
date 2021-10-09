<?php
require('session.php');

if ($_SESSION['accessRole'] == 'admin') {
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

    <!-- <script src="https://mydomain.com/drift-snippet.js"></script> -->

    <!-- Start of Async Drift Code -->
    <!-- <script>
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
    </script> -->
    <!-- End of Async Drift Code -->

    <script src="https://meet.jit.si/external_api.js"></script>
    <!-- <script>
        $(document).ready(function() {
            var domain = "meet.jit.si";
            var options = {
                roomName: "Hiraya Photos",
                width: 700,
                height: 700,
                parentNode: document.querySelector('#meet')
            };
            var api = new JitsiMeetExternalAPI(domain, options);
        });
    </script> -->

</head>

<body class="animsition">
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
                            <div class="col-lg-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Meeting</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" id="start" type="start">
                                        <i class="zmdi zmdi-plus"></i>Create Meeting</button>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-25"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                <section class="card">
                                    <div class="card-body text-secondary">
                                        <div class="col-lg-12" id="jitsi-container"></div>
                                        <!-- <div class="col-lg-12" id="meet"></div> -->
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Drift Chat</h2>
                                <section class="card">
                                    <div class="card-body text-secondary">
                                        <div class="col-lg-12">
                                            <iframe id="drift-embed-frame" src="https://app.drift.com/conversations" style="height:90%;width:100vh" title="Drift Chat"/>
                                        </div>
                                    </div>
                                    <div class="row m-t-25"></div>
                                </section>
                            </div>
                        </div>


                        <!-- END PAGE CONTAINER-->
                    </div>
                </div>
                <script>
                    var button = document.querySelector('#start');
                    var container = document.querySelector('#jitsi-container');
                    var api = null;
                    button.addEventListener('click', () => {
                        const domain = "meet.jit.si";
                        const options = {
                            "roomName": "Hiraya Photo Studio",
                            "parentNode": container,
                            "width": "75em",
                            "height": "30em",
                            userInfo: {
                                email: "jeffrey.galvez@pcsfi.edu.ph",
                                name: "Jeffrey Galvez"
                            }
                        };
                        api = new JitsiMeetExternalAPI(domain, options);

                    });


                    var button = document.querySelector('#end');
                    var container = document.querySelector('#jitsi-container');
                    var api = null;
                    button.addEventListener('click', () => {
                        api.dispose();
                    });
                </script>

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