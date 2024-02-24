<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['level'])) {

//<!-- Presiden-->
$get1 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='BENGKONG LAUT'");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='BENGKONG INDAH'");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='SADAI'");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='TANJUNG BUNTUNG'");
$count4 = mysqli_num_rows($get4);

//<!-- DPD RI-->

$get5 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='BENGKONG LAUT'");
$count5 = mysqli_num_rows($get5);

$get6 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='BENGKONG INDAH'");
$count6 = mysqli_num_rows($get6);

$get7 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='SADAI'");
$count7 = mysqli_num_rows($get7);

$get8 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='TANJUNG BUNTUNG'");
$count8 = mysqli_num_rows($get8);

//<!-- DPR RI-->

$get9 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='BENGKONG LAUT'");
$count9 = mysqli_num_rows($get9);

$get10 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='BENGKONG INDAH'");
$count10 = mysqli_num_rows($get10);

$get11 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='SADAI'");
$count11 = mysqli_num_rows($get11);

$get12 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='TANJUNG BUNTUNG'");
$count12 = mysqli_num_rows($get12);


//<!-- DPRD Prov 1-->

$get13 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='BENGKONG LAUT'");
$count13 = mysqli_num_rows($get13);

$get14 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='BENGKONG INDAH'");
$count14 = mysqli_num_rows($get14);

$get15 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='SADAI'");
$count15 = mysqli_num_rows($get15);

$get16 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='TANJUNG BUNTUNG'");
$count16 = mysqli_num_rows($get16);


//<!-- DPRD Prov 2-->

$get17 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='BENGKONG LAUT'");
$count17 = mysqli_num_rows($get17);

$get18 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='BENGKONG INDAH'");
$count18 = mysqli_num_rows($get18);

$get19 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='SADAI'");
$count19 = mysqli_num_rows($get19);

$get20 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='TANJUNG BUNTUNG'");
$count20 = mysqli_num_rows($get20);


//<!-- DPRD Kota 1-->

$get21 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='BENGKONG LAUT'");
$count21 = mysqli_num_rows($get21);

$get22 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='BENGKONG INDAH'");
$count22 = mysqli_num_rows($get22);

$get23 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='SADAI'");
$count23 = mysqli_num_rows($get23);

$get24 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='TANJUNG BUNTUNG'");
$count24 = mysqli_num_rows($get24);


//<!-- DPRD Kota 2-->

$get25 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='BENGKONG LAUT'");
$count25 = mysqli_num_rows($get25);

$get26 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='BENGKONG INDAH'");
$count26 = mysqli_num_rows($get26);

$get27 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='SADAI'");
$count27 = mysqli_num_rows($get27);

$get28 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='TANJUNG BUNTUNG'");
$count28 = mysqli_num_rows($get28);


//<!-- Presiden Batu Ampar-->

$get29 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='TANJUNG SENGKUANG'");
$count29 = mysqli_num_rows($get29);

$get30 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='BATU MERAH'");
$count30 = mysqli_num_rows($get30);

$get31 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='SERAYA'");
$count31 = mysqli_num_rows($get31);

$get32 = mysqli_query($koneksi, "select * from tb_presiden where kelurahan='SUNGAI JODOH'");
$count32 = mysqli_num_rows($get32);


//<!-- DPD Batu Ampar-->

$get33 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='TANJUNG SENGKUANG'");
$count33 = mysqli_num_rows($get33);

$get34 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='BATU MERAH'");
$count34 = mysqli_num_rows($get34);

$get35 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='SERAYA'");
$count35 = mysqli_num_rows($get35);

$get36 = mysqli_query($koneksi, "select * from tb_dpdri where kelurahan='SUNGAI JODOH'");
$count36 = mysqli_num_rows($get36);


//<!-- DPR RI Batu Ampar-->

$get37 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='TANJUNG SENGKUANG'");
$count37 = mysqli_num_rows($get37);

$get38 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='BATU MERAH'");
$count38 = mysqli_num_rows($get38);

$get39 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='SERAYA'");
$count39 = mysqli_num_rows($get39);

$get40 = mysqli_query($koneksi, "select * from tb_dpr_ri where kelurahan='SUNGAI JODOH'");
$count40 = mysqli_num_rows($get40);



//<!-- DPRD Prov 1 Batu Ampar-->

$get41 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='TANJUNG SENGKUANG'");
$count41 = mysqli_num_rows($get41);

$get42 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='BATU MERAH'");
$count42 = mysqli_num_rows($get42);

$get43 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='SERAYA'");
$count43 = mysqli_num_rows($get43);

$get44 = mysqli_query($koneksi, "select * from tb_dprd_prov where kelurahan='SUNGAI JODOH'");
$count44 = mysqli_num_rows($get44);


//<!-- DPRD Prov 2 Batu Ampar-->

$get45 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='TANJUNG SENGKUANG'");
$count45 = mysqli_num_rows($get45);

$get46 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='BATU MERAH'");
$count46 = mysqli_num_rows($get46);

$get47 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='SERAYA'");
$count47 = mysqli_num_rows($get47);

$get48 = mysqli_query($koneksi, "select * from tb_dprd_prov1 where kelurahan='SUNGAI JODOH'");
$count48 = mysqli_num_rows($get48);


