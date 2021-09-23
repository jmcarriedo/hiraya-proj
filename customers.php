<?php
    require('session.php');
    require('server.php');

    $sort = "ASC";
    $column = "customer_id";
    if(isset($_GET['column']) && isset($_GET['sort'])) {
        $column = $_GET['column'];
        $sort = $_GET['sort'];
        // Descending order
        $sort == "ASC" ? $sort = "DESC" : $sort = "ASC";
    }
    $query = "SELECT * FROM customers ORDER BY $column $sort";
    $sqlCustomers = mysqli_query($connection, $query);


    if(isset($_POST['delete'])) {
        $user_id = $_POST['user_id'];
        $query1 = "DELETE FROM users WHERE user_id='$user_id'";
        $sql = mysqli_query($connection, $query1) OR trigger_error('Query failed ' . $query);
        echo "<script> alert('Successfully deleted') </script>";
        header('location: ./customers.php');
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
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-20">All Customers</h3>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th><a class="text-dark" href="?column=firstName&sort=<?php echo $sort ?>"> first name <i class="fas fa-sort"></i></a></th>
                                            <th><a class="text-dark" href="?column=middleName&sort=<?php echo $sort ?>"> middle name <i class="fas fa-sort"></i></a></th>
                                            <th><a class="text-dark" href="?column=lastName&sort=<?php echo $sort ?>"> last name <i class="fas fa-sort"></i></a></th>
                                            <th><a class="text-dark" href="?column=mobileNum&sort=<?php echo $sort ?>"> mobile number <i class="fas fa-sort"></i></a></th>
                                            <th><a class="text-dark" href="?column=address&sort=<?php echo $sort ?>"> address <i class="fas fa-sort"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($sqlCustomers)) { ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <?php echo $row['firstName']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['middleName']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['lastName']; ?>
                                            </td>
                                            <td>
                                                <span class="block-email"> <?php echo $row['mobileNum']; ?> </span>
                                            </td>
                                            <td class=""> <?php echo $row['address']; ?> </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <form class="pe-3" action="customerUpdate.php" method="POST">
                                                        <button name="edit" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>"/>
                                                    </form>
                                                    <form class="pe-3" action="customers.php" method="POST">
                                                        <button name="delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return (confirm('Are you sure you want to delete?'));">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>"/>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr class="spacer"></tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
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