<?php
include 'koneksi.php';

if (isset($_POST['bsimpan'])) {
	
	$simpan = mysqli_query($koneksi, "INSERT INTO tb_dpr_ri(kecamatan, kelurahan, tps, dpt, p_dpt, p_dptb, p_dpk, jp_pemilih, surat_suara,  paslon_1, paslon_2, paslon_3, paslon_4, paslon_5, paslon_6, paslon_7, paslon_8, paslon_9, paslon_10, paslon_11, paslon_12, paslon_13, paslon_14, paslon_15, paslon_16, paslon_17, paslon_18, paslon_19, paslon_20, paslon_21, paslon_22, paslon_23, paslon_24, paslon_25, paslon_26, paslon_27, paslon_28, paslon_29, paslon_30, paslon_31, paslon_32, paslon_33, paslon_34, paslon_35, paslon_36, paslon_37, paslon_38, paslon_39, paslon_40, paslon_41, paslon_42, paslon_43, paslon_44, paslon_45, paslon_46, paslon_47, paslon_48, paslon_49, paslon_50, paslon_51, paslon_52, paslon_53, paslon_54, paslon_55, paslon_56, paslon_57, paslon_58, paslon_59, paslon_60, paslon_61, paslon_62, paslon_63, paslon_64, paslon_65, paslon_66, ss, sts, ss_sts) VALUES ('$_POST[kecamatan]','$_POST[kelurahan]','$_POST[tps]', '$_POST[dpt]','$_POST[p_dpt]', '$_POST[p_dptb]', '$_POST[p_dpk]', '$_POST[jp_pemilih]', '$_POST[surat_suara]', '$_POST[paslon_1]','$_POST[paslon_2]','$_POST[paslon_3]','$_POST[paslon_4]','$_POST[paslon_5]','$_POST[paslon_6]','$_POST[paslon_7]','$_POST[paslon_8]','$_POST[paslon_9]','$_POST[paslon_10]','$_POST[paslon_11]','$_POST[paslon_12]','$_POST[paslon_13]','$_POST[paslon_14]','$_POST[paslon_15]','$_POST[paslon_16]','$_POST[paslon_17]','$_POST[paslon_18]','$_POST[paslon_19]','$_POST[paslon_20]','$_POST[paslon_21]','$_POST[paslon_22]','$_POST[paslon_23]','$_POST[paslon_24]','$_POST[paslon_25]','$_POST[paslon_26]','$_POST[paslon_27]','$_POST[paslon_28]','$_POST[paslon_29]','$_POST[paslon_30]','$_POST[paslon_31]','$_POST[paslon_32]','$_POST[paslon_33]','$_POST[paslon_34]','$_POST[paslon_35]','$_POST[paslon_36]','$_POST[paslon_37]','$_POST[paslon_38]','$_POST[paslon_39]','$_POST[paslon_40]','$_POST[paslon_41]','$_POST[paslon_42]','$_POST[paslon_43]','$_POST[paslon_44]','$_POST[paslon_45]','$_POST[paslon_46]','$_POST[paslon_47]','$_POST[paslon_48]','$_POST[paslon_49]','$_POST[paslon_50]','$_POST[paslon_51]','$_POST[paslon_52]','$_POST[paslon_53]','$_POST[paslon_54]','$_POST[paslon_55]','$_POST[paslon_56]','$_POST[paslon_57]','$_POST[paslon_58]','$_POST[paslon_59]','$_POST[paslon_60]','$_POST[paslon_61]','$_POST[paslon_62]','$_POST[paslon_63]','$_POST[paslon_64]','$_POST[paslon_65]','$_POST[paslon_66]','$_POST[ss]','$_POST[sts]','$_POST[ss_sts]') ");

	if ($simpan) {
		echo "<script>alert('Data Berhasil Disimpan');
					  document.location='dprri.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Disimpan');
					  document.location='dprri.php';
			  </script>";
	}
}


