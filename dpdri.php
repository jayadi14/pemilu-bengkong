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

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah">
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
                                                  <th>Jumlah<br>Suara Sah</th>
                                                  <th>Jumlah<br>Suara Tidak Sah</th>
                                                  <th>Jumlah Suara Sah<br>dan Suara Tidak Sah</th>
                                                  
                                                  <th class="align-middle">Aksi</th>
                                                  </tr>
                                                </thead>

                                                <?php
                                                $no = 1;
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_dpdri ORDER BY id_dpdri DESC");
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
                                                                <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPD RI</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>
                                                              <form method="post" action="aksi2.php">
                                                                <input type="hidden" name="id_dpdri" value="<?= $data['id_dpdri']?>">
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
                                                                <div class="mb-3">
                                                                    <label class="form-label">1. David Farel Sibuea, M.Th., D.Min.</label>
                                                                    <input type="number" class="form-control" name="paslon_1" value="<?= $data['paslon_1']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">2. H. Dharma Setiawan</label>
                                                                    <input type="number" class="form-control" name="paslon_2" value="<?= $data['paslon_2']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">3. Dwi Ajeng Sekar Respaty, S.H., M.Kn.</label>
                                                                    <input type="number" class="form-control" name="paslon_3" value="<?= $data['paslon_3']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">4. Gerry Yasid, S.H., M.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_4" value="<?= $data['paslon_4']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">5. Drs. H. Hardi Selamat Hood, M.Si., Ph.D.</label>
                                                                    <input type="number" class="form-control" name="paslon_5" value="<?= $data['paslon_5']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">6. Haripinto Tanuwidjaja</label>
                                                                    <input type="number" class="form-control" name="paslon_6" value="<?= $data['paslon_6']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">7. Ir. Hotman Hutapea</label>
                                                                    <input type="number" class="form-control" name="paslon_7" value="<?= $data['paslon_7']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">8. Drs. Ismeth Abdullah</label>
                                                                    <input type="number" class="form-control" name="paslon_8" value="<?= $data['paslon_8']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">9. Juanda, S.Mn., M.M.</label>
                                                                    <input type="number" class="form-control" name="paslon_9" value="<?= $data['paslon_9']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">10. Ria Saptarika</label>
                                                                    <input type="number" class="form-control" name="paslon_10" value="<?= $data['paslon_10']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">11. Dr. Richard Hamonangan Pasaribu, B.Sc., M.Sc.</label>
                                                                    <input type="number" class="form-control" name="paslon_11" value="<?= $data['paslon_11']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">12. Sirajudin Nur</label>
                                                                    <input type="number" class="form-control" name="paslon_12" value="<?= $data['paslon_12']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">13. Stephane Gerald Martogi Siburian</label>
                                                                    <input type="number" class="form-control" name="paslon_13" value="<?= $data['paslon_13']?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">14. Sunarto Poniman, S.H.</label>
                                                                    <input type="number" class="form-control" name="paslon_14" value="<?= $data['paslon_14']?>">
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
                                                              <form method="post" action="aksi2.php">
                                                                <input type="hidden" name="id_dpdri" value="<?= $data['id_dpdri']?>">
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
                                                    <h5 class="modal-title" id="staticBackdropLabel">Form Input Suara Calon DPD RI</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <form method="post" action="aksi2.php">
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
                                                    <div class="mb-3">
                                                        <label class="form-label">1. David Farel Sibuea, M.Th., D.Min.</label>
                                                        <input type="number" class="form-control" name="paslon_1" value="<?= $data['paslon_1']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">2. H. Dharma Setiawan</label>
                                                        <input type="number" class="form-control" name="paslon_2" value="<?= $data['paslon_2']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">3. Dwi Ajeng Sekar Respaty, S.H., M.Kn.</label>
                                                        <input type="number" class="form-control" name="paslon_3" value="<?= $data['paslon_3']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">4. Gerry Yasid, S.H., M.H.</label>
                                                        <input type="number" class="form-control" name="paslon_4" value="<?= $data['paslon_4']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">5. Drs. H. Hardi Selamat Hood, M.Si., Ph.D.</label>
                                                        <input type="number" class="form-control" name="paslon_5" value="<?= $data['paslon_5']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">6. Haripinto Tanuwidjaja</label>
                                                        <input type="number" class="form-control" name="paslon_6" value="<?= $data['paslon_6']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">7. Ir. Hotman Hutapea</label>
                                                        <input type="number" class="form-control" name="paslon_7" value="<?= $data['paslon_7']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">8. Drs. Ismeth Abdullah</label>
                                                        <input type="number" class="form-control" name="paslon_8" value="<?= $data['paslon_8']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">9. Juanda, S.Mn., M.M.</label>
                                                        <input type="number" class="form-control" name="paslon_9" value="<?= $data['paslon_9']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">10. Ria Saptarika</label>
                                                        <input type="number" class="form-control" name="paslon_10" value="<?= $data['paslon_10']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">11. Dr. Richard Hamonangan Pasaribu, B.Sc., M.Sc.</label>
                                                        <input type="number" class="form-control" name="paslon_11" value="<?= $data['paslon_11']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">12. Sirajudin Nur</label>
                                                        <input type="number" class="form-control" name="paslon_12" value="<?= $data['paslon_12']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">13. Stephane Gerald Martogi Siburian</label>
                                                        <input type="number" class="form-control" name="paslon_13" value="<?= $data['paslon_13']?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">14. Sunarto Poniman, S.H.</label>
                                                        <input type="number" class="form-control" name="paslon_14" value="<?= $data['paslon_14']?>">
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


