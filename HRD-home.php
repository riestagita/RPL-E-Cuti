<?php
session_start();

if(!$_SESSION['username'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?><!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <title>HRD - home</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
    </head>
    <body>
        <div id="body_bg">

            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        
                        <div class="row">
                            <div class="hornav-block">
                                <div class="pull-LEFT">
                                    <ul class="nav navbar-nav">
                                    <p >Selamat Datang HRD, 
                                            <?php
                                                echo $_SESSION['username'];
                                            ?>
                                        </p>
                                    </ul>
                                </div>
                                <div id="hornav" class="pull-right">
                                    <ul class="nav navbar-nav">
                                       <li>
                                            <a href="Logout.php">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="hornav" class="pull-right">
                                        <a class="fa-bell" href="https://www.facebook.com/" ></a>
                                </div>
                              </div>
                                
                            <div class="clearfix"></div>
                        </div>
                        
                        </div>
                    </div>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Begin Sidebar Menu -->
                            <div class="col-md-2">
                                <ul class="list-group sidebar-nav" id="sidebar-nav">
                                    
                                     <li class="list-group-item">
                                        <a href="HRD-home.php">Home</a>
                                    </li>
                                    <li class="list-group-item list-toggle">
                                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">Cuti</a>
                                        <ul id="collapse-typography" class="collapse">
                                            <li>
                                                <a href="features-typo-basic.html">
                                                    <i class="fa fa-sort-alpha-asc"></i>Cuti Tahunan</a>
                                            </li>
                                            <li>
                                                <a href="features-typo-blockquotes.html">
                                                    <i class="fa fa-magic"></i>Cuti Lainnya</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="HRD-home.php">History</a>
                                    </li>
                                   
                                </ul>
                            </div>
                            
                            <!-- End Sidebar Menu -->
                            <div class="col-md-9">
                                <!-- Button Size -->
                                  <div class="container">
                        <div class="row">
                            <!-- Main Article -->
                            <div class="col-md-12 margin-top-30">
                                <h2 class="item-title">
                                  Profil
                                </h2>
                                <p>
                                    <img class="animate fadeInRight" style="float: left;" src="assets/img/frontpage//responsive_screens.png" alt="responsive screens">
                                    <h3>
                                    <table>
                                        <tr>
                                            <td>NIP</td>
                                            <td>:</td>
                                            <td>diambil dari database</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>  :</td>
                                            <td>diambil dari database</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>  :</td>
                                            <td>diambil dari database</td>
                                        </tr>
                                        <tr>
                                            <td>Divisi</td>
                                            <td>  :</td>
                                            <td>diambil dari database</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>  :</td>
                                            <td>diambil dari database</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Masuk</td>
                                            <td>  :</td>
                                            <td>diambil dari database</td>
                                        </tr>
                                    </table>
                                    </h3>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <!-- End Main Article -->
                        </div>
                    </div>
                
            </div>
        </div>
        </div>
        </div>
         

        <div class="container padding-vert-30">
            <div class="row">
                <div id="copyright">
                    <p>(c) 2017 Your Copyright Info</p>
                </div>
            </div>
        </div>          
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->