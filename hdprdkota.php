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
                                <div class="card-header bg-secondary text-white">
                                    <h4>Calon DPRD Kota </h4>
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
                                                    <th>1.1</th>
                                                    <th>LUKMAN HAKIM</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_1) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>1.2</th>
                                                    <th>NOFRIA ZAMNI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_2) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>1.3</th>
                                                    <th>INDRA ISPUTRANTO, S.H.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_3) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>1.4</th>
                                                    <th>MASSIARA ALIAS, S.E.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_4) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>1.5</th>
                                                    <th>SYARIFAH AINUN NASUTION, Amd. KES</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_5) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>1.6</th>
                                                    <th>SAKIMAN, SE., MM</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_6) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>1.7</th>
                                                    <th>IBRAHIM HADY, S.Pd.I</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_7) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>2.1</th>
                                                    <th>DENI FIRZAN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_8) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>2.2</th>
                                                    <th>HARMIDI UMAR HUSEN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_9) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>2.3</th>
                                                    <th>CORNELIA DWIKORA PIETERS,SH</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_10) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>2.4</th>
                                                    <th>SUTARDI,SE</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_11) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>2.5</th>
                                                    <th>SETIA PUTRA TARIGAN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_12) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>2.6</th>
                                                    <th>DEDE ANGRAINI PUTRI, SM</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_13) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>2.7</th>
                                                    <th>EVI YULINDA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_14) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>3.1</th>
                                                    <th>NURYANTO, S.H., M.H.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_15) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_15) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>3.2</th>
                                                    <th>UDIN P. SIHALOHO, S.H.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_16) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_16) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>3.3</th>
                                                    <th>BERNIKE SULASTRI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_17) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_17) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>3.4</th>
                                                    <th>GABRIEL S. A. A. SIANTURI, B.Com.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_18) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_18) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>3.5</th>
                                                    <th>WELLIANA FRANCISKA HUTAGALUNG</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_19) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_19) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>3.6</th>
                                                    <th>EPENDI TAN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_20) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_20) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>3.7</th>
                                                    <th>ASIH SUWITO</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_21) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_21) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>4.1</th>
                                                    <th>MUHAMMAD YUNUS MUDA, S.E.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_22) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_22) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>4.2</th>
                                                    <th>ARYA MUSTAKIM MUDA, A.Md.M.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_23) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_23) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>4.3</th>
                                                    <th>D. RABAIYAH PARBA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_24) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_24) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>4.4</th>
                                                    <th>JOHNY</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_25) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_25) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>4.5</th>
                                                    <th>AGUSTINUS BARO NAMA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_26) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_26) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>4.6</th>
                                                    <th>DESRAWILIANTASARI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_27) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_27) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>4.7</th>
                                                    <th>RANDY KURNIAWAN, S.H., M.H.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_28) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_28) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>5.1</th>
                                                    <th>Hj. ASNAWATI ATIQ, S.E., M.M.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_29) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_29) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>5.2</th>
                                                    <th>WAN EL KENZ, S.Kp., M.H.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_30) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_30) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>5.3</th>
                                                    <th>RUSLAN PASOLLE, S.E.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_31) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_31) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>5.4</th>
                                                    <th>RAJA TANTOWI ZAINUDDIN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_32) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_32) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>5.5</th>
                                                    <th>KAMARUDDIN, S.E.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_33) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_33) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>5.6</th>
                                                    <th>IDA KRISMAL</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_34) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_34) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>5.7</th>
                                                    <th>RUDIANTO, S.H., M.H.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_35) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_35) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>6.1</th>
                                                    <th>GUSRIL</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_36) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_36) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>6.2</th>
                                                    <th>MAS JALI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_37) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_37) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>6.3</th>
                                                    <th>RIMA PUJI ASTUTI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_38) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_38) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>6.4</th>
                                                    <th>BAMBANG SUGIONO, S.T.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_39) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_39) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>6.5</th>
                                                    <th>MASKAYANI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_40) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_40) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>6.6</th>
                                                    <th>MUJIHARTO</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_41) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_41) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>7.1</th>
                                                    <th>BHENTAR PRAMANA WIJAYA, SH, M.H.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_42) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_42) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>7.2</th>
                                                    <th>TARMIZI, S.Sos.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_43) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_43) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>7.3</th>
                                                    <th>SHANTY ARYANI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_44) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_44) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>7.4</th>
                                                    <th>ANDI MUCHSIN, S.E.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_45) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_45) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>7.5</th>
                                                    <th>FAHRIZA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_46) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_46) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>7.6</th>
                                                    <th>AYU WINDARI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_47) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_47) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>7.7</th>
                                                    <th>DEDI HENDRES, A.Md.Kom.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_48) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_48) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>8.1</th>
                                                    <th>SITI NURLAILAH, ST, MT</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_49) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_49) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>8.2</th>
                                                    <th>NASROL</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_50) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_50) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>8.3</th>
                                                    <th>SATARIA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_51) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_51) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>8.4</th>
                                                    <th>ASWAD, S.Sos</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_52) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_52) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>8.5</th>
                                                    <th> AHMAD SOSIAWAN, SE</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_53) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_53) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>8.6</th>
                                                    <th> SITI AMINA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_54) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_54) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>8.7</th>
                                                    <th> RITA YANTI FITRI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_55) AS total_jumlah FROM tb_dprd_kota");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_55) / (SELECT SUM(surat_suara) FROM tb_dprd_kota)) * 100 AS persentase FROM tb_dprd_kota");
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
                                                    <th>9.1</th>
                                                    <th> HELMI RIZAL, S.TP</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_101) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_101) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>9.2</th>
                                                    <th> ZAKARIA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_102) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_102) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>9.3</th>
                                                    <th> SUNDARI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_103) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_103) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>10.1</th>
                                                    <th> Ir .RUBINA SITUMORANG</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_104) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_104) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>10.2</th>
                                                    <th> RUSLAN SINAGA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_105) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_105) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>10.3</th>
                                                    <th> ISKANDAR LUXER,SE</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_106) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_106) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>10.4</th>
                                                    <th> Dr . SITI VERA NOTARINA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_107) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_107) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>10.5</th>
                                                    <th> SUWITO,S.Pd</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_108) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_108) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>10.6</th>
                                                    <th> SILVI WIRA WANGSA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_109) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_109) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>10.7</th>
                                                    <th> IRWAN SINAGA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_110) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_110) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> H. SAHRUL</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_111) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_111) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> MUHAMMAD PAISAL OLA, S. Sos</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_112) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_112) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> DEWI ELLYANA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_113) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_113) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> MUHAMMAD HAKIM, S.T</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_114) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_114) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> SARIPUDIN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_115) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_115) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> SETIAWATI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_116) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_116) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> H. JUMAKIR, S. Pd. I</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_117) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_117) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> AYANG IZAI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_118) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_118) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> EZA PENDRI, S.Kom</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_119) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_119) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> SYAHRELAWATI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_120) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_120) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> YOHANES DORIS ATAWOLLO</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_121) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_121) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> HADIS HAMZAH</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_122) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_122) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> RAFIDA RAFIQ</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_123) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_123) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> RUSMANTO</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_124) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_124) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th> BAYU SEGARA HOKI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_125) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_125) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>GRACE ELIZABETH SARTIKA ZEBUA, S.H</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_126) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_126) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>FERRY H. PANDIANGAN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_127) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_127) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>SUMARDI HALIM TEDJA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_128) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_128) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>IVONNY CHRISTINA HUTABARAT</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_129) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_129) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>FERRY SARAGI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_130) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_130) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>BUDIONO</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_131) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_131) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>FERIANTO MULIONO</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_132) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_132) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>DENNY BOY TAMPUBOLON, A.Md</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_133) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_133) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>NOWITA WATI, S.Kom.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_134) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_134) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>ALBERT FRANCIUS NAINGGOLAN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_135) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_135) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>NIKOLAUS ANGGA</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_136) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_136) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>ROY MULANA RIZKY</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_137) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_137) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>Dr. IDAWATI NURSANTI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_138) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_138) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>OKTA ROBIN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_139) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_139) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>ILHAM</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_140) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_140) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>HARYANTO,S.PD.MH</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_141) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_141) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>ERNA MARDAYENI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_142) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_142) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>M. ARFAH</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_143) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_143) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>IRA CIMI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_144) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_144) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>ZUL FAHMI NATSIR</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_145) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_145) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>MUSLIMIN BIN MUHAMMAD IDRIS</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_146) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_146) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>SYAFRINALDIS.E.</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_147) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_147) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>RAHMAD BULYAN</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_148) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_148) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                                    <th>SUNARTI</th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT SUM(paslon_149) AS total_jumlah FROM tb_dprd_kota1");
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
                                                    ?>                               

                                                    </center>
                                                    </th>
                                                    <th><center>
                                                    <?php
                                                    $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                                    $sql = ("SELECT (SUM(paslon_149) / (SELECT SUM(surat_suara) FROM tb_dprd_kota1)) * 100 AS persentase FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_15) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_16) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_17) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_18) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_19) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_20) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_21) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_22) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_23) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_24) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_25) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_26) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_27) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_28) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_29) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_30) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_31) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_32) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_33) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_34) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_35) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_36) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_37) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_38) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_39) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_40) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_41) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_42) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_43) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_44) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_45) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_46) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_47) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_48) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_49) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_50) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_51) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_52) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_53) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_54) AS total_jumlah FROM tb_dprd_kota");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_55) AS total_jumlah FROM tb_dprd_kota");
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


                                        


                                        ["9.1", <?php 
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_101) AS total_jumlah FROM tb_dprd_kota1");
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

                                        ["9.2", <?php 
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_102) AS total_jumlah FROM tb_dprd_kota1");
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

                                        ["9.3", <?php 
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_103) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_104) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_105) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_106) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_107) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_108) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_109) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_110) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_111) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_112) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_113) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_114) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_115) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_116) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_117) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_118) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_119) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_120) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_121) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_122) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_123) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_124) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_125) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_126) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_127) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_128) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_129) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_130) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_131) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_132) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_133) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_134) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_135) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_136) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_137) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_138) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_139) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_140) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_141) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_142) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_143) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_144) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_145) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_146) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_147) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_148) AS total_jumlah FROM tb_dprd_kota1");
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
                                        $koneksi = new mysqli("", "silpaonl_situngbabe", "situngbabe", "silpaonl_situngbabe");

                                        $sql = ("SELECT SUM(paslon_149) AS total_jumlah FROM tb_dprd_kota1");
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
                                        title: "GRAFIK SUARA CALON DPRD KOTA",
                                        width: 900,
                                        height: 400,
                                        bar: {groupWidth: "95%"},
                                        legend: { position: "none" },
                                      };
                                      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                                      chart.draw(view, options);
                                     }
                                    </script>
                                    <div id="columnchart_values" style="width: 1000px; height: 400px;"></div>
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


