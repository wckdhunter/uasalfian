<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$nama_barang = mysqli_real_escape_string($mysqli, $_POST['nama_barang']);
	$kategori = mysqli_real_escape_string($mysqli, $_POST['kategori']);	
	$processor = mysqli_real_escape_string($mysqli, $_POST['processor']);
	$internal = mysqli_real_escape_string($mysqli, $_POST['internal']);
	$ram = mysqli_real_escape_string($mysqli, $_POST['ram']);
	$warna = mysqli_real_escape_string($mysqli, $_POST['warna']);
	$camera = mysqli_real_escape_string($mysqli, $_POST['camera']);
	$display = mysqli_real_escape_string($mysqli, $_POST['display']);
	$battery = mysqli_real_escape_string($mysqli, $_POST['battery']);
	$os = mysqli_real_escape_string($mysqli, $_POST['os']);

	
	$harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
	

	$deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);
	
		
	// checking empty fields
	if(empty($nama_barang) || empty($harga) ) {
				
		if(empty($nama_barang)) {
			echo "<font color='red'>Nama Barang field is empty.</font><br/>";
		}
		
		if(empty($harga)) {
			echo "<font color='red'>Harga field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "UPDATE barang SET nama_barang='$nama_barang',kategori='$kategori',ram='$ram',processor='$processor',internal='$internal',camera='$camera',display='$display',battery='$battery',os='$os',warna='$warna',harga='$harga',deskripsi='$deskripsi' WHERE id=$id");
		
		//display success message
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='index.php'>View Result</a>";
		//header("location:daftarbarang.php");
		//echo "<meta http-equiv='Refresh' content='1; URL=localhost/adminpage/daftarbarang.php'>";
	}

}

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

	
	$nama_barang =$res['nama_barang'];
	$kategori = $res['kategori'];	
	$processor = $res['processor'];
	$internal = $res['internal'];
	$ram = $res['ram'];
	$warna =$res['warna'];
	$camera = $res['camera'];
	$display = $res['display'];
	$battery = $res['battery'];
	$os = $res['os'];

	
	$harga = $res['harga'];
	$deskripsi =$res['deskripsi'];
}
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
    <link href="adminpage/adminpage/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="adminpage/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="adminpage//perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

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
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                            <a class="js-arrow" href="admin.php">
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
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li >
                            <a class="js-arrow" href="admin.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li >
                            <a href="daftarorder.php">
                                <i class="fas fa-chart-bar"></i>Daftar Order</a>
                        </li>
                        <li>
                            <a href="daftarbarang.php">
                                <i class="fas fa-table"></i>Daftar Barang</a>
                        </li>
                        <li class="active has-sub">
                            <a href="inputbarang.html">
                                <i class="far fa-check-square"></i>Input Barang</a>
                        </li>
                       
                        
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

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
                                            <a class="js-acc-btn" href="index.php">Log Out </a>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">FORM INPUT BARANG</div>
                                    <div class="card-body">
                                        
                                        <form class="leave-comment" action="editbarang.php" method="post"  name="form1" >
                                       
                                           
                                            <h3>Identitas Produk</h3><br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Nama Barang</label>
                                                        <input id="cc-exp" name="nama_barang" type="tel" class="form-control cc-exp" value="<?php echo $nama_barang;?>" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="Nama Barang"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Kategori</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="kategori" type="tel" class="form-control cc-cvc" value="<?php echo $kategori;?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Kategori">

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <br><h3>Spesifikasi</h3><br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Processor</label>
                                                        <input id="cc-exp" name="processor" type="tel" class="form-control cc-exp" value="<?php echo $processor;?>" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="Processor"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Internal</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="internal" type="tel" class="form-control cc-cvc" value="<?php echo $internal;?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder=Internal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">RAM</label>
                                                        <input id="cc-exp" name="ram" type="tel" class="form-control cc-exp" value="<?php echo $ram;?>" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="RAM"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Warna</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="warna" type="tel" class="form-control cc-cvc" value="<?php echo $warna;?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Warna">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Camera</label>
                                                        <input id="cc-exp" name="camera" type="tel" value="<?php echo $camera;?>" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="Camera"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Display</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="display" type="tel" class="form-control cc-cvc" value="<?php echo $display;?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Display">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Battery</label>
                                                        <input id="cc-exp" name="battery" type="tel" class="form-control cc-exp" value="<?php echo $battery;?>" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="Battery"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">OS</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="os" type="tel" class="form-control cc-cvc" value="<?php echo $os;?>" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Operating System">

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Harga</label>
                                                <input id="cc-pament" value="<?php echo $harga;?>" name="harga" type="text" class="form-control" aria-required="true" aria-invalid="false"  placeholder="Harga">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        
                                                        <label for="cc-exp" class="control-label mb-1">Gambar Depan</label>
                                                        <input id="cc-exp" name="foto" type="file" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="ex: redmi.jpg"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        
                                                        <label for="cc-exp" class="control-label mb-1">Gambar Belakang</label>
                                                        <input id="cc-exp" name="fotodua" type="file" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="ex: redmi.jpg"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Deskripsi</label>
                                                <input id="cc-pament" name="deskripsi" value="<?php echo $deskripsi;?>" type="text" class="form-control" aria-required="true" aria-invalid="false"  placeholder="Deskripsi">
                                            </div>
                                            <div>
                                                
                                                <button id="payment-button" type="submit" name="update" value="update" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">INPUT</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 by Alfian Faiz.</p>
                                </div>
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
    <script src="adminpage/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="adminpage/js/main.js"></script>

</body>

</html>
<!-- end document-->
