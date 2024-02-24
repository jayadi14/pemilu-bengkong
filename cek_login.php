<?php
include 'koneksi.php';
session_start();



$email = $_POST['email'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($login);

    if($cek > 0){
    $data = mysqli_fetch_assoc($login); 
    if($data['level']=="admin"){

    // buat session login dan username
    $_SESSION['email'] = $email;
    $_SESSION['level'] = "admin";
    // alihkan ke halaman dashboard admin
    header("location:halaman_utama.php");

    // cek jika user login sebagai user
    }else if($data['level']=="user"){
    // buat session login dan username
    $_SESSION['email'] = $email;
    $_SESSION['level'] = "user";
    // alihkan ke halaman dashboard user
    header("location:halaman_utama.php");

    }else{
    // alihkan ke halaman login kembali
    header("location:index.php?pesan=gagal");
    } 
    }else{
    header("location:index.php?pesan=gagal");
    }


?>