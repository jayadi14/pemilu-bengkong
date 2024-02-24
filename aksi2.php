<?php
include 'koneksi.php';

if (isset($_POST['bsimpan'])) {
	
	$simpan = mysqli_query($koneksi, "INSERT INTO tb_dpdri(kecamatan, kelurahan, tps, dpt, p_dpt, p_dptb, p_dpk, jp_pemilih, surat_suara, paslon_1, paslon_2, paslon_3, paslon_4, paslon_5, paslon_6, paslon_7, paslon_8, paslon_9, paslon_10, paslon_11, paslon_12, paslon_13, paslon_14, ss, sts, ss_sts) VALUES ('$_POST[kecamatan]','$_POST[kelurahan]','$_POST[tps]', '$_POST[dpt]','$_POST[p_dpt]', '$_POST[p_dptb]', '$_POST[p_dpk]', '$_POST[jp_pemilih]', '$_POST[surat_suara]','$_POST[paslon_1]','$_POST[paslon_2]','$_POST[paslon_3]','$_POST[paslon_4]','$_POST[paslon_5]','$_POST[paslon_6]','$_POST[paslon_7]','$_POST[paslon_8]','$_POST[paslon_9]','$_POST[paslon_10]','$_POST[paslon_11]','$_POST[paslon_12]','$_POST[paslon_13]','$_POST[paslon_14]','$_POST[ss]','$_POST[sts]','$_POST[ss_sts]') ");

	if ($simpan) {
		echo "<script>alert('Data Berhasil Disimpan');
					  document.location='dpdri.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Disimpan');
					  document.location='dpdri.php';
			  </script>";
	}
}


if (isset($_POST['bubah'])) {
	
	$ubah = mysqli_query($koneksi, "UPDATE tb_dpdri SET kecamatan ='$_POST[kecamatan]', kelurahan ='$_POST[kelurahan]', tps ='$_POST[tps]', dpt ='$_POST[dpt]', p_dpt ='$_POST[p_dpt]', p_dptb ='$_POST[p_dptb]', p_dpk ='$_POST[p_dpk]', jp_pemilih ='$_POST[jp_pemilih]', surat_suara ='$_POST[surat_suara]', paslon_1 ='$_POST[paslon_1]', paslon_2 ='$_POST[paslon_2]', paslon_3 ='$_POST[paslon_3]', paslon_4 ='$_POST[paslon_4]', paslon_5 ='$_POST[paslon_5]', paslon_6 ='$_POST[paslon_6]', paslon_7 ='$_POST[paslon_7]', paslon_8 ='$_POST[paslon_8]', paslon_9 ='$_POST[paslon_9]', paslon_10 ='$_POST[paslon_10]', paslon_11 ='$_POST[paslon_11]', paslon_12 ='$_POST[paslon_12]', paslon_13 ='$_POST[paslon_13]', paslon_14 ='$_POST[paslon_14]', ss ='$_POST[ss]', sts ='$_POST[sts]', ss_sts ='$_POST[ss_sts]' WHERE id_dpdri ='$_POST[id_dpdri]' ");

	if ($ubah) {
		echo "<script>alert('Data Berhasil Diubah');
					  document.location='dpdri.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Diubah');
					  document.location='dpdri.php';
			  </script>";
	}
}

if (isset($_POST['bhapus'])) {
	
	$hapus = mysqli_query($koneksi, "DELETE FROM tb_dpdri WHERE id_dpdri ='$_POST[id_dpdri]'");

	if ($hapus) {
		echo "<script>alert('Data Berhasil Dihapus');
					  document.location='dpdri.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');
					  document.location='dpdri.php';
			  </script>";
	}
}


?>