if (isset($_POST['bubah'])) {
	
	$ubah = mysqli_query($koneksi, "UPDATE tb_dpr_ri SET kecamatan ='$_POST[kecamatan]', kelurahan ='$_POST[kelurahan]', tps ='$_POST[tps]', dpt ='$_POST[dpt]', p_dpt ='$_POST[p_dpt]', p_dptb ='$_POST[p_dptb]', p_dpk ='$_POST[p_dpk]', jp_pemilih ='$_POST[jp_pemilih]', surat_suara ='$_POST[surat_suara]', paslon_1 ='$_POST[paslon_1]', paslon_2 ='$_POST[paslon_2]', paslon_3 ='$_POST[paslon_3]', paslon_4 ='$_POST[paslon_4]', paslon_5 ='$_POST[paslon_5]', paslon_6 ='$_POST[paslon_6]', paslon_7 ='$_POST[paslon_7]', paslon_8 ='$_POST[paslon_8]', paslon_9 ='$_POST[paslon_9]', paslon_10 ='$_POST[paslon_10]', paslon_11 ='$_POST[paslon_11]', paslon_12 ='$_POST[paslon_12]', paslon_13 ='$_POST[paslon_13]', paslon_14 ='$_POST[paslon_14]', paslon_15 ='$_POST[paslon_15]', paslon_16 ='$_POST[paslon_16]', paslon_17 ='$_POST[paslon_17]', paslon_18 ='$_POST[paslon_18]', paslon_19 ='$_POST[paslon_19]', paslon_20 ='$_POST[paslon_20]', paslon_21 ='$_POST[paslon_21]', paslon_22 ='$_POST[paslon_22]', paslon_23 ='$_POST[paslon_23]', paslon_24 ='$_POST[paslon_24]', paslon_25 ='$_POST[paslon_25]', paslon_26 ='$_POST[paslon_26]', paslon_27 ='$_POST[paslon_27]', paslon_28 ='$_POST[paslon_28]', paslon_29 ='$_POST[paslon_29]', paslon_30 ='$_POST[paslon_30]', paslon_31 ='$_POST[paslon_31]', paslon_32 ='$_POST[paslon_32]', paslon_33 ='$_POST[paslon_33]', paslon_34 ='$_POST[paslon_34]', paslon_35 ='$_POST[paslon_35]', paslon_36 ='$_POST[paslon_36]', paslon_37 ='$_POST[paslon_37]', paslon_38 ='$_POST[paslon_38]', paslon_39 ='$_POST[paslon_39]', paslon_40 ='$_POST[paslon_40]', paslon_41 ='$_POST[paslon_41]', paslon_42 ='$_POST[paslon_42]', paslon_43 ='$_POST[paslon_43]', paslon_44 ='$_POST[paslon_44]', paslon_45 ='$_POST[paslon_45]', paslon_46 ='$_POST[paslon_46]', paslon_47 ='$_POST[paslon_47]', paslon_48 ='$_POST[paslon_48]', paslon_49 ='$_POST[paslon_49]', paslon_50 ='$_POST[paslon_50]', paslon_51 ='$_POST[paslon_51]', paslon_52 ='$_POST[paslon_52]', paslon_53 ='$_POST[paslon_53]', paslon_54 ='$_POST[paslon_54]', paslon_55 ='$_POST[paslon_55]', paslon_56 ='$_POST[paslon_56]', paslon_57 ='$_POST[paslon_57]', paslon_58 ='$_POST[paslon_58]', paslon_59 ='$_POST[paslon_59]', paslon_60 ='$_POST[paslon_60]', paslon_61 ='$_POST[paslon_61]', paslon_62 ='$_POST[paslon_62]', paslon_63 ='$_POST[paslon_63]', paslon_64 ='$_POST[paslon_64]', paslon_65 ='$_POST[paslon_65]', paslon_66 ='$_POST[paslon_66]', ss ='$_POST[ss]', sts ='$_POST[sts]', ss_sts ='$_POST[ss_sts]' WHERE id_dprri ='$_POST[id_dpdri]' ");

	if ($ubah) {
		echo "<script>alert('Data Berhasil Diubah');
					  document.location='dprri.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Diubah');
					  document.location='dprri.php';
			  </script>";
	}
}

if (isset($_POST['bhapus'])) {
	
	$hapus = mysqli_query($koneksi, "DELETE FROM tb_dpr_ri WHERE id_dprri ='$_POST[id_dprri]'");

	if ($hapus) {
		echo "<script>alert('Data Berhasil Dihapus');
					  document.location='dprri.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');
					  document.location='dprri.php';
			  </script>";
	}
}


?>