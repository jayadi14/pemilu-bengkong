
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
                                <div class="card-header bg-success text-white">
                                    <h4>Calon DPRD Kota 1</h4>
                                </div>                                             
                                <div class="card-body">
                                    <!-- Table Data -->
                                    <div class="table-responsive"> 

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah">
                                              Tambah Data 1
                                            </button>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah1">
                                              Tambah Data 2
                                            </button>

                                            <table id="dt" class="display nowrap" style="width:100%">
                                                <thead>
                                                  <tr>
                                                  <th class="align-middle"><center>No</center></th>
                                                  <th class="align-middle">Kecamatan</th>
                                                  <th class="align-middle">Kelurahan</th>
                                                  <th class="align-middle">TPS</th>
                                                  <th>Jumlah Pemilih<br>Dalam DPT</th>
                                                  <th>Jumlah Pengguna Hak Pilih<br>Dalam DPT</th>
                                                  <th>Jumlah Pengguna Hak Pilih<br>Dalam DPTb</th>
                                                  <th>Jumlah Pengguna Hak Pilih<br>Dalam DPK</th>
                                                  <th>Jumlah Pengguna<br>Hak Pilih</th>
                                                  <th>Jumlah Surat<br>Suara</th>
                                                  <th class="align-middle"><center>PKB 1</center></th>
                                                  <th class="align-middle"><center>PKB 2</center></th>
                                                  <th class="align-middle"><center>PKB 3</center></th>
                                                  <th class="align-middle"><center>PKB 4</center></th>
                                                  <th class="align-middle"><center>PKB 5</center></th>
                                                  <th class="align-middle"><center>PKB 6</center></th>
                                                  <th class="align-middle"><center>PKB 7</center></th>
                                                  <th class="align-middle"><center>GERINDRA 1</center></th>
                                                  <th class="align-middle"><center>GERINDRA 2</center></th>
                                                  <th class="align-middle"><center>GERINDRA 3</center></th>
                                                  <th class="align-middle"><center>GERINDRA 4</center></th>
                                                  <th class="align-middle"><center>GERINDRA 5</center></th>
                                                  <th class="align-middle"><center>GERINDRA 6</center></th>
                                                  <th class="align-middle"><center>GERINDRA 7</center></th>                             
                                                  <th class="align-middle"><center>PDIP 1</center></th>
                                                  <th class="align-middle"><center>PDIP 2</center></th>
                                                  <th class="align-middle"><center>PDIP 3</center></th>
                                                  <th class="align-middle"><center>PDIP 4</center></th>
                                                  <th class="align-middle"><center>PDIP 5</center></th>
                                                  <th class="align-middle"><center>PDIP 6</center></th>
                                                  <th class="align-middle"><center>PDIP 7</center></th>                                
                                                  <th class="align-middle"><center>GOLKAR 1</center></th>
                                                  <th class="align-middle"><center>GOLKAR 2</center></th>
                                                  <th class="align-middle"><center>GOLKAR 3</center></th>
                                                  <th class="align-middle"><center>GOLKAR 4</center></th>
                                                  <th class="align-middle"><center>GOLKAR 5</center></th>
                                                  <th class="align-middle"><center>GOLKAR 6</center></th>
                                                  <th class="align-middle"><center>GOLKAR 7</center></th>                        
                                                  <th class="align-middle"><center>NASDEM 1</center></th>
                                                  <th class="align-middle"><center>NASDEM 2</center></th>
                                                  <th class="align-middle"><center>NASDEM 3</center></th>
                                                  <th class="align-middle"><center>NASDEM 4</center></th>
                                                  <th class="align-middle"><center>NASDEM 5</center></th>
                                                  <th class="align-middle"><center>NASDEM 6</center></th>
                                                  <th class="align-middle"><center>NASDEM 7</center></th>                               
                                                  <th class="align-middle"><center>BURUH 1</center></th>
                                                  <th class="align-middle"><center>BURUH 2</center></th>
                                                  <th class="align-middle"><center>BURUH 3</center></th>
                                                  <th class="align-middle"><center>BURUH 4</center></th>
                                                  <th class="align-middle"><center>BURUH 5</center></th>
                                                  <th class="align-middle"><center>BURUH 6</center></th>                                
                                                  <th class="align-middle"><center>GELORA 1</center></th>
                                                  <th class="align-middle"><center>GELORA 2</center></th>
                                                  <th class="align-middle"><center>GELORA 3</center></th>
                                                  <th class="align-middle"><center>GELORA 4</center></th>
                                                  <th class="align-middle"><center>GELORA 5</center></th>
                                                  <th class="align-middle"><center>GELORA 6</center></th>
                                                  <th class="align-middle"><center>GELORA 7</center></th>                       
                                                  <th class="align-middle"><center>PKS 1</center></th>
                                                  <th class="align-middle"><center>PKS 2</center></th>
                                                  <th class="align-middle"><center>PKS 3</center></th>
                                                  <th class="align-middle"><center>PKS 4</center></th>
                                                  <th class="align-middle"><center>PKS 5</center></th>
                                                  <th class="align-middle"><center>PKS 6</center></th>
                                                  <th class="align-middle"><center>PKS 7</center></th>                                         
                                                  <th>Jumlah<br>Suara Sah</th>
                                                  <th>Jumlah<br>Suara Tidak Sah</th>
                                                  <th>Jumlah Suara Sah<br>dan Suara Tidak Sah</th>
                                                  
                                                  <th class="align-middle">Aksi</th>
                                                  </tr>
                                                </thead>

                                                <?php
                                                $no = 1;
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_dprd_kota ORDER BY id_dprdkota DESC");
                                                while ($data =mysqli_fetch_array($tampil)) :
                                                ?>                   
                                              
                                                <tbody>                     

                                                   <tr>
                                                     <td><center>
                                                        <?= $no++ ?>
                                                     </center></td>
                                                     <td>
                                                        <?= $data['kecamatan'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['kelurahan'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['tps'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['dpt'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['p_dpt'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['p_dptb'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['p_dpk'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['jp_pemilih'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['surat_suara'] ?>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_1'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_2'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_3'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_4'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_5'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_6'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_7'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_8'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_9'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_10'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_11'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_12'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_13'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_14'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_15'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_16'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_17'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_18'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_19'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_20'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_21'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_22'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_23'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_24'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_25'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_26'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_27'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_28'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_29'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_30'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_31'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_32'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_33'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_34'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_35'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_36'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_37'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_38'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_39'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_40'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_41'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_42'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_43'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_44'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_45'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_46'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_47'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_48'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_49'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_50'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_51'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_52'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_53'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_54'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_55'] ?></center>
                                                     </td>                          
                                                     <td><center>
                                                        <?= $data['ss'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['sts'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['ss_sts'] ?></center>
                                                     </td>                             
                                                     <td>
                                                        <?php if ($_SESSION['level'] == 'admin') :?>
                                                        <a href="#editEmployeeModal" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalubah<?= $no ?>">
                                                        <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <?php endif; ?>

                                                        <?php if ($_SESSION['level'] == 'admin') :?>
                                                        <a href="#deleteEmployeeModal" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalhapus<?= $no ?>">
                                                        <i class="fa fa-trash"></i>
                                                        </a>
                                                        <?php endif; ?>
                                                     </td>                                           
                                                    </tr>
                                                </tbody>      
                                            

                                                        <!-- Awal Modal Ubah -->
                                                        <div class="modal fade" id="modalubah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPRD Kota 1</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <form method="post" action="aksi5.php">
                                                                <input type="hidden" name="id_dprdkota" value="<?= $data['id_dprdkota']?>">
                                                              <div class="modal-body">                        
                                                               <div class="mb-3">
                                                                    <label class="form-label">Kecamatan</label>
                                                                    <select class="form-select" name="kecamatan" >
                                                                        <option value="<?= $data['kecamatan']?>"><?= $data['kecamatan']?></option>
                                                                        <option value="BENGKONG">BENGKONG</option>
                                                                        <option value="BATU AMPAR">BATU AMPAR</option>
                                                                    </select>                                   
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Kelurahan</label>
                                                                    <select class="form-select" name="kelurahan" >
                                                                        <option value="<?= $data['kelurahan']?>"><?= $data['kelurahan']?></option>
                                                                        <option value="BENGKONG INDAH">BENGKONG INDAH</option>
                                                                        <option value="BENGKONG LAUT">BENGKONG LAUT</option>
                                                                        <option value="SADAI">SADAI</option>
                                                                        <option value="TANJUNG BUNTUNG">TANJUNG BUNTUNG</option>
                                                                        <option value="SERAYA">SERAYA</option>
                                                                        <option value="SEI JODOH">SEI JODOH</option>
                                                                        <option value="BATU MERAH">BATU MERAH</option>
                                                                        <option value="TANJUNG SENGKUANG">TANJUNG SENGKUANG</option>
                                                                    </select>                                   
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">TPS</label>
                                                                    <input type="number" class="form-control" name="tps" value="<?= $data['tps']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pemilih Dalam (DPT)</label>
                                                                    <input type="number" class="form-control" name="dpt" value="<?= $data['dpt']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPT)</label>
                                                                    <input type="number" class="form-control" name="p_dpt" value="<?= $data['p_dpt']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPTb)</label>
                                                                    <input type="number" class="form-control" name="p_dptb" value="<?= $data['p_dptb']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPK)</label>
                                                                    <input type="number" class="form-control" name="p_dpk" value="<?= $data['p_dpk']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih</label>
                                                                    <input type="number" class="form-control" name="jp_pemilih" value="<?= $data['jp_pemilih']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Surat Suara Diterima</label>
                                                                    <input type="number" class="form-control" name="surat_suara" value="<?= $data['surat_suara']?>">
                                                                </div>
                                                                <a class="btn btn-warning mb-3">
                                                                  PKB
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. LUKMAN HAKIM</label>
                                                                    <input type="number" class="form-control" name="paslon_1" value="<?= $data['paslon_1']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. NOFRIA ZAMNI</label>
                                                                    <input type="number" class="form-control" name="paslon_2" value="<?= $data['paslon_2']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. INDRA ISPUTRANTO, S.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_3" value="<?= $data['paslon_3']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. MASSIARA ALIAS, S.E.</label>
                                                                    <input type="number" class="form-control" name="paslon_4" value="<?= $data['paslon_4']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. SYARIFAH AINUN NASUTION, Amd. KES</label>
                                                                    <input type="number" class="form-control" name="paslon_5" value="<?= $data['paslon_5']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. SAKIMAN, SE., MM</label>
                                                                    <input type="number" class="form-control" name="paslon_6" value="<?= $data['paslon_6']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. IBRAHIM HADY, S.Pd.I</label>
                                                                    <input type="number" class="form-control" name="paslon_7" value="<?= $data['paslon_7']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  GERINDRA
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. DENI FIRZAN</label>
                                                                    <input type="number" class="form-control" name="paslon_8" value="<?= $data['paslon_8']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. HARMIDI UMAR HUSEN</label>
                                                                    <input type="number" class="form-control" name="paslon_9" value="<?= $data['paslon_9']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. CORNELIA DWIKORA PIETERS,SH</label>
                                                                    <input type="number" class="form-control" name="paslon_10" value="<?= $data['paslon_10']?>">
                                                                </div>                                         

                                                                <div class="mb-3">
                                                                    <label class="form-label">4. SUTARDI,SE</label>
                                                                    <input type="number" class="form-control" name="paslon_11" value="<?= $data['paslon_11']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. SETIA PUTRA TARIGAN</label>
                                                                    <input type="number" class="form-control" name="paslon_12" value="<?= $data['paslon_12']?>">
                                                                </div>                                  

                                                                <div class="mb-3">
                                                                    <label class="form-label">6. DEDE ANGRAINI PUTRI, SM</label>
                                                                    <input type="number" class="form-control" name="paslon_13" value="<?= $data['paslon_13']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. EVI YULINDA</label>
                                                                    <input type="number" class="form-control" name="paslon_14" value="<?= $data['paslon_14']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  PDIP
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. NURYANTO, S.H., M.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_15" value="<?= $data['paslon_15']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. UDIN P. SIHALOHO, S.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_16" value="<?= $data['paslon_16']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. BERNIKE SULASTRI</label>
                                                                    <input type="number" class="form-control" name="paslon_17" value="<?= $data['paslon_17']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. GABRIEL S. A. A. SIANTURI, B.Com.</label>
                                                                    <input type="number" class="form-control" name="paslon_18" value="<?= $data['paslon_18']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. WELLIANA FRANCISKA HUTAGALUNG</label>
                                                                    <input type="number" class="form-control" name="paslon_19" value="<?= $data['paslon_19']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. EPENDI TAN</label>
                                                                    <input type="number" class="form-control" name="paslon_20" value="<?= $data['paslon_20']?>">
                                                                </div>

                                                                
                                                                
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. ASIH SUWITO</label>
                                                                    <input type="number" class="form-control" name="paslon_21" value="<?= $data['paslon_21']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  GOLKAR
                                                                </a> 

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. MUHAMMAD YUNUS MUDA, S.E.</label>
                                                                    <input type="number" class="form-control" name="paslon_22" value="<?= $data['paslon_22']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. ARYA MUSTAKIM MUDA, A.Md.M.</label>
                                                                    <input type="number" class="form-control" name="paslon_23" value="<?= $data['paslon_23']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. D. RABAIYAH PARBA</label>
                                                                    <input type="number" class="form-control" name="paslon_24" value="<?= $data['paslon_24']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. JOHNY</label>
                                                                    <input type="number" class="form-control" name="paslon_25" value="<?= $data['paslon_25']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. AGUSTINUS BARO NAMA</label>
                                                                    <input type="number" class="form-control" name="paslon_26" value="<?= $data['paslon_26']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. DESRAWILIANTASARI</label>
                                                                    <input type="number" class="form-control" name="paslon_27" value="<?= $data['paslon_27']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. RANDY KURNIAWAN, S.H., M.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_28" value="<?= $data['paslon_28']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  NASDEM
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. Hj. ASNAWATI ATIQ, S.E., M.M.</label>
                                                                    <input type="number" class="form-control" name="paslon_29" value="<?= $data['paslon_29']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. WAN EL KENZ, S.Kp., M.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_30" value="<?= $data['paslon_30']?>">
                                                                </div>


                                                                                                    
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. RUSLAN PASOLLE, S.E.</label>
                                                                    <input type="number" class="form-control" name="paslon_31" value="<?= $data['paslon_31']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. RAJA TANTOWI ZAINUDDIN</label>
                                                                    <input type="number" class="form-control" name="paslon_32" value="<?= $data['paslon_32']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. KAMARUDDIN, S.E.</label>
                                                                    <input type="number" class="form-control" name="paslon_33" value="<?= $data['paslon_33']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. IDA KRISMAL</label>
                                                                    <input type="number" class="form-control" name="paslon_34" value="<?= $data['paslon_34']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. RUDIANTO, S.H., M.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_35" value="<?= $data['paslon_35']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  PARTAI BURUH
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. GUSRIL</label>
                                                                    <input type="number" class="form-control" name="paslon_36" value="<?= $data['paslon_36']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. MAS JALI</label>
                                                                    <input type="number" class="form-control" name="paslon_37" value="<?= $data['paslon_37']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. RIMA PUJI ASTUTI</label>
                                                                    <input type="number" class="form-control" name="paslon_38" value="<?= $data['paslon_38']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. BAMBANG SUGIONO, S.T.</label>
                                                                    <input type="number" class="form-control" name="paslon_39" value="<?= $data['paslon_39']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. MASKAYANI</label>
                                                                    <input type="number" class="form-control" name="paslon_40" value="<?= $data['paslon_40']?>">
                                                                </div>

                                                                                                 

                                                                <div class="mb-3">
                                                                    <label class="form-label">6. MUJIHARTO</label>
                                                                    <input type="number" class="form-control" name="paslon_41" value="<?= $data['paslon_41']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  GELORA
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. BHENTAR PRAMANA WIJAYA, SH, M.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_42" value="<?= $data['paslon_42']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. TARMIZI, S.Sos.</label>
                                                                    <input type="number" class="form-control" name="paslon_43" value="<?= $data['paslon_43']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. SHANTY ARYANI</label>
                                                                    <input type="number" class="form-control" name="paslon_44" value="<?= $data['paslon_44']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. ANDI MUCHSIN, S.E.</label>
                                                                    <input type="number" class="form-control" name="paslon_45" value="<?= $data['paslon_45']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. FAHRIZA</label>
                                                                    <input type="number" class="form-control" name="paslon_46" value="<?= $data['paslon_46']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. AYU WINDARI</label>
                                                                    <input type="number" class="form-control" name="paslon_47" value="<?= $data['paslon_47']?>">
                                                                </div>                                          <div class="mb-3">
                                                                    <label class="form-label">7. DEDI HENDRES, A.Md.Kom.</label>
                                                                    <input type="number" class="form-control" name="paslon_48" value="<?= $data['paslon_48']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  PKS
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. SITI NURLAILAH, ST, MT</label>
                                                                    <input type="number" class="form-control" name="paslon_49" value="<?= $data['paslon_49']?>">
                                                                </div>                                          <div class="mb-3">
                                                                    <label class="form-label">2. NASROL</label>
                                                                    <input type="number" class="form-control" name="paslon_50" value="<?= $data['paslon_50']?>">
                                                                </div> 
                                                                                                            
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. SATARIA</label>
                                                                    <input type="number" class="form-control" name="paslon_51" value="<?= $data['paslon_51']?>">
                                                                </div>  
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. ASWAD, S.Sos</label>
                                                                    <input type="number" class="form-control" name="paslon_52" value="<?= $data['paslon_52']?>">
                                                                </div> 
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. AHMAD SOSIAWAN, SE</label>
                                                                    <input type="number" class="form-control" name="paslon_53" value="<?= $data['paslon_53']?>">
                                                                </div>  
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. SITI AMINA</label>
                                                                    <input type="number" class="form-control" name="paslon_54" value="<?= $data['paslon_54']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. RITA YANTI FITRI</label>
                                                                    <input type="number" class="form-control" name="paslon_55" value="<?= $data['paslon_55']?>">
                                                                </div>


                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Suara Sah</label>
                                                                    <input type="number" class="form-control" name="ss" value="<?= $data['ss']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Suara Tidak Sah</label>
                                                                    <input type="number" class="form-control" name="sts" value="<?= $data['sts']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Suara Sah & Tidak Sah</label>
                                                                    <input type="number" class="form-control" name="ss_sts" value="<?= $data['ss_sts']?>">
                                                                </div>                              

                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                
                                                              </div>                              
                                                              </form>                       

                                                            </div>
                                                          </div>
                                                        </div>

                                                        <!-- Akhir Modal Ubah -->

                                                        <!-- Awal Modal hapus -->
                                                        <div class="modal fade" id="modalhapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <form method="post" action="aksi5.php">
                                                                <input type="hidden" name="id_dprdkota" value="<?= $data['id_dprdkota']?>">
                                                              <div class="modal-body">                        
                                                                   
                                                                <h5 class="text-center">Apakah Anda Yakin Akan Menghapus Data Ini ?<br>
                                                                <span class="text-danger"><?= $data['kelurahan']?>-<?= $data['tps']?></span>
                                                                    </h5>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                
                                                              </div>
                                                              </form>

                                                            </div>
                                                          </div>
                                                        </div>

                                                        <!-- Akhir Modal hapus -->
                                                        <?php endwhile;?>  
                                                    
                                            </table>

                                            
                                    </div>                                    
                                </div>       
                            </div>

                                <!-- Awal Modal -->
                                            <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPRD Kota 1</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <form method="post" action="aksi5.php">
                                                  <div class="modal-body">                        
                                                       
                                                    <div class="mb-3">
                                                        <label class="form-label">Kecamatan</label>
                                                        <select class="form-select" name="kecamatan">
                                                            <option value="BENGKONG">BENGKONG</option>
                                                            <option value="BATU AMPAR">BATU AMPAR</option>
                                                        </select>                                   
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kelurahan</label>
                                                        <select class="form-select" name="kelurahan">
                                                            <option></option>
                                                            <option value="BENGKONG INDAH">BENGKONG INDAH</option>
                                                            <option value="BENGKONG LAUT">BENGKONG LAUT</option>
                                                            <option value="SADAI">SADAI</option>
                                                            <option value="TANJUNG BUNTUNG">TANJUNG BUNTUNG</option>
                                                            <option value="SERAYA">SERAYA</option>
                                                            <option value="SEI JODOH">SEI JODOH</option>
                                                            <option value="BATU MERAH">BATU MERAH</option>
                                                            <option value="TANJUNG SENGKUANG">TANJUNG SENGKUANG</option>
                                                        </select>                                   
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">TPS</label>
                                                        <input type="number" class="form-control" name="tps" value="<?= $data['tps']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pemilih Dalam (DPT)</label>
                                                        <input type="number" class="form-control" name="dpt" value="<?= $data['dpt']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPT)</label>
                                                        <input type="number" class="form-control" name="p_dpt" value="<?= $data['p_dpt']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPTb)</label>
                                                        <input type="number" class="form-control" name="p_dptb" value="<?= $data['p_dptb']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPK)</label>
                                                        <input type="number" class="form-control" name="p_dpk" value="<?= $data['p_dpk']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih</label>
                                                        <input type="number" class="form-control" name="jp_pemilih" value="<?= $data['jp_pemilih']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Surat Suara Diterima</label>
                                                        <input type="number" class="form-control" name="surat_suara" value="<?= $data['surat_suara']?>">
                                                    </div>




                                                    <a class="btn btn-warning mb-3">
                                                      PKB
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. LUKMAN HAKIM</label>
                                                        <input type="number" class="form-control" name="paslon_1" value="<?= $data['paslon_1']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. NOFRIA ZAMNI</label>
                                                        <input type="number" class="form-control" name="paslon_2" value="<?= $data['paslon_2']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. INDRA ISPUTRANTO, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_3" value="<?= $data['paslon_3']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. MASSIARA ALIAS, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_4" value="<?= $data['paslon_4']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. SYARIFAH AINUN NASUTION, Amd. KES</label>
                                                        <input type="number" class="form-control" name="paslon_5" value="<?= $data['paslon_5']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. SAKIMAN, SE., MM</label>
                                                        <input type="number" class="form-control" name="paslon_6" value="<?= $data['paslon_6']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. IBRAHIM HADY, S.Pd.I</label>
                                                        <input type="number" class="form-control" name="paslon_7" value="<?= $data['paslon_7']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GERINDRA
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. DENI FIRZAN</label>
                                                        <input type="number" class="form-control" name="paslon_8" value="<?= $data['paslon_8']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. HARMIDI UMAR HUSEN</label>
                                                        <input type="number" class="form-control" name="paslon_9" value="<?= $data['paslon_9']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. CORNELIA DWIKORA PIETERS,SH</label>
                                                        <input type="number" class="form-control" name="paslon_10" value="<?= $data['paslon_10']?>">
                                                    </div>                                         

                                                    <div class="mb-3">
                                                        <label class="form-label">4. SUTARDI,SE</label>
                                                        <input type="number" class="form-control" name="paslon_11" value="<?= $data['paslon_11']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. SETIA PUTRA TARIGAN</label>
                                                        <input type="number" class="form-control" name="paslon_12" value="<?= $data['paslon_12']?>">
                                                    </div>                                  

                                                    <div class="mb-3">
                                                        <label class="form-label">6. DEDE ANGRAINI PUTRI, SM</label>
                                                        <input type="number" class="form-control" name="paslon_13" value="<?= $data['paslon_13']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. EVI YULINDA</label>
                                                        <input type="number" class="form-control" name="paslon_14" value="<?= $data['paslon_14']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PDIP
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. NURYANTO, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_15" value="<?= $data['paslon_15']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. UDIN P. SIHALOHO, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_16" value="<?= $data['paslon_16']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. BERNIKE SULASTRI</label>
                                                        <input type="number" class="form-control" name="paslon_17" value="<?= $data['paslon_17']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. GABRIEL S. A. A. SIANTURI, B.Com.</label>
                                                        <input type="number" class="form-control" name="paslon_18" value="<?= $data['paslon_18']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. WELLIANA FRANCISKA HUTAGALUNG</label>
                                                        <input type="number" class="form-control" name="paslon_19" value="<?= $data['paslon_19']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. EPENDI TAN</label>
                                                        <input type="number" class="form-control" name="paslon_20" value="<?= $data['paslon_20']?>">
                                                    </div>

                                                    
                                                    
                                                    <div class="mb-3">
                                                        <label class="form-label">7. ASIH SUWITO</label>
                                                        <input type="number" class="form-control" name="paslon_21" value="<?= $data['paslon_21']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GOLKAR
                                                    </a> 

                                                    <div class="mb-3">
                                                        <label class="form-label">1. MUHAMMAD YUNUS MUDA, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_22" value="<?= $data['paslon_22']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. ARYA MUSTAKIM MUDA, A.Md.M.</label>
                                                        <input type="number" class="form-control" name="paslon_23" value="<?= $data['paslon_23']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. D. RABAIYAH PARBA</label>
                                                        <input type="number" class="form-control" name="paslon_24" value="<?= $data['paslon_24']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. JOHNY</label>
                                                        <input type="number" class="form-control" name="paslon_25" value="<?= $data['paslon_25']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. AGUSTINUS BARO NAMA</label>
                                                        <input type="number" class="form-control" name="paslon_26" value="<?= $data['paslon_26']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. DESRAWILIANTASARI</label>
                                                        <input type="number" class="form-control" name="paslon_27" value="<?= $data['paslon_27']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. RANDY KURNIAWAN, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_28" value="<?= $data['paslon_28']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      NASDEM
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Hj. ASNAWATI ATIQ, S.E., M.M.</label>
                                                        <input type="number" class="form-control" name="paslon_29" value="<?= $data['paslon_29']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. WAN EL KENZ, S.Kp., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_30" value="<?= $data['paslon_30']?>">
                                                    </div>


                                                                                        

                                                    <div class="mb-3">
                                                        <label class="form-label">3. RUSLAN PASOLLE, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_31" value="<?= $data['paslon_31']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. RAJA TANTOWI ZAINUDDIN</label>
                                                        <input type="number" class="form-control" name="paslon_32" value="<?= $data['paslon_32']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. KAMARUDDIN, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_33" value="<?= $data['paslon_33']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. IDA KRISMAL</label>
                                                        <input type="number" class="form-control" name="paslon_34" value="<?= $data['paslon_34']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. RUDIANTO, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_35" value="<?= $data['paslon_35']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PARTAI BURUH
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. GUSRIL</label>
                                                        <input type="number" class="form-control" name="paslon_36" value="<?= $data['paslon_36']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. MAS JALI</label>
                                                        <input type="number" class="form-control" name="paslon_37" value="<?= $data['paslon_37']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. RIMA PUJI ASTUTI</label>
                                                        <input type="number" class="form-control" name="paslon_38" value="<?= $data['paslon_38']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. BAMBANG SUGIONO, S.T.</label>
                                                        <input type="number" class="form-control" name="paslon_39" value="<?= $data['paslon_39']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. MASKAYANI</label>
                                                        <input type="number" class="form-control" name="paslon_40" value="<?= $data['paslon_40']?>">
                                                    </div>

                                                                                     

                                                    <div class="mb-3">
                                                        <label class="form-label">6. MUJIHARTO</label>
                                                        <input type="number" class="form-control" name="paslon_41" value="<?= $data['paslon_41']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GELORA
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. BHENTAR PRAMANA WIJAYA, SH, M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_42" value="<?= $data['paslon_42']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. TARMIZI, S.Sos.</label>
                                                        <input type="number" class="form-control" name="paslon_43" value="<?= $data['paslon_43']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. SHANTY ARYANI</label>
                                                        <input type="number" class="form-control" name="paslon_44" value="<?= $data['paslon_44']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. ANDI MUCHSIN, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_45" value="<?= $data['paslon_45']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. FAHRIZA</label>
                                                        <input type="number" class="form-control" name="paslon_46" value="<?= $data['paslon_46']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. AYU WINDARI</label>
                                                        <input type="number" class="form-control" name="paslon_47" value="<?= $data['paslon_47']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">7. DEDI HENDRES, A.Md.Kom.</label>
                                                        <input type="number" class="form-control" name="paslon_48" value="<?= $data['paslon_48']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PKS
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. SITI NURLAILAH, ST, MT</label>
                                                        <input type="number" class="form-control" name="paslon_49" value="<?= $data['paslon_49']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">2. NASROL</label>
                                                        <input type="number" class="form-control" name="paslon_50" value="<?= $data['paslon_50']?>">
                                                    </div> 
                                                                                                
                                                    <div class="mb-3">
                                                        <label class="form-label">3. SATARIA</label>
                                                        <input type="number" class="form-control" name="paslon_51" value="<?= $data['paslon_51']?>">
                                                    </div>  
                                                    <div class="mb-3">
                                                        <label class="form-label">4. ASWAD, S.Sos</label>
                                                        <input type="number" class="form-control" name="paslon_52" value="<?= $data['paslon_52']?>">
                                                    </div> 
                                                    <div class="mb-3">
                                                        <label class="form-label">5. AHMAD SOSIAWAN, SE</label>
                                                        <input type="number" class="form-control" name="paslon_53" value="<?= $data['paslon_53']?>">
                                                    </div>  
                                                    <div class="mb-3">
                                                        <label class="form-label">6. SITI AMINA</label>
                                                        <input type="number" class="form-control" name="paslon_54" value="<?= $data['paslon_54']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. RITA YANTI FITRI</label>
                                                        <input type="number" class="form-control" name="paslon_55" value="<?= $data['paslon_55']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">Jumlah Suara Sah</label>
                                                        <input type="number" class="form-control" name="ss" value="<?= $data['ss']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Suara Tidak Sah</label>
                                                        <input type="number" class="form-control" name="sts" value="<?= $data['sts']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Suara Sah & Tidak Sah</label>
                                                        <input type="number" class="form-control" name="ss_sts" value="<?= $data['ss_sts']?>">
                                                    </div>                                                
                                                                    

                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                
                                                  </div>
                                                  </form>

                                                </div>
                                              </div>
                                            </div>

                                            <!-- Akhir Modal -->


                            <div class="card mt-4">
                                <div class="card-header bg-success text-white">
                                    <h4>Calon DPRD Kota 2</h4>
                                </div>                                             
                                <div class="card-body">
                                    <!-- Table Data -->
                                    <div class="table-responsive"> 

                                            

                                            <table id="dt1" class="display nowrap" style="width:100%">
                                                <thead>
                                                  <tr>
                                                  <th class="align-middle"><center>No</center></th>
                                                  <th class="align-middle">Kecamatan</th>
                                                  <th class="align-middle">Kelurahan</th>
                                                  <th class="align-middle">TPS</th>
                                                  <th>Jumlah Pemilih<br>Dalam DPT</th>
                                                  <th>Jumlah Pengguna Hak Pilih<br>Dalam DPT</th>
                                                  <th>Jumlah Pengguna Hak Pilih<br>Dalam DPTb</th>
                                                  <th>Jumlah Pengguna Hak Pilih<br>Dalam DPK</th>
                                                  <th>Jumlah Pengguna<br>Hak Pilih</th>
                                                  <th>Jumlah Surat<br>Suara</th>


                                                  <th class="align-middle"><center>PKN 1</center></th>
                                                  <th class="align-middle"><center>PKN 2</center></th>
                                                  <th class="align-middle"><center>PKN 3</center></th>
                                                  <th class="align-middle"><center>HANURA 1</center></th>
                                                  <th class="align-middle"><center>HANURA 2</center></th>
                                                  <th class="align-middle"><center>HANURA 3</center></th>
                                                  <th class="align-middle"><center>HANURA 4</center></th>
                                                  <th class="align-middle"><center>HANURA 5</center></th>
                                                  <th class="align-middle"><center>HANURA 6</center></th>
                                                  <th class="align-middle"><center>HANURA 7</center></th>                         
                                                  <th class="align-middle"><center>PAN 1</center></th>
                                                  <th class="align-middle"><center>PAN 2</center></th>
                                                  <th class="align-middle"><center>PAN 3</center></th>
                                                  <th class="align-middle"><center>PAN 4</center></th>
                                                  <th class="align-middle"><center>PAN 5</center></th>
                                                  <th class="align-middle"><center>PAN 6</center></th>
                                                  <th class="align-middle"><center>PAN 7</center></th>                    
                                                  <th class="align-middle"><center>PBB 1</center></th>
                                                  <th class="align-middle"><center>DEMOKRAT 1</center></th>
                                                  <th class="align-middle"><center>DEMOKRAT 2</center></th>
                                                  <th class="align-middle"><center>DEMOKRAT 3</center></th>
                                                  <th class="align-middle"><center>DEMOKRAT 4</center></th>
                                                  <th class="align-middle"><center>DEMOKRAT 5</center></th>
                                                  <th class="align-middle"><center>DEMOKRAT 6</center></th>
                                                  <th class="align-middle"><center>DEMOKRAT 7</center></th>                     
                                                  <th class="align-middle"><center>PSI 1</center></th>
                                                  <th class="align-middle"><center>PSI 2</center></th>
                                                  <th class="align-middle"><center>PSI 3</center></th>
                                                  <th class="align-middle"><center>PSI 4</center></th>
                                                  <th class="align-middle"><center>PSI 5</center></th>
                                                  <th class="align-middle"><center>PSI 6</center></th>
                                                  <th class="align-middle"><center>PSI 7</center></th>                        
                                                  <th class="align-middle"><center>PERINDO 1</center></th>
                                                  <th class="align-middle"><center>PERINDO 2</center></th>
                                                  <th class="align-middle"><center>PERINDO 3</center></th>
                                                  <th class="align-middle"><center>PERINDO 4</center></th>                        
                                                  <th class="align-middle"><center>PPP 1</center></th>
                                                  <th class="align-middle"><center>PPP 2</center></th>
                                                  <th class="align-middle"><center>PPP 3</center></th>
                                                  <th class="align-middle"><center>PPP 4</center></th>
                                                  <th class="align-middle"><center>PPP 5</center></th>
                                                  <th class="align-middle"><center>PPP 6</center></th>
                                                  <th class="align-middle"><center>PPP 7</center></th>                      
                                                  <th class="align-middle"><center>UMMAT 1</center></th>
                                                  <th class="align-middle"><center>UMMAT 2</center></th>
                                                  <th class="align-middle"><center>UMMAT 3</center></th>
                                                  <th class="align-middle"><center>UMMAT 4</center></th>
                                                  <th class="align-middle"><center>UMMAT 5</center></th>
                                                  <th class="align-middle"><center>UMMAT 6</center></th>                    
                                                                             
                                                  <th>Jumlah<br>Suara Sah</th>
                                                  <th>Jumlah<br>Suara Tidak Sah</th>
                                                  <th>Jumlah Suara Sah<br>dan Suara Tidak Sah</th>
                                                  
                                                  <th class="align-middle">Aksi</th>
                                                  </tr>
                                                </thead>

                                                <?php
                                                $no = 1;
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_dprd_kota1 ORDER BY id_dprdkota1 DESC");
                                                while ($data =mysqli_fetch_array($tampil)) :
                                                ?>                   
                                              
                                                <tbody>                     

                                                   <tr>
                                                     <td><center>
                                                        <?= $no++ ?>
                                                     </center></td>
                                                     <td>
                                                        <?= $data['kecamatan'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['kelurahan'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['tps'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['dpt'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['p_dpt'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['p_dptb'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['p_dpk'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['jp_pemilih'] ?>
                                                     </td>
                                                     <td>
                                                        <?= $data['surat_suara'] ?>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_101'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_102'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_103'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_104'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_105'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_106'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_107'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_108'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_109'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_110'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_111'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_112'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_113'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_114'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_115'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_116'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_117'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_118'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_119'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_120'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_121'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_122'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_123'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_124'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_125'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_126'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_127'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_128'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_129'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_130'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_131'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_132'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_133'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_134'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_135'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_136'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_137'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_138'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_139'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_140'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_141'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_142'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_143'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_144'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_145'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_146'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_147'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_148'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_149'] ?></center>
                                                     </td>
                                                                                                                  
                                                     <td><center>
                                                        <?= $data['ss'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['sts'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['ss_sts'] ?></center>
                                                     </td>                             
                                                     <td>
                                                        <?php if ($_SESSION['level'] == 'admin') :?>
                                                        <a href="#editEmployeeModal1" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalubah1<?= $no ?>">
                                                        <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <?php endif; ?>

                                                        <?php if ($_SESSION['level'] == 'admin') :?>
                                                        <a href="#deleteEmployeeModal1" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalhapus1<?= $no ?>">
                                                        <i class="fa fa-trash"></i>
                                                        </a>
                                                        <?php endif; ?>
                                                     </td>                                           
                                                    </tr>
                                                </tbody>      
                                            

                                                        <!-- Awal Modal Ubah -->
                                                        <div class="modal fade" id="modalubah1<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPRD Provinsi 2</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <form method="post" action="aksi5.php">
                                                                <input type="hidden" name="id_dprdkota1" value="<?= $data['id_dprdkota1']?>">
                                                              <div class="modal-body">                        
                                                                   
                                                               <div class="mb-3">
                                                                    <label class="form-label">Kecamatan</label>
                                                                    <select class="form-select" name="kecamatan" >
                                                                        <option value="<?= $data['kecamatan']?>"><?= $data['kecamatan']?></option>
                                                                        <option value="BENGKONG">BENGKONG</option>
                                                                        <option value="BATU AMPAR">BATU AMPAR</option>
                                                                    </select>                                   
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Kelurahan</label>
                                                                    <select class="form-select" name="kelurahan" >
                                                                        <option value="<?= $data['kelurahan']?>"><?= $data['kelurahan']?></option>
                                                                        <option value="BENGKONG INDAH">BENGKONG INDAH</option>
                                                                        <option value="BENGKONG LAUT">BENGKONG LAUT</option>
                                                                        <option value="SADAI">SADAI</option>
                                                                        <option value="TANJUNG BUNTUNG">TANJUNG BUNTUNG</option>
                                                                        <option value="SERAYA">SERAYA</option>
                                                                        <option value="SEI JODOH">SEI JODOH</option>
                                                                        <option value="BATU MERAH">BATU MERAH</option>
                                                                        <option value="TANJUNG SENGKUANG">TANJUNG SENGKUANG</option>
                                                                    </select>                                   
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">TPS</label>
                                                                    <input type="number" class="form-control" name="tps" value="<?= $data['tps']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pemilih Dalam (DPT)</label>
                                                                    <input type="number" class="form-control" name="dpt" value="<?= $data['dpt']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPT)</label>
                                                                    <input type="number" class="form-control" name="p_dpt" value="<?= $data['p_dpt']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPTb)</label>
                                                                    <input type="number" class="form-control" name="p_dptb" value="<?= $data['p_dptb']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPK)</label>
                                                                    <input type="number" class="form-control" name="p_dpk" value="<?= $data['p_dpk']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Pengguna Hak Pilih</label>
                                                                    <input type="number" class="form-control" name="jp_pemilih" value="<?= $data['jp_pemilih']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Surat Suara Diterima</label>
                                                                    <input type="number" class="form-control" name="surat_suara" value="<?= $data['surat_suara']?>">
                                                                </div>


                                                                <a class="btn btn-warning mb-3">
                                                                  PKN
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. HELMI RIZAL, S.TP</label>
                                                                    <input type="number" class="form-control" name="paslon_101" value="<?= $data['paslon_101']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. ZAKARIA</label>
                                                                    <input type="number" class="form-control" name="paslon_102" value="<?= $data['paslon_102']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. SUNDARI</label>
                                                                    <input type="number" class="form-control" name="paslon_103" value="<?= $data['paslon_103']?>">
                                                                </div>                                          
                                                                <a class="btn btn-warning mb-3">
                                                                  HANURA
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. Ir .RUBINA SITUMORANG</label>
                                                                    <input type="number" class="form-control" name="paslon_104" value="<?= $data['paslon_104']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. RUSLAN SINAGA</label>
                                                                    <input type="number" class="form-control" name="paslon_105" value="<?= $data['paslon_105']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. ISKANDAR LUXER,SE</label>
                                                                    <input type="number" class="form-control" name="paslon_106" value="<?= $data['paslon_106']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. Dr . SITI VERA NOTARINA</label>
                                                                    <input type="number" class="form-control" name="paslon_107" value="<?= $data['paslon_107']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. SUWITO,S.Pd</label>
                                                                    <input type="number" class="form-control" name="paslon_108" value="<?= $data['paslon_108']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. SILVI WIRA WANGSA</label>
                                                                    <input type="number" class="form-control" name="paslon_109" value="<?= $data['paslon_109']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. IRWAN SINAGA</label>
                                                                    <input type="number" class="form-control" name="paslon_110" value="<?= $data['paslon_110']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  PAN
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. H. SAHRUL</label>
                                                                    <input type="number" class="form-control" name="paslon_111" value="<?= $data['paslon_111']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. MUHAMMAD PAISAL OLA, S. Sos</label>
                                                                    <input type="number" class="form-control" name="paslon_112" value="<?= $data['paslon_112']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. DEWI ELLYANA</label>
                                                                    <input type="number" class="form-control" name="paslon_113" value="<?= $data['paslon_113']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. MUHAMMAD HAKIM, S.T</label>
                                                                    <input type="number" class="form-control" name="paslon_114" value="<?= $data['paslon_114']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. SARIPUDIN</label>
                                                                    <input type="number" class="form-control" name="paslon_115" value="<?= $data['paslon_115']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. SETIAWATI</label>
                                                                    <input type="number" class="form-control" name="paslon_116" value="<?= $data['paslon_116']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. H. JUMAKIR, S. Pd. I</label>
                                                                    <input type="number" class="form-control" name="paslon_117" value="<?= $data['paslon_117']?>">
                                                                </div>  

                                                                <a class="btn btn-warning mb-3">
                                                                  PBB
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. AYANG IZAI</label>
                                                                    <input type="number" class="form-control" name="paslon_118" value="<?= $data['paslon_118']?>">
                                                                </div>    

                                                                <a class="btn btn-warning mb-3">
                                                                  DEMOKRAT
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. EZA PENDRI, S.Kom</label>
                                                                    <input type="number" class="form-control" name="paslon_119" value="<?= $data['paslon_119']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. SYAHRELAWATI</label>
                                                                    <input type="number" class="form-control" name="paslon_120" value="<?= $data['paslon_120']?>">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">3. YOHANES DORIS ATAWOLLO</label>
                                                                    <input type="number" class="form-control" name="paslon_121" value="<?= $data['paslon_121']?>">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">4. HADIS HAMZAH</label>
                                                                    <input type="number" class="form-control" name="paslon_122" value="<?= $data['paslon_122']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. RAFIDA RAFIQ</label>
                                                                    <input type="number" class="form-control" name="paslon_123" value="<?= $data['paslon_123']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. RUSMANTO</label>
                                                                    <input type="number" class="form-control" name="paslon_124" value="<?= $data['paslon_124']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. BAYU SEGARA HOKI</label>
                                                                    <input type="number" class="form-control" name="paslon_125" value="<?= $data['paslon_125']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                  PSI
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. GRACE ELIZABETH SARTIKA ZEBUA, S.H</label>
                                                                    <input type="number" class="form-control" name="paslon_126" value="<?= $data['paslon_126']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. FERRY H. PANDIANGAN</label>
                                                                    <input type="number" class="form-control" name="paslon_127" value="<?= $data['paslon_127']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. SUMARDI HALIM TEDJA</label>
                                                                    <input type="number" class="form-control" name="paslon_128" value="<?= $data['paslon_128']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. IVONNY CHRISTINA HUTABARAT</label>
                                                                    <input type="number" class="form-control" name="paslon_129" value="<?= $data['paslon_129']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. FERRY SARAGI</label>
                                                                    <input type="number" class="form-control" name="paslon_130" value="<?= $data['paslon_130']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. BUDIONO</label>
                                                                    <input type="number" class="form-control" name="paslon_131" value="<?= $data['paslon_131']?>">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">7. FERIANTO MULIONO</label>
                                                                    <input type="number" class="form-control" name="paslon_132" value="<?= $data['paslon_132']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                    PERINDO
                                                                </a>


                                                                <div class="mb-3">
                                                                    <label class="form-label">1. DENNY BOY TAMPUBOLON, A.Md</label>
                                                                    <input type="number" class="form-control" name="paslon_133" value="<?= $data['paslon_133']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. NOWITA WATI, S.Kom.</label>
                                                                    <input type="number" class="form-control" name="paslon_134" value="<?= $data['paslon_134']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. ALBERT FRANCIUS NAINGGOLAN</label>
                                                                    <input type="number" class="form-control" name="paslon_135" value="<?= $data['paslon_135']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. NIKOLAUS ANGGA</label>
                                                                    <input type="number" class="form-control" name="paslon_136" value="<?= $data['paslon_136']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                    PPP
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. ROY MULANA RIZKY</label>
                                                                    <input type="number" class="form-control" name="paslon_137" value="<?= $data['paslon_137']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. Dr. IDAWATI NURSANTI</label>
                                                                    <input type="number" class="form-control" name="paslon_138" value="<?= $data['paslon_138']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. OKTA ROBIN</label>
                                                                    <input type="number" class="form-control" name="paslon_139" value="<?= $data['paslon_139']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. ILHAM</label>
                                                                    <input type="number" class="form-control" name="paslon_140" value="<?= $data['paslon_140']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. HARYANTO,S.PD.MH</label>
                                                                    <input type="number" class="form-control" name="paslon_141" value="<?= $data['paslon_141']?>">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">6. ERNA MARDAYENI</label>
                                                                    <input type="number" class="form-control" name="paslon_142" value="<?= $data['paslon_142']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. M. ARFAH</label>
                                                                    <input type="number" class="form-control" name="paslon_143" value="<?= $data['paslon_143']?>">
                                                                </div>

                                                                <a class="btn btn-warning mb-3">
                                                                    PARTAI UMMAT
                                                                </a>

                                                                <div class="mb-3">
                                                                    <label class="form-label">1. IRA CIMI</label>
                                                                    <input type="number" class="form-control" name="paslon_144" value="<?= $data['paslon_144']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. ZUL FAHMI NATSIR</label>
                                                                    <input type="number" class="form-control" name="paslon_145" value="<?= $data['paslon_145']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. MUSLIMIN BIN MUHAMMAD IDRIS</label>
                                                                    <input type="number" class="form-control" name="paslon_146" value="<?= $data['paslon_146']?>">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">4. SYAFRINALDIS.E.</label>
                                                                    <input type="number" class="form-control" name="paslon_147" value="<?= $data['paslon_147']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. RAHMAD BULYAN</label>
                                                                    <input type="number" class="form-control" name="paslon_148" value="<?= $data['paslon_148']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. SUNARTI</label>
                                                                    <input type="number" class="form-control" name="paslon_149" value="<?= $data['paslon_149']?>">
                                                                </div>

                                                                
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Suara Sah</label>
                                                                    <input type="number" class="form-control" name="ss" value="<?= $data['ss']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Suara Tidak Sah</label>
                                                                    <input type="number" class="form-control" name="sts" value="<?= $data['sts']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Jumlah Suara Sah & Tidak Sah</label>
                                                                    <input type="number" class="form-control" name="ss_sts" value="<?= $data['ss_sts']?>">
                                                                </div>                              

                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary" name="bubah1">Ubah</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                
                                                              </div>                              
                                                              </form>                       

                                                            </div>
                                                          </div>
                                                        </div>

                                                        <!-- Akhir Modal Ubah -->

                                                        <!-- Awal Modal hapus -->
                                                        <div class="modal fade" id="modalhapus1<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <form method="post" action="aksi5.php">
                                                                <input type="hidden" name="id_dprdkota1" value="<?= $data['id_dprdkota1']?>">
                                                              <div class="modal-body">                        
                                                                   
                                                                <h5 class="text-center">Apakah Anda Yakin Akan Menghapus Data Ini ?<br>
                                                                <span class="text-danger"><?= $data['kelurahan']?>-<?= $data['tps']?></span>
                                                                    </h5>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary" name="bhapus1">Hapus</button>
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                
                                                              </div>
                                                              </form>

                                                            </div>
                                                          </div>
                                                        </div>

                                                        <!-- Akhir Modal hapus -->
                                                        <?php endwhile;?>  
                                                    
                                            </table>

                                            
                                    </div>                                    
                                </div>       
                            </div>

                                <!-- Awal Modal -->
                                            <div class="modal fade" id="modaltambah1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPRD Provinsi 2</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <form method="post" action="aksi5.php">
                                                  <div class="modal-body">                        
                                                       
                                               <div class="mb-3">
                                                        <label class="form-label">Kecamatan</label>
                                                        <select class="form-select" name="kecamatan">
                                                            <option value="BENGKONG">BENGKONG</option>
                                                            <option value="BATU AMPAR">BATU AMPAR</option>
                                                        </select>                                   
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Kelurahan</label>
                                                        <select class="form-select" name="kelurahan">
                                                            <option></option>
                                                            <option value="BENGKONG INDAH">BENGKONG INDAH</option>
                                                            <option value="BENGKONG LAUT">BENGKONG LAUT</option>
                                                            <option value="SADAI">SADAI</option>
                                                            <option value="TANJUNG BUNTUNG">TANJUNG BUNTUNG</option>
                                                            <option value="SERAYA">SERAYA</option>
                                                            <option value="SEI JODOH">SEI JODOH</option>
                                                            <option value="BATU MERAH">BATU MERAH</option>
                                                            <option value="TANJUNG SENGKUANG">TANJUNG SENGKUANG</option>
                                                        </select>                                   
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">TPS</label>
                                                        <input type="number" class="form-control" name="tps" value="<?= $data['tps']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pemilih Dalam (DPT)</label>
                                                        <input type="number" class="form-control" name="dpt" value="<?= $data['dpt']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPT)</label>
                                                        <input type="number" class="form-control" name="p_dpt" value="<?= $data['p_dpt']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPTb)</label>
                                                        <input type="number" class="form-control" name="p_dptb" value="<?= $data['p_dptb']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih Dalam (DPK)</label>
                                                        <input type="number" class="form-control" name="p_dpk" value="<?= $data['p_dpk']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Pengguna Hak Pilih</label>
                                                        <input type="number" class="form-control" name="jp_pemilih" value="<?= $data['jp_pemilih']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Surat Suara Diterima</label>
                                                        <input type="number" class="form-control" name="surat_suara" value="<?= $data['surat_suara']?>">
                                                    </div>


                                                    <a class="btn btn-warning mb-3">
                                                      PKN
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. HELMI RIZAL, S.TP</label>
                                                        <input type="number" class="form-control" name="paslon_101" value="<?= $data['paslon_101']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. ZAKARIA</label>
                                                        <input type="number" class="form-control" name="paslon_102" value="<?= $data['paslon_102']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. SUNDARI</label>
                                                        <input type="number" class="form-control" name="paslon_103" value="<?= $data['paslon_103']?>">
                                                    </div>                                          <a class="btn btn-warning mb-3">
                                                      HANURA
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Ir .RUBINA SITUMORANG</label>
                                                        <input type="number" class="form-control" name="paslon_104" value="<?= $data['paslon_104']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. RUSLAN SINAGA</label>
                                                        <input type="number" class="form-control" name="paslon_105" value="<?= $data['paslon_105']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. ISKANDAR LUXER,SE</label>
                                                        <input type="number" class="form-control" name="paslon_106" value="<?= $data['paslon_106']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Dr . SITI VERA NOTARINA</label>
                                                        <input type="number" class="form-control" name="paslon_107" value="<?= $data['paslon_107']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. SUWITO,S.Pd</label>
                                                        <input type="number" class="form-control" name="paslon_108" value="<?= $data['paslon_108']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. SILVI WIRA WANGSA</label>
                                                        <input type="number" class="form-control" name="paslon_109" value="<?= $data['paslon_109']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. IRWAN SINAGA</label>
                                                        <input type="number" class="form-control" name="paslon_110" value="<?= $data['paslon_110']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PAN
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. H. SAHRUL</label>
                                                        <input type="number" class="form-control" name="paslon_111" value="<?= $data['paslon_111']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. MUHAMMAD PAISAL OLA, S. Sos</label>
                                                        <input type="number" class="form-control" name="paslon_112" value="<?= $data['paslon_112']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. DEWI ELLYANA</label>
                                                        <input type="number" class="form-control" name="paslon_113" value="<?= $data['paslon_113']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. MUHAMMAD HAKIM, S.T</label>
                                                        <input type="number" class="form-control" name="paslon_114" value="<?= $data['paslon_114']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. SARIPUDIN</label>
                                                        <input type="number" class="form-control" name="paslon_115" value="<?= $data['paslon_115']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. SETIAWATI</label>
                                                        <input type="number" class="form-control" name="paslon_116" value="<?= $data['paslon_116']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. H. JUMAKIR, S. Pd. I</label>
                                                        <input type="number" class="form-control" name="paslon_117" value="<?= $data['paslon_117']?>">
                                                    </div>  

                                                    <a class="btn btn-warning mb-3">
                                                      PBB
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. AYANG IZAI</label>
                                                        <input type="number" class="form-control" name="paslon_118" value="<?= $data['paslon_118']?>">
                                                    </div>    

                                                    <a class="btn btn-warning mb-3">
                                                      DEMOKRAT
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. EZA PENDRI, S.Kom</label>
                                                        <input type="number" class="form-control" name="paslon_119" value="<?= $data['paslon_119']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. SYAHRELAWATI</label>
                                                        <input type="number" class="form-control" name="paslon_120" value="<?= $data['paslon_120']?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">3. YOHANES DORIS ATAWOLLO</label>
                                                        <input type="number" class="form-control" name="paslon_121" value="<?= $data['paslon_121']?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">4. HADIS HAMZAH</label>
                                                        <input type="number" class="form-control" name="paslon_122" value="<?= $data['paslon_122']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. RAFIDA RAFIQ</label>
                                                        <input type="number" class="form-control" name="paslon_123" value="<?= $data['paslon_123']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. RUSMANTO</label>
                                                        <input type="number" class="form-control" name="paslon_124" value="<?= $data['paslon_124']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. BAYU SEGARA HOKI</label>
                                                        <input type="number" class="form-control" name="paslon_125" value="<?= $data['paslon_125']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PSI
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. GRACE ELIZABETH SARTIKA ZEBUA, S.H</label>
                                                        <input type="number" class="form-control" name="paslon_126" value="<?= $data['paslon_126']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. FERRY H. PANDIANGAN</label>
                                                        <input type="number" class="form-control" name="paslon_127" value="<?= $data['paslon_127']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. SUMARDI HALIM TEDJA</label>
                                                        <input type="number" class="form-control" name="paslon_128" value="<?= $data['paslon_128']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. IVONNY CHRISTINA HUTABARAT</label>
                                                        <input type="number" class="form-control" name="paslon_129" value="<?= $data['paslon_129']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. FERRY SARAGI</label>
                                                        <input type="number" class="form-control" name="paslon_130" value="<?= $data['paslon_130']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. BUDIONO</label>
                                                        <input type="number" class="form-control" name="paslon_131" value="<?= $data['paslon_131']?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">7. FERIANTO MULIONO</label>
                                                        <input type="number" class="form-control" name="paslon_132" value="<?= $data['paslon_132']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                        PERINDO
                                                    </a>


                                                    <div class="mb-3">
                                                        <label class="form-label">1. DENNY BOY TAMPUBOLON, A.Md</label>
                                                        <input type="number" class="form-control" name="paslon_133" value="<?= $data['paslon_133']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. NOWITA WATI, S.Kom.</label>
                                                        <input type="number" class="form-control" name="paslon_134" value="<?= $data['paslon_134']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. ALBERT FRANCIUS NAINGGOLAN</label>
                                                        <input type="number" class="form-control" name="paslon_135" value="<?= $data['paslon_135']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. NIKOLAUS ANGGA</label>
                                                        <input type="number" class="form-control" name="paslon_136" value="<?= $data['paslon_136']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                        PPP
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. ROY MULANA RIZKY</label>
                                                        <input type="number" class="form-control" name="paslon_137" value="<?= $data['paslon_137']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Dr. IDAWATI NURSANTI</label>
                                                        <input type="number" class="form-control" name="paslon_138" value="<?= $data['paslon_138']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. OKTA ROBIN</label>
                                                        <input type="number" class="form-control" name="paslon_139" value="<?= $data['paslon_139']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. ILHAM</label>
                                                        <input type="number" class="form-control" name="paslon_140" value="<?= $data['paslon_140']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. HARYANTO,S.PD.MH</label>
                                                        <input type="number" class="form-control" name="paslon_141" value="<?= $data['paslon_141']?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">6. ERNA MARDAYENI</label>
                                                        <input type="number" class="form-control" name="paslon_142" value="<?= $data['paslon_142']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. M. ARFAH</label>
                                                        <input type="number" class="form-control" name="paslon_143" value="<?= $data['paslon_143']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                        PARTAI UMMAT
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. IRA CIMI</label>
                                                        <input type="number" class="form-control" name="paslon_144" value="<?= $data['paslon_144']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. ZUL FAHMI NATSIR</label>
                                                        <input type="number" class="form-control" name="paslon_145" value="<?= $data['paslon_145']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. MUSLIMIN BIN MUHAMMAD IDRIS</label>
                                                        <input type="number" class="form-control" name="paslon_146" value="<?= $data['paslon_146']?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">4. SYAFRINALDIS.E.</label>
                                                        <input type="number" class="form-control" name="paslon_147" value="<?= $data['paslon_147']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. RAHMAD BULYAN</label>
                                                        <input type="number" class="form-control" name="paslon_148" value="<?= $data['paslon_148']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. SUNARTI</label>
                                                        <input type="number" class="form-control" name="paslon_149" value="<?= $data['paslon_149']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Suara Sah</label>
                                                        <input type="number" class="form-control" name="ss" value="<?= $data['ss']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Suara Tidak Sah</label>
                                                        <input type="number" class="form-control" name="sts" value="<?= $data['sts']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jumlah Suara Sah & Tidak Sah</label>
                                                        <input type="number" class="form-control" name="ss_sts" value="<?= $data['ss_sts']?>">
                                                    </div>
                                                                    

                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="bsimpan1">Simpan</button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                
                                                  </div>
                                                  </form>

                                                </div>
                                              </div>
                                            </div>

                                            <!-- Akhir Modal -->           
                            
                                                                   
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


        <script >    
        $(document).ready(function() {
            $('#dt1').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
        </script>

    </body>
</html>