//<!-- DPRD Kota 1 Batu Ampar-->

$get49 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='TANJUNG SENGKUANG'");
$count49 = mysqli_num_rows($get49);

$get50 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='BATU MERAH'");
$count50 = mysqli_num_rows($get50);

$get51 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='SERAYA'");
$count51 = mysqli_num_rows($get51);

$get52 = mysqli_query($koneksi, "select * from tb_dprd_kota where kelurahan='SUNGAI JODOH'");
$count52 = mysqli_num_rows($get52);


//<!-- DPRD Kota 2 Batu Ampar-->

$get53 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='TANJUNG SENGKUANG'");
$count53 = mysqli_num_rows($get53);

$get54 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='BATU MERAH'");
$count54 = mysqli_num_rows($get54);

$get55 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='SERAYA'");
$count55 = mysqli_num_rows($get55);

$get56 = mysqli_query($koneksi, "select * from tb_dprd_kota1 where kelurahan='SUNGAI JODOH'");
$count56 = mysqli_num_rows($get56);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Situng Bengkong</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Situng Bengkong</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-50 me-3 me-lg-4 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                        
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Main Menu</div>
                            <a class="nav-link" href="halaman_utama.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Form Input
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="presiden.php">Presiden</a>
                                    <a class="nav-link" href="dpdri.php">DPD RI</a>
                                    <a class="nav-link" href="dprri.php">DPR RI</a>
                                    <a class="nav-link" href="dprdprov.php">DPRD Provinsi</a>
                                    <a class="nav-link" href="dprdkota.php">DPRD Kota</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Report</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Dapil 2
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="hpresiden.php">Presiden</a>
                                    <a class="nav-link" href="hdpdri.php">DPD RI</a>
                                    <a class="nav-link" href="hdprri.php">DPR RI</a>
                                    <a class="nav-link" href="hdprdprov.php">DPRD Provinsi</a>
                                    <a class="nav-link" href="hdprdkota.php">DPRD Kota</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Bengkong
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="hpresiden1.php">Presiden</a>
                                    <a class="nav-link" href="hdpdri1.php">DPD RI</a>
                                    <a class="nav-link" href="hdprri1.php">DPR RI</a>
                                    <a class="nav-link" href="hdprdprov1.php">DPRD Provinsi</a>
                                    <a class="nav-link" href="hdprdkota1.php">DPRD Kota</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Batu Ampar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="hpresiden2.php">Presiden</a>
                                    <a class="nav-link" href="hdpdri2.php">DPD RI</a>
                                    <a class="nav-link" href="hdprri2.php">DPR RI</a>
                                    <a class="nav-link" href="hdprdprov2.php">DPRD Provinsi</a>
                                    <a class="nav-link" href="hdprdkota2.php">DPRD Kota</a>
                                </nav>
                            </div>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                        if ($_SESSION['level'] == 'admin') {?>
                        Selamat Datang <?=$_SESSION['level']?>
                                
                        <?php }else {?>
                        Selamat Datang <?=$_SESSION['level']?>
                        <?php } ?>
                                
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Calon Presiden & Wakil Presiden</h4>                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count1;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Laut</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count2;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Indah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count3;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sadai</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count4;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Buntung</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count29;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Sengkuang</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count30;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Batu Merah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count31;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Seraya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><?=$count32;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sungai Jodoh</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </div>

                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Calon DPD RI</h4>                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count5;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Laut</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count6;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Indah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count7;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sadai</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count8;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Buntung</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count33;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tg Sengkuang</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count34;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Batu Merah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                 <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count35;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Seraya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?=$count36;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sungai Jodoh</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </div>

                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Calon DPR RI</h4>                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count9;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Laut</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count10;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Indah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count11;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sadai</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count12;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Buntung</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count37;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tg Sengkuang</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count38;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Batu Merah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count39;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Seraya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?=$count40;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sungai Jodoh</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </div>

                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Calon DPRD Provinsi Kepulauan Riau 1</h4>                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count13;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Laut</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count14;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Indah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count15;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sadai</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count16;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Buntung</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count41;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tg Sengkuang</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count42;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Batu Merah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count43;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Seraya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count44;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sungai Jodoh</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </div>

                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Calon DPRD Provinsi Kepulauan Riau 2</h4>                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count17;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Laut</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count18;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Indah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count19;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sadai</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count20;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Buntung</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count45;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tg Sengkuang</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count46;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Batu Merah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count47;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Seraya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?=$count48;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sungai Jodoh</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </div>

                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Calon DPRD Kota 1</h4>                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count21;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Laut</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count22;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Indah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count23;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sadai</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count24;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Buntung</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count49;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tg Sengkuang</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count50;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Batu Merah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count51;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Seraya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count52;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sungai Jodoh</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </div>

                    <div class="container-fluid px-4">
                        <h4 class="mt-4">Calon DPRD Kota 2</h4>                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count25;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Laut</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count26;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Bengkong Indah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count27;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sadai</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count28;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tanjung Buntung</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count53;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Tg Sengkuang</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count54;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Batu Merah</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count55;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Seraya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?=$count56;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Data Masuk Sungai Jodoh</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                             
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Situng Bengkong 2024</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

<?php }else{
    header("location:index.php");
} ?>
