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
                                <div class="card-header bg-warning text-white">
                                    <h4>Calon DPR Republik Indonesia</h4>
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
                                                    <th>H. Isdianto, S.Sos., M.M</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_1) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>H. Huzrin Hood, S.H., M.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_2) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Dewi Niya Boneta</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_3) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Rocky Marciano Bawole, S.Sos.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_4) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Ir. H. M. Endipat Wijaya, M.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_5) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Sri Rezeki, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_6) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Andy Anhar Chalid</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_7) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Usep Rahmat S</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_8) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th> Dr. H. M. Soerya Respationo, S.H., M.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_9) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Mayjen. TNI (Purn.) Sturman Panjaitan, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_10) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Ernawati</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_11) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>T.H. Sinambela, S.I.P.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_12) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Rizki Faisal</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_13) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Cen Sui Lan</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_14) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Angganeta Radjawane, S.I.P.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_15) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_15) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Petrus Selestinus, S.H</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_16) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_16) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Drs.H. Nyat Kadir</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_17) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_17) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Randi Zulmariadi, S.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_18) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_18) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Selly Febrilia Mayora, S.Tr.Akun.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_19) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_19) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Pietra Machreza Paloh</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_20) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_20) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Nefrizal, S.T</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_21) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_21) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Wahyu Dianasari</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_22) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_22) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Suhari</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_23) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_23) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Wawan Triyanto</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_24) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_24) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Abdul Rahman</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_25) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_25) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Riana Simatupang</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_26) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_26) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Suryani, S.E., M.I.Kom.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_27) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_27) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Dr. H. Irfan Aulia, M.Psi.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_28) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_28) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Cinthiara Yunisa</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_29) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_29) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Amri, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_30) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_30) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>9.1</center></th>
                                                    <th>Winarti</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_31) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_31) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>9.2</center></th>
                                                    <th>Said Baswidan, S.E., M.Si.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_32) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_32) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>9.3</center></th>
                                                    <th>Kwandaruwikan Sri Harto</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_33) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_33) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Irjen. Pol. (Purn.) Drs. Yotje Mende, M.Hum.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_34) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_34) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th>Salmah Hani</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_35) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_35) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>11.1</center></th>
                                                    <th>Guntur Gumilang</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_36) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_36) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>11.2</center></th>
                                                    <th>Arya Zikri</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_37) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_37) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>11.3</center></th>
                                                    <th>Mauli Hafizoh</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_38) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_38) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>11.4</center></th>
                                                    <th>Dhanial Herly Hartono</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_39) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_39) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>12.1</center></th>
                                                    <th>Dr. Asman Abnur, S.E., M.Si.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_40) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_40) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>12.2</center></th>
                                                    <th>Derry Purnamasari</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_41) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_41) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>12.3</center></th>
                                                    <th>Alex Guspeneldi, S.H., M.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_42) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_42) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>12.4</center></th>
                                                    <th>Desi Hanafia, S.E.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_43) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_43) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>13.1</center></th>
                                                    <th>Agus Salim</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_44) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_44) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>13.2</center></th>
                                                    <th>Darmawati</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_45) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_45) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>13.3</center></th>
                                                    <th>Amir Asmadi,S.Pd.I.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_46) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_46) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>14.1</center></th>
                                                    <th>Aneng</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_47) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_47) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>14.2</center></th>
                                                    <th>Agus Wibowo</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_48) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_48) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>14.3</center></th>
                                                    <th>Rudang Ckristy Meliala, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_49) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_49) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>14.4</center></th>
                                                    <th>Ir. Mustofa Widjaja</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_50) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_50) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>15.1</center></th>
                                                    <th>Harun Pandapotan</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_51) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_51) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>15.2</center></th>
                                                    <th>Rudy Widjaja</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_52) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_52) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>15.3</center></th>
                                                    <th>Livi Agustri Br Milala, S.H</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_53) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_53) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>15.4</center></th>
                                                    <th>Dewi Rosita</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_54) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_54) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>16.1</center></th>
                                                    <th>Alias Wello, S.I.P., M.Tr.I.P.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_55) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_55) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>16.2</center></th>
                                                    <th>Soraya Djajakusuma</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_56) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_56) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>16.3</center></th>
                                                    <th>Greos Sumartana Saragih, S.P., M.M</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_57) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_57) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>16.4</center></th>
                                                    <th>Wina Zahra Ayu</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_58) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_58) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>17.1</center></th>
                                                    <th>Andy Sulistio Susanto</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_59) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_59) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>17.2</center></th>
                                                    <th>Sri Herlina, S.P.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_60) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_60) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>17.3</center></th>
                                                    <th>Nanda Yura Putra</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_61) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_61) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>17.4</center></th>
                                                    <th>Emrawatith>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_62) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_62) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>24.1</center></th>
                                                    <th>Azhari, S.T., M.Eng.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_63) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_63) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>24.2</center></th>
                                                    <th>H. Kamaruddin,S.Pd., M.M., M.Si.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_64) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_64) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>24.3</center></th>
                                                    <th>Eka Anita Diana, S.Pd.I</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_65) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_65) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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
                                                    <th><center>24.4</center></th>
                                                    <th>Rina Susanti.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "pemilu");

                                                    $sql = ("SELECT SUM(paslon_66) AS total_jumlah FROM tb_dpr_ri");
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

                                                    $sql = ("SELECT (SUM(paslon_66) / (SELECT SUM(surat_suara) FROM tb_dpr_ri)) * 100 AS persentase FROM tb_dpr_ri");
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

                                        $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_15) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_16) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_17) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_18) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_19) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_20) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_21) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_22) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_23) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_24) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_25) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_26) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_27) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_28) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_29) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        $sql = ("SELECT SUM(paslon_30) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["31", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_31) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["32", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_32) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["33", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_33) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["34", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_34) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["35", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_35) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["36", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_36) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["37", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_37) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["38", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_38) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["39", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_39) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["40", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_40) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["41", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_41) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["42", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_42) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["43", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_43) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["44", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_44) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["45", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_45) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["46", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_46) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["47", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_47) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["48", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_48) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["49", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_49) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["50", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_50) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["51", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_51) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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
                                        

                                        ["52", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_52) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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

                                        ["53", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_53) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["54", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_54) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["55", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_55) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["56", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_56) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["57", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_57) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["58", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_58) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["59", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_59) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["60", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_60) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["61", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_61) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["62", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_62) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["63", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_63) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["64", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_64) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["65", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_65) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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


                                        ["66", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "pemilu");

                                        $sql = ("SELECT SUM(paslon_66) AS total_jumlah FROM tb_dpr_ri");
                                        $result = $koneksi->query($sql);

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
                                        title: "GRAFIK SUARA CALON DPR REPUBLIK INDONESIA",
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


