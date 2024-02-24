<?php
include 'koneksi.php';

if (isset($_POST['bsimpan'])) {
	
	$simpan = mysqli_query($koneksi, "INSERT INTO tb_presiden(kecamatan, kelurahan, tps, dpt, p_dpt, p_dptb, p_dpk, jp_pemilih, surat_suara, paslon_1, paslon_2, paslon_3, ss, sts, ss_sts) VALUES ('$_POST[kecamatan]','$_POST[kelurahan]','$_POST[tps]', '$_POST[dpt]','$_POST[p_dpt]', '$_POST[p_dptb]', '$_POST[p_dpk]', '$_POST[jp_pemilih]', '$_POST[surat_suara]','$_POST[paslon_1]','$_POST[paslon_2]','$_POST[paslon_3]','$_POST[ss]','$_POST[sts]','$_POST[ss_sts]') ");

	if ($simpan) {
		echo "<script>alert('Data Berhasil Disimpan');
					  document.location='presiden.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Disimpan');
					  document.location='presiden.php';
			  </script>";
	}
}


if (isset($_POST['bubah'])) {
	
	$ubah = mysqli_query($koneksi, "UPDATE tb_presiden SET kecamatan ='$_POST[kecamatan]', kelurahan ='$_POST[kelurahan]', tps ='$_POST[tps]', dpt ='$_POST[dpt]', p_dpt ='$_POST[p_dpt]', p_dptb ='$_POST[p_dptb]', p_dpk ='$_POST[p_dpk]', jp_pemilih ='$_POST[jp_pemilih]', surat_suara ='$_POST[surat_suara]', paslon_1 ='$_POST[paslon_1]', paslon_2 ='$_POST[paslon_2]', paslon_3 ='$_POST[paslon_3]', ss ='$_POST[ss]', sts ='$_POST[sts]', ss_sts ='$_POST[ss_sts]' WHERE id_presiden ='$_POST[id_presiden]' ");

	if ($ubah) {
		echo "<script>alert('Data Berhasil Diubah');
					  document.location='presiden.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Diubah');
					  document.location='presiden.php';
			  </script>";
	}
}

if (isset($_POST['bhapus'])) {
	
	$hapus = mysqli_query($koneksi, "DELETE FROM tb_presiden WHERE id_presiden ='$_POST[id_presiden]'");

	if ($hapus) {
		echo "<script>alert('Data Berhasil Dihapus');
					  document.location='presiden.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');
					  document.location='presiden.php';
			  </script>";
	}
}


?>