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
                                <div class="card-header bg-danger text-white">
                                    <h4>Calon DPD Republik Indonesia</h4>
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
                                                    <th><center>1</center></th>
                                                    <th>David Farel Sibuea, M.Th., D.Min.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_1) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>2</center></th>
                                                    <th>H. Dharma Setiawan</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_2) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>

                                                    <tr>
                                                    <th><center>3</center></th>
                                                    <th>Dwi Ajeng Sekar Respaty, S.H., M.Kn.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_3) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>4</center></th>
                                                    <th>Gerry Yasid, S.H., M.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_4) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>5</center></th>
                                                    <th>Drs. H. Hardi Selamat Hood, M.Si., Ph.D.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_5) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>6</center></th>
                                                    <th>Haripinto Tanuwidjaja</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_6) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>7</center></th>
                                                    <th>Ir. Hotman Hutapea</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_7) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>8</center></th>
                                                    <th>Drs. Ismeth Abdullah</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_8) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>9</center></th>
                                                    <th>Juanda, S.Mn., M.M.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_9) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>10</center></th>
                                                    <th>Ria Saptarika</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_10) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>11</center></th>
                                                    <th>Dr. Richard Hamonangan Pasaribu, B.Sc., M.Sc.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_11) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>12</center></th>
                                                    <th>Sirajudin Nur</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_12) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>13</center></th>
                                                    <th>Stephane Gerald Martogi Siburian</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_13) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
                                                    echo "" . $row["persentase"];
                                                        }
                                                    } else {echo "Tidak ada hasil";
                                                    }

                                                    // Menutup koneksi database
                                                    $koneksi->close();
                                                    ?>                           
                                                    
                                                    </center></th>                         
                                                    </tr>


                                                    <tr>
                                                    <th><center>14</center></th>
                                                    <th>Sunarto Poniman, S.H.</th>
                                                    <th><center>
                                                        <?php
                                                    $conn = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dpdri");
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
                                                    $koneksi = new mysqli("localhost", "root", "", "myapp");

                                                    $sql = ("SELECT (SUM(paslon_14) / (SELECT SUM(surat_suara) FROM tb_dpdri)) * 100 AS persentase FROM tb_dpdri");
                                                    $result = $koneksi->query($sql);

                                                    if ($result->num_rows > 0) {
                                                     // Output data dari setiap baris hasil query
                                                    while($row = $result->fetch_assoc()) {
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
                                        ["1",<?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_1) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

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

                                        ["2", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_2) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

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
                                        ["3", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_3) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],

                                        ["4", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_4) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["5", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_5) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["6", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_6) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["7", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_7) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["8", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_8) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["9", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_9) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["10", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_10) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["11", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_11) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["12", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_12) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["13", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_13) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                        // Output data dari setiap baris hasil query
                                        while($row = $result->fetch_assoc()) {
                                        echo "" . $row["total_jumlah"];
                                        }
                                        } else {echo "Tidak ada hasil";
                                        }

                                        // Menutup koneksi database
                                        $koneksi->close();
                                        ?>, "#FF0000"],


                                        ["14", <?php 
                                        $koneksi = new mysqli("localhost", "root", "", "myapp");

                                        $sql = ("SELECT SUM(paslon_14) AS total_jumlah FROM tb_dpdri");
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
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
                                        title: "GRAFIK SUARA CALON DPD REPUBLIK INDONESIA",
                                        width: 1200,
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


