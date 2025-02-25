<?php
session_start();
include 'koneksi.php';

    

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
        <!--TABLE-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
        
        <!-- bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                       
                        
                            <div class="card mt-4">
                                <div class="card-header bg-primary text-white">
                                    <h4>Calon DPRD Provinsi Kecamatan Bengkong</h4>
                                </div>                                             
                                <div class="card-body">
                                    <!-- Table Data -->
                                    <div class="table-responsive">                                            

                                            <table id="dt" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                    <th><center>No</center></th>
                                                    <th>Nama </th>
                                                    <th><center>Total Suara</center></th>
                                                    <th><center>Persentase</center></th>       
                                                    </tr>
                                                </thead>                                    
                                                <tbody>
                                                    
                                                    <tr>
                                                    <th><center>1.1</center></th>
                                                    <th>AMAN, S.Pd, M.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>                          
                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_1) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>1.2</center></th>
                                                    <th>SYALEH ARIFIN ALAM SYAH, S.Sos.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>                   

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_2) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>1.3</center></th>
                                                    <th>MERI, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_3) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>1.4</center></th>
                                                    <th>ABDUL MALIQ, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_4) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>1.5</center></th>
                                                    <th>FITRIYANTO, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_5) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>1.6</center></th>
                                                    <th>Drg. INDRIANI YULIATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_6) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>1.7</center></th>
                                                    <th>SUPARDI HALIMAN, S.E., M.Hum.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_7) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>1.8</center></th>
                                                    <th>ZAINUDDIN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_8) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    

                                                    <tr>
                                                    <th><center>1.9</center></th>
                                                    <th> ROHANI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_9) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>1.10</center></th>
                                                    <th>KURNIA FAJRISON</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_10) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>2.1</center></th>
                                                    <th>NYANYANG HARIS PRATAMURA, S.E., M.Si.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_11) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>2.2</center></th>
                                                    <th> ARIYANTO LU</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_12) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    

                                                    <tr>
                                                    <th><center>2.3</center></th>
                                                    <th>ELVI SIBARANI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_13) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>2.4</center></th>
                                                    <th>INDRA SAPUTRA, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_14) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>2.5</center></th>
                                                    <th>ANDI S. MUKHTAR, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_15) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_15) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>2.6</center></th>
                                                    <th>RENNI APRIANTI, S.Si.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_16) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_16) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    

                                                    <tr>
                                                    <th><center>2.7</center></th>
                                                    <th>ISMAIL</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_17) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_17) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>2.8</center></th>
                                                    <th>ALIRAN SIREGAR</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_18) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_18) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>2.9</center></th>
                                                    <th>LILIS LISWATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_19) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_19) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>2.10</center></th>
                                                    <th>YUMIZAR H. M. YUSUF, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_20) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_20) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>3.1</center></th>
                                                    <th>WIDIASTADI NUGROHO, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_21) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_21) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>3.2</center></th>
                                                    <th>Dr. SAHAT SIANTURI, S.H., M.Hum.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_22) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_22) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>3.3</center></th>
                                                    <th>ANGGRAINI SULISTIYOWATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_23) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_23) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>3.4</center></th>
                                                    <th>HENDRY</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_24) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_24) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>3,5</center></th>
                                                    <th>HANNY, S.E., M.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_25) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_25) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>3.6</center></th>
                                                    <th>PRILA DESITA PUTRI, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_26) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_26) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                   


                                                    <tr>
                                                    <th><center>3.7</center></th>
                                                    <th>EDWAN MORITA PASARIBU</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_27) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_27) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>3.8</center></th>
                                                    <th>ERLIS EKAWATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_28) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_28) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>3.9</center></th>
                                                    <th>RIZMAN HIDAYAT, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_29) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_29) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>3.10</center></th>
                                                    <th>SUSI HASPARAWATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_30) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_30) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    

                                                    <tr>
                                                    <th><center>4.1</center></th>
                                                    <th>ASMIN PATROS, S.H., M.Hum.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_31) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_31) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>4.2</center></th>
                                                    <th>SUKHRI FARIAL, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_32) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_32) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>4.3</center></th>
                                                    <th>LIDYA LUSTRAWAN, S.I.P.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_33) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_33) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>4.4</center></th>
                                                    <th>ANGGELINUS, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_34) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_34) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>4.5</center></th>
                                                    <th>FISMAN FA'ATULO GEA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_35) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_35) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                   


                                                    <tr>
                                                    <th><center>4.6</center></th>
                                                    <th>RAHMA HAYATI FAHRANTICKA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_36) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_36) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>4.7</center></th>
                                                    <th>FEBY DHIANDRA, A.Md.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_37) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_37) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>4.8</center></th>
                                                    <th>KOMISAYARNI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_38) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_38) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>4.9</center></th>
                                                    <th>SUPRIADI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_39) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_39) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>4.10</center></th>
                                                    <th>SILVIANA ROSHITA, A.Md.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_40) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_40) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>5.1</center></th>
                                                    <th>Ir. WIRYA PUTRA SAR SILALAHI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_41) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_41) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>5.2</center></th>
                                                    <th>LIK KHAI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_42) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_42) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>5.3</center></th>
                                                    <th>RAJA AMRA WILHELMINA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_43) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_43) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>5.4</center></th>
                                                    <th>H. SUHADI, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_44) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_44) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>5.5</center></th>
                                                    <th>Hj. ASNAH, S.E., M.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_45) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_45) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>5.6</center></th>
                                                    <th>WAHYU SUSENO, S.Si.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_46) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_46) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>5.7</center></th>
                                                    <th>JEPRA SUYANTO, S.H</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_47) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_47) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>5.8</center></th>
                                                    <th>SYAMSUKI SYUKUR</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_48) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_48) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>5.9</center></th>
                                                    <th>HARTINAH</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_49) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_49) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>5.10</center></th>
                                                    <th>INDRA SUDIRMAN, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_50) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_50) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    

                                                    <tr>
                                                    <th><center>6.1</center></th>
                                                    <th>HENDRA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_51) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_51) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>6.2</center></th>
                                                    <th>MANGARANAP SIMATUPANG, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_52) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_52) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>6.3</center></th>
                                                    <th>NING SULISTYAWARNI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_53) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_53) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>6.4</center></th>
                                                    <th>ADNAN OEMAR</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_54) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_54) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    


                                                    <tr>
                                                    <th><center>6.5</center></th>
                                                    <th>FENI TRI RAHAYU</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_55) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_55) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>6.6</center></th>
                                                    <th>SUMINTO</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_56) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_56) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>6.7</center></th>
                                                    <th>ANI SUJARWATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_57) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_57) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>7.1</center></th>
                                                    <th>AKBP (P) ARWIN, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_58) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_58) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    

                                                    <tr>
                                                    <th><center>7.2</center></th>
                                                    <th>RISA IMELDA NASUTION, S.TP.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_59) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_59) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>7.3</center></th>
                                                    <th>DEFIT</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_60) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_60) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>7.4</center></th>
                                                    <th>RIZKI RAMADHANI, S.Kom.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_61) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_61) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>7.5</center></th>
                                                    <th>SALBIAWATI>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_62) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_62) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    
                                                    <tr>
                                                    <th><center>7.6</center></th>
                                                    <th>MUHAMMAD IHSAN, S.Pd.I.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_63) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_63) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>7.7</center></th>
                                                    <th>ERMAYENI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_64) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_64) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>7.8</center></th>
                                                    <th>SAWALUDDIN SOLIN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_65) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_65) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.1</center></th>
                                                    <th>H. BAHKTIAR, M.A.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_66) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_66) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.2</center></th>
                                                    <th>RADEN HARI TJAHYONO</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_67) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_67) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.3</center></th>
                                                    <th>KHUSNUL INAYATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_68) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_68) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.4</center></th>
                                                    <th>Dr. MAYA INAYATI SARI, S.S., M.Pd.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_69) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_69) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.5</center></th>
                                                    <th>BALEO HALOMOAN HARAHAP</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_70) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_70) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.6</center></th>
                                                    <th>INDAH SUSANTI, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_71) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_71) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.7</center></th>
                                                    <th>YULISMAR, S.Pd.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_72) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_72) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.8</center></th>
                                                    <th>H. IRWANDI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_73) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_73) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.9</center></th>
                                                    <th>ABDUL RAHMAN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_74) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_74) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8.10</center></th>
                                                    <th>ANIZULMAIDI, S.Pd.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_75) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_75) / (SELECT SUM(surat_suara) FROM tb_dprd_prov WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>




                                                    <tr>
                                                    <th><center>10.1</center></th>
                                                    <th>UBAINGAN SIGALINGGING, S.Sn.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_101) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_101) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.2</center></th>
                                                    <th>WIDIA LESTARI ZALOGO</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_102) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_102) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.3</center></th>
                                                    <th>RUSHADI WIJAYA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_103) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_103) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.4</center></th>
                                                    <th>ROCHANI, S.Pd.K.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_104) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_104) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.5</center></th>
                                                    <th>KASIANUS KASIASI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_105) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_105) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.6</center></th>
                                                    <th>PILIPUS NONTOR, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_106) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_106) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.7</center></th>
                                                    <th>ANGGUN AMALIA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_107) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_107) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.8</center></th>
                                                    <th>ABRAM NICOLAS ATI VARGAS</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_108) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_108) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10.9</center></th>
                                                    <th>RIANTO PANJAITAN, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_109) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_109) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>10.10</th>
                                                    <th>SUGAR SINAGA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_110) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_110) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.1</th>
                                                    <th>EDWARD BRANDO, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_111) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_111) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.2</th>
                                                    <th>ISMAIL</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_112) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_112) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.3</th>
                                                    <th>YUNIKA INDRI ANI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_113) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_113) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.4</th>
                                                    <th>TIRTA MULYADI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_114) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_114) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.5</th>
                                                    <th>HERAWATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_115) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_115) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.6</th>
                                                    <th>SYAWALUDDIN, S.K.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_116) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_116) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                     <tr>
                                                    <th>12.7</th>
                                                    <th>SINTA SAPIRA, S.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_117) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_117) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.8</th>
                                                    <th>ISTIFIYA'U IHSANIAH EKA YUDISTINA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_118) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_118) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.9</th>
                                                    <th>SURAHMAN JAYA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_119) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_119) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>12.10</th>
                                                    <th>SIGID SYAWAL FUADI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_120) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_120) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>13.1</th>
                                                    <th>ZULKIFLI, S.Kom.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_121) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_121) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th>14.1</th>
                                                    <th>MESRAWATI TAMPUBOLON, S.E., M.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_122) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_122) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>14.2</th>
                                                    <th>H. SURYA SARDI, S.T., M.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_123) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_123) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                         
                                                                                                            <tr>
                                                    <th>14.3</th>
                                                    <th>ITA HAYATI NUFUS, S.Psi.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_124) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_124) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th>14.4</th>
                                                    <th>DANIR</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_125) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_125) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th>14.5</th>
                                                    <th>TRI RYAN PUTRA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_126) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_126) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>  
                                                        
                                                    <tr>
                                                    <th>14.6</th>
                                                    <th>EFRIYANTI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_127) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_127) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>  
                                                    <tr>
                                                    <th>14.7</th>
                                                    <th>JOKO NUGROHO, S.T.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_128) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_128) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>  

                                                    <tr>
                                                    <th>14.8</th>
                                                    <th>FIRMAN BASTIAN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_129) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_129) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>  

                                                    <tr>
                                                    <th>14.9</th>
                                                    <th>HERVINA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_130) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_130) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>  
                                                    <tr>
                                                    <th>14.10</th>
                                                    <th>ANGGI PRAMANA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_131) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_131) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 


                                                    <tr>
                                                    <th>15.1</th>
                                                    <th>ANTO DUHA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_132) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_132) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 
                                                    <tr>
                                                    <th>15.2</th>
                                                    <th>Dr. YUDHY SANJAYA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_133) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_133) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 
                                                    <tr>
                                                    <th>15.3</th>
                                                    <th>HADYANNA PRATHITA RAHAYU</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_134) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_134) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 
                                                    <tr>
                                                    <th>15.4</th>
                                                    <th>PANAL EXAUDI SILABAN, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_135) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_135) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 

                                                    <tr>
                                                    <th>15.5</th>
                                                    <th>YOHANES ALOYSIUS DA, S.Pd.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_136) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_136) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 
                                                    <tr>
                                                    <th>15.6</th>
                                                    <th>MIRA FEBRYANI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_137) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_137) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 
                                                    <tr>
                                                    <th>15.7</th>
                                                    <th>CHASANOVA ARSYA AYU PUTRI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_138) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_138) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 
                                                    <tr>
                                                    <th>15.8</th>
                                                    <th>HENKEL OKTOFERY</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_139) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_139) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 

                                                    <tr>
                                                    <th>15.9</th>
                                                    <th>TUTI MARLINA GULO, S.Tr.AB.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_140) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_140) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr> 
                                                    <tr>
                                                    <th>15.10</th>
                                                    <th>YASIR AFDILLAH</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_141) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_141) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th>16.1</th>
                                                    <th>HERMANTO YUANNATA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_142) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_142) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>16.2</th>
                                                    <th>NOVIYARTI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_143) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_143) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>16.3</th>
                                                    <th>RANNY DANIEL T, S.Kom., M.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_144) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_144) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th>16.4</th>
                                                    <th>EKA SEPTIYANINGSIH, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_145) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_145) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
 <tr>
                                                    <th>16.5</th>
                                                    <th>CHANDRA</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_146) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_146) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.1</th>
                                                    <th>BURHANUDDIN NUR</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_147) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_147) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.2</th>
                                                    <th>M. FATAN RIYADHI, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_148) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_148) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.3</th>
                                                    <th>DESTI MAHFITA SUSANTI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_149) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_149) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.4</th>
                                                    <th>RUDI ARIANTO</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_150) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_150) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.5</th>
                                                    <th>ERIZAL. T</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_151) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_151) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.6</th>
                                                    <th>RIADHUL AININ</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_152) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_152) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.7</th>
                                                    <th>ANDI PURNAMA, A.Md.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_153) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_153) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.8</th>
                                                    <th>BAKRI, S.E., M.Si.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_154) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_154) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.9</th>
                                                    <th>SESRAWATI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_155) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_155) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>17.10</th>
                                                    <th>NEL SEN BUR, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_156) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_156) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>24.1</th>
                                                    <th>SYAMSUDDIN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_157) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_157) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th>24.2</th>
                                                    <th>ANDI HASANUDDIN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_158) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_158) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th>24.3</th>
                                                    <th>ANGGRYS NYZZA ALAMSYAH</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_159) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_159) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>24.4</th>
                                                    <th>BUDI HERMAWAN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_160) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_160) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th>24.5</th>
                                                    <th>MUSPIDAWATI, S.E</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_161) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_161) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>24.6</th>
                                                    <th>PITRI WAHYUNI</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_162) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_162) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>
                                                    <tr>
                                                    <th>24.7</th>
                                                    <th>IRWAN</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_163) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["total_jumlah"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $conn->close();
                                                    ?>              

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT (SUM(paslon_163) / (SELECT SUM(surat_suara) FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG')) * 100 AS persentase FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>




                                                </tbody>                
                                                    
                                            </table>

                                            
                                    </div>                                    
                                </div>       
                            </div>

                                    <div class="card mt-4">
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                    google.charts.load("current", {packages:['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);
                                    function drawChart() {
                                      var data = google.visualization.arrayToDataTable([
                                        ["Element", "Jumlah Suara", { role: "style" } ],
                                        ["1.1",<?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>  , "#00008B"],

                                        ["1.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#00BFFF"],
                                        ["1.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["1.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["1.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["1.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["1.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["1.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["1.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_15) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_16) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_17) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_18) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["2.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_19) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_20) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_21) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_22) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["6.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_23) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_24) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_25) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_26) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_27) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_28) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_29) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["3.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_30) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_31) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_32) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_33) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_34) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_35) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_36) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_37) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_38) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["4.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_39) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_40) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_41) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_42) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_43) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_44) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_45) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_46) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_47) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_48) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_49) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["6.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_50) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["6.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_51) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],
                                        

                                        ["6.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_52) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["6.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_53) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["6.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_54) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["6.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_55) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["6.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_56) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_57) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_58) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_59) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_60) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_61) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_62) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_63) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_64) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["8.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_65) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["8.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_66) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["8.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_67) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["8.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_68) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["8.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_69) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["8.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_70) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],                                        
                                        ["8.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_71) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["8.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_72) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["8.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_73) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["8.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_64) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],



                                        ["8.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_75) AS total_jumlah FROM tb_dprd_prov WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],




                                        ["10.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_101) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_102) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_103) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_104) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_105) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                             ["10.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_106) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_107) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_108) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_109) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["10.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_110) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                         ["12.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_111) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                          ["12.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_112) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["12.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_113) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["12.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_114) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                             ["12.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_115) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["12.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_116) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["12.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_117) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["12.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_118) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["12.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_119) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["12.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_120) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["13.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_121) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["14.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_122) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_123) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_124) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_125) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_126) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_127) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_128) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_129) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_130) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["14.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_131) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                       ["15.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_132) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["15.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_133) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                         ["15.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_134) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                          ["15.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_135) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                           ["15.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_136) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                            ["15.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_137) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                             ["15.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_138) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                              ["15.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_139) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["15.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_140) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                         ["15.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_141) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["16.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_142) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["16.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_143) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["16.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_144) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["16.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_145) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["16.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_146) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_147) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_148) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_149) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_150) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_151) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_152) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_153) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_154) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_155) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["17.10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_156) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["24.1", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_157) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["24.2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_158) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["24.3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_159) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["24.4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_160) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["24.5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_161) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["24.6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_162) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["24.7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_163) AS total_jumlah FROM tb_dprd_prov1 WHERE kecamatan='BENGKONG'");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                      ]);

                                      var view = new google.visualization.DataView(data);
                                      view.setColumns([0, 1,
                                                       { calc: "stringify",
                                                         sourceColumn: 1,
                                                         type: "string",
                                                         role: "annotation" },
                                                       2]);

                                      var options = {
                                        title: "GRAFIK SUARA CALON DPRD PROVINSI KECAMATAN BENGKONG",
                                        width: 2000,
                                        height: 300,
                                        bar: {groupWidth: "95%"},
                                        legend: { position: "none" },
                                      };
                                      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                                      chart.draw(view, options);
                                     }
                                    </script>
                                    <div id="columnchart_values" style="width: 600px; height: 300px;"></div>
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

        <!-- bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <!-- TABLE -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script> 

        <script >    
        $(document).ready(function() {
            $('#dt').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
        </script>


    </body>
</html>


