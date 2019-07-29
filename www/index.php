<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated



$result = mysqli_query($mysqli, "SELECT * FROM orderempat ORDER BY id_order DESC"); // using mysqli_query instead
//$jml = mysqli_fetch_array($jmlorder);

//$jml=$jmlorder;

 // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="adminpage/css/font-face.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="adminpage/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="adminpage/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="adminpage/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icons/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                           
                        </li>
                        <li>
                            <a href="daftarorder.php">
                                <i class="fas fa-chart-bar"></i>Daftar Order</a>
                        </li>
                        <li>
                            <a href="daftarbarang.php">
                                <i class="fas fa-table"></i>Daftar Barang</a>
                        </li>
                        <li>
                            <a href="inputbarang.html">
                                <i class="far fa-check-square"></i>Input Barang</a>
                        </li>
                       
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icons/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="daftarorder.php">
                                <i class="fas fa-chart-bar"></i>Daftar Order</a>
                        </li>
                        <li>
                            <a href="daftarbarang.php">
                                <i class="fas fa-table"></i>Daftar Barang</a>
                        </li>
                        <li>
                            <a href="inputbarang.html">
                                <i class="far fa-check-square"></i>Input Barang</a>
                        </li>
                       
                        
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU phpDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        
                                        <div class="mess-dropdown js-dropdown">
                                            
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        
                                        <div class="email-dropdown js-dropdown">
                                            
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        
                                        <div class="notifi-dropdown js-dropdown">
                                            
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="login.php">Log Out </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->



            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <a href="json.php"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>JSON</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">

                                                <h2>5</h2>

                                                <span>Pelanggan Order</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>Barang Dikirim</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Daftar Order</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nama Produk</th>
                                                <th>Nama Pemesan</th>
                                                <th>Alamat</th>
                                                <th>Harga</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                             <?php
                                              while($res = mysqli_fetch_array($result)) {       
                                                    echo "<tr>";
                                                    echo "<td>".$res['nama_produk']."</td>";
                                                    echo "<td>".$res['nama_pemesan']."</td>";
                                                    echo "<td>".$res['alamat']."</td>";
                                                    echo "<td>".$res['harga']."</td>";    
                                                      
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <br>
                        <br><br><br><br>
                    
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="adminpage/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="adminpage/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="adminpage/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="adminpage/vendor/slick/slick.min.js">
    </script>
    <script src="adminpage/vendor/wow/wow.min.js"></script>
    <script src="adminpage/vendor/animsition/animsition.min.js"></script>
    <script src="adminpage/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="adminpage/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="adminpage/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="adminpage/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="adminpage/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="adminpage/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="adminpage/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="adminpage/js/main.js"></script>

</body>

</html>
<!-- end document-->
