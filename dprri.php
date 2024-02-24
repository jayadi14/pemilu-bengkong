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

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah">
                                              Tambah Data
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
                                                  <th class="align-middle">1</th>
                                                  <th class="align-middle">2</th>
                                                  <th class="align-middle">3</th>
                                                  <th class="align-middle">4</th>
                                                  <th class="align-middle">5</th>
                                                  <th class="align-middle">6</th>
                                                  <th class="align-middle">7</th>
                                                  <th class="align-middle">8</th>
                                                  <th class="align-middle">9</th>
                                                  <th class="align-middle">10</th>
                                                  <th class="align-middle">11</th>
                                                  <th class="align-middle">12</th>
                                                  <th class="align-middle">13</th>
                                                  <th class="align-middle">14</th>
                                                  <th class="align-middle">15</th>
                                                  <th class="align-middle">16</th>
                                                  <th class="align-middle">17</th>
                                                  <th class="align-middle">18</th>
                                                  <th class="align-middle">19</th>
                                                  <th class="align-middle">20</th>
                                                  <th class="align-middle">21</th>
                                                  <th class="align-middle">22</th>
                                                  <th class="align-middle">23</th>
                                                  <th class="align-middle">24</th>
                                                  <th class="align-middle">25</th>
                                                  <th class="align-middle">26</th>
                                                  <th class="align-middle">27</th>
                                                  <th class="align-middle">28</th>
                                                  <th class="align-middle">29</th>
                                                  <th class="align-middle">30</th>
                                                  <th class="align-middle">31</th>
                                                  <th class="align-middle">32</th>
                                                  <th class="align-middle">33</th>
                                                  <th class="align-middle">34</th>
                                                  <th class="align-middle">35</th>
                                                  <th class="align-middle">36</th>
                                                  <th class="align-middle">37</th>
                                                  <th class="align-middle">38</th>
                                                  <th class="align-middle">39</th>
                                                  <th class="align-middle">40</th>
                                                  <th class="align-middle">41</th>
                                                  <th class="align-middle">42</th>
                                                  <th class="align-middle">43</th>
                                                  <th class="align-middle">44</th>
                                                  <th class="align-middle">45</th>
                                                  <th class="align-middle">46</th>
                                                  <th class="align-middle">47</th>
                                                  <th class="align-middle">48</th>
                                                  <th class="align-middle">49</th>
                                                  <th class="align-middle">50</th>
                                                  <th class="align-middle">51</th>
                                                  <th class="align-middle">52</th>
                                                  <th class="align-middle">53</th>
                                                  <th class="align-middle">54</th>
                                                  <th class="align-middle">55</th>
                                                  <th class="align-middle">56</th>
                                                  <th class="align-middle">57</th>
                                                  <th class="align-middle">58</th>
                                                  <th class="align-middle">59</th>
                                                  <th class="align-middle">60</th>
                                                  <th class="align-middle">61</th>
                                                  <th class="align-middle">62</th>
                                                  <th class="align-middle">63</th>
                                                  <th class="align-middle">64</th>
                                                  <th class="align-middle">65</th>
                                                  <th class="align-middle">66</th>             
                                                  <th>Jumlah<br>Suara Sah</th>
                                                  <th>Jumlah<br>Suara Tidak Sah</th>
                                                  <th>Jumlah Suara Sah<br>dan Suara Tidak Sah</th>
                                                  
                                                  <th class="align-middle">Aksi</th>
                                                  </tr>
                                                </thead>

                                                <?php
                                                $no = 1;
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_dpr_ri ORDER BY id_dprri DESC");
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
                                                        <?= $data['paslon_56'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_57'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_58'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_59'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_60'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_61'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_62'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_63'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_64'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_65'] ?></center>
                                                     </td>
                                                     <td><center>
                                                        <?= $data['paslon_66'] ?></center>
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
                                                                <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPR RI</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <form method="post" action="aksi3.php">
                                                                <input type="hidden" name="id_dprri" value="<?= $data['id_dprri']?>">
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
                                                        <label class="form-label">1. H. Isdianto, S.Sos., M.M</label>
                                                        <input type="number" class="form-control" name="paslon_1" value="<?= $data['paslon_1']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. H. Huzrin Hood, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_2" value="<?= $data['paslon_2']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Dewi Niya Boneta</label>
                                                        <input type="number" class="form-control" name="paslon_3" value="<?= $data['paslon_3']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Rocky Marciano Bawole, S.Sos.</label>
                                                        <input type="number" class="form-control" name="paslon_4" value="<?= $data['paslon_4']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GERINDRA
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Ir. H. M. Endipat Wijaya, M.M.</label>
                                                        <input type="number" class="form-control" name="paslon_5" value="<?= $data['paslon_5']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Sri Rezeki, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_6" value="<?= $data['paslon_6']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Andy Anhar Chalid</label>
                                                        <input type="number" class="form-control" name="paslon_7" value="<?= $data['paslon_7']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Usep Rahmat S</label>
                                                        <input type="number" class="form-control" name="paslon_8" value="<?= $data['paslon_8']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PDIP
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Dr. H. M. Soerya Respationo, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_9" value="<?= $data['paslon_9']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Mayjen. TNI (Purn.) Sturman Panjaitan, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_10" value="<?= $data['paslon_10']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Ernawati</label>
                                                        <input type="number" class="form-control" name="paslon_11" value="<?= $data['paslon_11']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. T.H. Sinambela, S.I.P.</label>
                                                        <input type="number" class="form-control" name="paslon_12" value="<?= $data['paslon_12']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GOLKAR
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Rizki Faisal</label>
                                                        <input type="number" class="form-control" name="paslon_13" value="<?= $data['paslon_13']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Cen Sui Lan</label>
                                                        <input type="number" class="form-control" name="paslon_14" value="<?= $data['paslon_14']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Angganeta Radjawane, S.I.P.</label>
                                                        <input type="number" class="form-control" name="paslon_15" value="<?= $data['paslon_15']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Petrus Selestinus, S.H</label>
                                                        <input type="number" class="form-control" name="paslon_16" value="<?= $data['paslon_16']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      NASDEM
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Drs.H. Nyat Kadir</label>
                                                        <input type="number" class="form-control" name="paslon_17" value="<?= $data['paslon_17']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Randi Zulmariadi, S.M.</label>
                                                        <input type="number" class="form-control" name="paslon_18" value="<?= $data['paslon_18']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Selly Febrilia Mayora, S.Tr.Akun.</label>
                                                        <input type="number" class="form-control" name="paslon_19" value="<?= $data['paslon_19']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Pietra Machreza Paloh</label>
                                                        <input type="number" class="form-control" name="paslon_20" value="<?= $data['paslon_20']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PARTAI BURUH
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Nefrizal, S.T</label>
                                                        <input type="number" class="form-control" name="paslon_21" value="<?= $data['paslon_21']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Wahyu Dianasari</label>
                                                        <input type="number" class="form-control" name="paslon_22" value="<?= $data['paslon_22']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Suhari</label>
                                                        <input type="number" class="form-control" name="paslon_23" value="<?= $data['paslon_23']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Wawan Triyanto</label>
                                                        <input type="number" class="form-control" name="paslon_24" value="<?= $data['paslon_24']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GELORA
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Abdul Rahman</label>
                                                        <input type="number" class="form-control" name="paslon_25" value="<?= $data['paslon_25']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Riana Simatupang</label>
                                                        <input type="number" class="form-control" name="paslon_26" value="<?= $data['paslon_26']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PKS
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Suryani, S.E., M.I.Kom.</label>
                                                        <input type="number" class="form-control" name="paslon_27" value="<?= $data['paslon_27']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Dr. H. Irfan Aulia, M.Psi.</label>
                                                        <input type="number" class="form-control" name="paslon_28" value="<?= $data['paslon_28']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Cinthiara Yunisa</label>
                                                        <input type="number" class="form-control" name="paslon_29" value="<?= $data['paslon_29']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Amri, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_30" value="<?= $data['paslon_30']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PKN
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Winarti</label>
                                                        <input type="number" class="form-control" name="paslon_31" value="<?= $data['paslon_31']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Said Baswidan, S.E., M.Si.</label>
                                                        <input type="number" class="form-control" name="paslon_32" value="<?= $data['paslon_32']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Kwandaruwikan Sri Harto</label>
                                                        <input type="number" class="form-control" name="paslon_33" value="<?= $data['paslon_33']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      HANURA
                                                    </a>
                                                    <div class="mb-3">
                                                        <label class="form-label">1. Irjen. Pol. (Purn.) Drs. Yotje Mende, M.Hum.</label>
                                                        <input type="number" class="form-control" name="paslon_34" value="<?= $data['paslon_34']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Salmah Hani</label>
                                                        <input type="number" class="form-control" name="paslon_35" value="<?= $data['paslon_35']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GARUDA
                                                    </a>
                                                    <div class="mb-3">
                                                        <label class="form-label">1. Guntur Gumilang</label>
                                                        <input type="number" class="form-control" name="paslon_36" value="<?= $data['paslon_36']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Arya Zikri</label>
                                                        <input type="number" class="form-control" name="paslon_37" value="<?= $data['paslon_37']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Mauli Hafizoh</label>
                                                        <input type="number" class="form-control" name="paslon_38" value="<?= $data['paslon_38']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Dhanial Herly Hartono</label>
                                                        <input type="number" class="form-control" name="paslon_39" value="<?= $data['paslon_39']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PAN
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Dr. Asman Abnur, S.E., M.Si.</label>
                                                        <input type="number" class="form-control" name="paslon_40" value="<?= $data['paslon_40']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Derry Purnamasari</label>
                                                        <input type="number" class="form-control" name="paslon_41" value="<?= $data['paslon_41']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Alex Guspeneldi, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_42" value="<?= $data['paslon_42']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Desi Hanafia, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_43" value="<?= $data['paslon_43']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PBB
                                                    </a>
                                                    <div class="mb-3">
                                                        <label class="form-label">1. Agus Salim</label>
                                                        <input type="number" class="form-control" name="paslon_44" value="<?= $data['paslon_44']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">2. Darmawati</label>
                                                        <input type="number" class="form-control" name="paslon_45" value="<?= $data['paslon_45']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Amir Asmadi,S.Pd.I.</label>
                                                        <input type="number" class="form-control" name="paslon_46" value="<?= $data['paslon_46']?>">
                                                    </div>

                                                     <a class="btn btn-warning mb-3">
                                                    DEMOKRAT
                                                    </a>      
                                                   <div class="mb-3">
                                                        <label class="form-label">1. Aneng</label>
                                                        <input type="number" class="form-control" name="paslon_47" value="<?= $data['paslon_47']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">2. Agus Wibowo</label>
                                                        <input type="number" class="form-control" name="paslon_48" value="<?= $data['paslon_48']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Rudang Ckristy Meliala, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_49" value="<?= $data['paslon_49']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">4. Ir. Mustofa Widjaja</label>
                                                        <input type="number" class="form-control" name="paslon_50" value="<?= $data['paslon_50']?>">
                                                    </div>   

                                                    <a class="btn btn-warning mb-3">
                                                    PSI
                                                    </a> 

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Harun Pandapotan</label>
                                                        <input type="number" class="form-control" name="paslon_51" value="<?= $data['paslon_51']?>">
                                                    </div>  
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Rudy Widjaja</label>
                                                        <input type="number" class="form-control" name="paslon_52" value="<?= $data['paslon_52']?>">
                                                    </div> 
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Livi Agustri Br Milala, S.H</label>
                                                        <input type="number" class="form-control" name="paslon_53" value="<?= $data['paslon_53']?>">
                                                    </div>  
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Dewi Rosita</label>
                                                        <input type="number" class="form-control" name="paslon_54" value="<?= $data['paslon_54']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                    PERINDO
                                                    </a>  

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Alias Wello, S.I.P., M.Tr.I.P.</label>
                                                        <input type="number" class="form-control" name="paslon_55" value="<?= $data['paslon_55']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">2. Soraya Djajakusuma</label>
                                                        <input type="number" class="form-control" name="paslon_56" value="<?= $data['paslon_56']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">3. Greos Sumartana Saragih, S.P., M.M</label>
                                                        <input type="number" class="form-control" name="paslon_57" value="<?= $data['paslon_57']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">4. Wina Zahra Ayu</label>
                                                        <input type="number" class="form-control" name="paslon_58" value="<?= $data['paslon_58']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                    PPP
                                                    </a>  

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Andy Sulistio Susanto</label>
                                                        <input type="number" class="form-control" name="paslon_59" value="<?= $data['paslon_59']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Sri Herlina, S.P.</label>
                                                        <input type="number" class="form-control" name="paslon_60" value="<?= $data['paslon_60']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Nanda Yura Putra</label>
                                                        <input type="number" class="form-control" name="paslon_61" value="<?= $data['paslon_61']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Emrawati</label>
                                                        <input type="number" class="form-control" name="paslon_62" value="<?= $data['paslon_62']?>">
                                                    </div>                                          <a class="btn btn-warning mb-3">
                                                    PARTAI UMMAT
                                                    </a>                                          <div class="mb-3">
                                                        <label class="form-label">1. Azhari, S.T., M.Eng.</label>
                                                        <input type="number" class="form-control" name="paslon_63" value="<?= $data['paslon_63']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. H. Kamaruddin,S.Pd., M.M., M.Si.</label>
                                                        <input type="number" class="form-control" name="paslon_64" value="<?= $data['paslon_64']?>">
                                                    </div>                                   
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Eka Anita Diana, S.Pd.I</label>
                                                        <input type="number" class="form-control" name="paslon_65" value="<?= $data['paslon_65']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Rina Susanti.</label>
                                                        <input type="number" class="form-control" name="paslon_66" value="<?= $data['paslon_66']?>">
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
                                                              <form method="post" action="aksi3.php">
                                                                <input type="hidden" name="id_dprri" value="<?= $data['id_dprri']?>">
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
                                                    <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPR RI</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <form method="post" action="aksi3.php">
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
                                                        <label class="form-label">1. H. Isdianto, S.Sos., M.M</label>
                                                        <input type="number" class="form-control" name="paslon_1" value="<?= $data['paslon_1']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. H. Huzrin Hood, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_2" value="<?= $data['paslon_2']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Dewi Niya Boneta</label>
                                                        <input type="number" class="form-control" name="paslon_3" value="<?= $data['paslon_3']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Rocky Marciano Bawole, S.Sos.</label>
                                                        <input type="number" class="form-control" name="paslon_4" value="<?= $data['paslon_4']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GERINDRA
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Ir. H. M. Endipat Wijaya, M.M.</label>
                                                        <input type="number" class="form-control" name="paslon_5" value="<?= $data['paslon_5']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Sri Rezeki, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_6" value="<?= $data['paslon_6']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Andy Anhar Chalid</label>
                                                        <input type="number" class="form-control" name="paslon_7" value="<?= $data['paslon_7']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Usep Rahmat S</label>
                                                        <input type="number" class="form-control" name="paslon_8" value="<?= $data['paslon_8']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PDIP
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Dr. H. M. Soerya Respationo, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_9" value="<?= $data['paslon_9']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Mayjen. TNI (Purn.) Sturman Panjaitan, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_10" value="<?= $data['paslon_10']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Ernawati</label>
                                                        <input type="number" class="form-control" name="paslon_11" value="<?= $data['paslon_11']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. T.H. Sinambela, S.I.P.</label>
                                                        <input type="number" class="form-control" name="paslon_12" value="<?= $data['paslon_12']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GOLKAR
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Rizki Faisal</label>
                                                        <input type="number" class="form-control" name="paslon_13" value="<?= $data['paslon_13']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Cen Sui Lan</label>
                                                        <input type="number" class="form-control" name="paslon_14" value="<?= $data['paslon_14']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Angganeta Radjawane, S.I.P.</label>
                                                        <input type="number" class="form-control" name="paslon_15" value="<?= $data['paslon_15']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Petrus Selestinus, S.H</label>
                                                        <input type="number" class="form-control" name="paslon_16" value="<?= $data['paslon_16']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      NASDEM
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Drs.H. Nyat Kadir</label>
                                                        <input type="number" class="form-control" name="paslon_17" value="<?= $data['paslon_17']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Randi Zulmariadi, S.M.</label>
                                                        <input type="number" class="form-control" name="paslon_18" value="<?= $data['paslon_18']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Selly Febrilia Mayora, S.Tr.Akun.</label>
                                                        <input type="number" class="form-control" name="paslon_19" value="<?= $data['paslon_19']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Pietra Machreza Paloh</label>
                                                        <input type="number" class="form-control" name="paslon_20" value="<?= $data['paslon_20']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PARTAI BURUH
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Nefrizal, S.T</label>
                                                        <input type="number" class="form-control" name="paslon_21" value="<?= $data['paslon_21']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Wahyu Dianasari</label>
                                                        <input type="number" class="form-control" name="paslon_22" value="<?= $data['paslon_22']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Suhari</label>
                                                        <input type="number" class="form-control" name="paslon_23" value="<?= $data['paslon_23']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Wawan Triyanto</label>
                                                        <input type="number" class="form-control" name="paslon_24" value="<?= $data['paslon_24']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GELORA
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Abdul Rahman</label>
                                                        <input type="number" class="form-control" name="paslon_25" value="<?= $data['paslon_25']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Riana Simatupang</label>
                                                        <input type="number" class="form-control" name="paslon_26" value="<?= $data['paslon_26']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PKS
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Suryani, S.E., M.I.Kom.</label>
                                                        <input type="number" class="form-control" name="paslon_27" value="<?= $data['paslon_27']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Dr. H. Irfan Aulia, M.Psi.</label>
                                                        <input type="number" class="form-control" name="paslon_28" value="<?= $data['paslon_28']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Cinthiara Yunisa</label>
                                                        <input type="number" class="form-control" name="paslon_29" value="<?= $data['paslon_29']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Amri, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_30" value="<?= $data['paslon_30']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PKN
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Winarti</label>
                                                        <input type="number" class="form-control" name="paslon_31" value="<?= $data['paslon_31']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Said Baswidan, S.E., M.Si.</label>
                                                        <input type="number" class="form-control" name="paslon_32" value="<?= $data['paslon_32']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Kwandaruwikan Sri Harto</label>
                                                        <input type="number" class="form-control" name="paslon_33" value="<?= $data['paslon_33']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      HANURA
                                                    </a>
                                                    <div class="mb-3">
                                                        <label class="form-label">1. Irjen. Pol. (Purn.) Drs. Yotje Mende, M.Hum.</label>
                                                        <input type="number" class="form-control" name="paslon_34" value="<?= $data['paslon_34']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Salmah Hani</label>
                                                        <input type="number" class="form-control" name="paslon_35" value="<?= $data['paslon_35']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      GARUDA
                                                    </a>
                                                    <div class="mb-3">
                                                        <label class="form-label">1. Guntur Gumilang</label>
                                                        <input type="number" class="form-control" name="paslon_36" value="<?= $data['paslon_36']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Arya Zikri</label>
                                                        <input type="number" class="form-control" name="paslon_37" value="<?= $data['paslon_37']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Mauli Hafizoh</label>
                                                        <input type="number" class="form-control" name="paslon_38" value="<?= $data['paslon_38']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Dhanial Herly Hartono</label>
                                                        <input type="number" class="form-control" name="paslon_39" value="<?= $data['paslon_39']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PAN
                                                    </a>

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Dr. Asman Abnur, S.E., M.Si.</label>
                                                        <input type="number" class="form-control" name="paslon_40" value="<?= $data['paslon_40']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Derry Purnamasari</label>
                                                        <input type="number" class="form-control" name="paslon_41" value="<?= $data['paslon_41']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Alex Guspeneldi, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_42" value="<?= $data['paslon_42']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Desi Hanafia, S.E.</label>
                                                        <input type="number" class="form-control" name="paslon_43" value="<?= $data['paslon_43']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                      PBB
                                                    </a>
                                                    <div class="mb-3">
                                                        <label class="form-label">1. Agus Salim</label>
                                                        <input type="number" class="form-control" name="paslon_44" value="<?= $data['paslon_44']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">2. Darmawati</label>
                                                        <input type="number" class="form-control" name="paslon_45" value="<?= $data['paslon_45']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Amir Asmadi,S.Pd.I.</label>
                                                        <input type="number" class="form-control" name="paslon_46" value="<?= $data['paslon_46']?>">
                                                    </div>

                                                     <a class="btn btn-warning mb-3">
                                                    DEMOKRAT
                                                    </a>      
                                                   <div class="mb-3">
                                                        <label class="form-label">1. Aneng</label>
                                                        <input type="number" class="form-control" name="paslon_47" value="<?= $data['paslon_47']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">2. Agus Wibowo</label>
                                                        <input type="number" class="form-control" name="paslon_48" value="<?= $data['paslon_48']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Rudang Ckristy Meliala, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_49" value="<?= $data['paslon_49']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">4. Ir. Mustofa Widjaja</label>
                                                        <input type="number" class="form-control" name="paslon_50" value="<?= $data['paslon_50']?>">
                                                    </div>   

                                                    <a class="btn btn-warning mb-3">
                                                    PSI
                                                    </a> 

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Harun Pandapotan</label>
                                                        <input type="number" class="form-control" name="paslon_51" value="<?= $data['paslon_51']?>">
                                                    </div>  
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Rudy Widjaja</label>
                                                        <input type="number" class="form-control" name="paslon_52" value="<?= $data['paslon_52']?>">
                                                    </div> 
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Livi Agustri Br Milala, S.H</label>
                                                        <input type="number" class="form-control" name="paslon_53" value="<?= $data['paslon_53']?>">
                                                    </div>  
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Dewi Rosita</label>
                                                        <input type="number" class="form-control" name="paslon_54" value="<?= $data['paslon_54']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                    PERINDO
                                                    </a>  

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Alias Wello, S.I.P., M.Tr.I.P.</label>
                                                        <input type="number" class="form-control" name="paslon_55" value="<?= $data['paslon_55']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">2. Soraya Djajakusuma</label>
                                                        <input type="number" class="form-control" name="paslon_56" value="<?= $data['paslon_56']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">3. Greos Sumartana Saragih, S.P., M.M</label>
                                                        <input type="number" class="form-control" name="paslon_57" value="<?= $data['paslon_57']?>">
                                                    </div>                                          <div class="mb-3">
                                                        <label class="form-label">4. Wina Zahra Ayu</label>
                                                        <input type="number" class="form-control" name="paslon_58" value="<?= $data['paslon_58']?>">
                                                    </div>

                                                    <a class="btn btn-warning mb-3">
                                                    PPP
                                                    </a>  

                                                    <div class="mb-3">
                                                        <label class="form-label">1. Andy Sulistio Susanto</label>
                                                        <input type="number" class="form-control" name="paslon_59" value="<?= $data['paslon_59']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. Sri Herlina, S.P.</label>
                                                        <input type="number" class="form-control" name="paslon_60" value="<?= $data['paslon_60']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Nanda Yura Putra</label>
                                                        <input type="number" class="form-control" name="paslon_61" value="<?= $data['paslon_61']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Emrawati</label>
                                                        <input type="number" class="form-control" name="paslon_62" value="<?= $data['paslon_62']?>">
                                                    </div>                                          <a class="btn btn-warning mb-3">
                                                    PARTAI UMMAT
                                                    </a>                                          <div class="mb-3">
                                                        <label class="form-label">1. Azhari, S.T., M.Eng.</label>
                                                        <input type="number" class="form-control" name="paslon_63" value="<?= $data['paslon_63']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. H. Kamaruddin,S.Pd., M.M., M.Si.</label>
                                                        <input type="number" class="form-control" name="paslon_64" value="<?= $data['paslon_64']?>">
                                                    </div>                                   
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Eka Anita Diana, S.Pd.I</label>
                                                        <input type="number" class="form-control" name="paslon_65" value="<?= $data['paslon_65']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Rina Susanti.</label>
                                                        <input type="number" class="form-control" name="paslon_66" value="<?= $data['paslon_66']?>">
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
                                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
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

    </body>
</html>


