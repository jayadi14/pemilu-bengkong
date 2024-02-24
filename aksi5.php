<?php
include 'koneksi.php';

if (isset($_POST['bsimpan1'])) {
	
	$simpan = mysqli_query($koneksi, "INSERT INTO tb_dprd_kota1 (kecamatan, kelurahan, tps, dpt, p_dpt, p_dptb, p_dpk, jp_pemilih, surat_suara, paslon_101, paslon_102, paslon_103, paslon_104, paslon_105, paslon_106, paslon_107, paslon_108, paslon_109, paslon_110, paslon_111, paslon_112, paslon_113, paslon_114, paslon_115, paslon_116, paslon_117, paslon_118, paslon_119, paslon_120, paslon_121, paslon_122, paslon_123, paslon_124, paslon_125, paslon_126, paslon_127, paslon_128, paslon_129, paslon_130, paslon_131, paslon_132, paslon_133, paslon_134, paslon_135, paslon_136, paslon_137, paslon_138, paslon_139, paslon_140, paslon_141, paslon_142, paslon_143, paslon_144, paslon_145, paslon_146, paslon_147, paslon_148, paslon_149, ss, sts, ss_sts) VALUES ('$_POST[kecamatan]','$_POST[kelurahan]','$_POST[tps]', '$_POST[dpt]','$_POST[p_dpt]', '$_POST[p_dptb]', '$_POST[p_dpk]', '$_POST[jp_pemilih]', '$_POST[surat_suara]','$_POST[paslon_101]','$_POST[paslon_102]','$_POST[paslon_103]','$_POST[paslon_104]','$_POST[paslon_105]','$_POST[paslon_106]','$_POST[paslon_107]','$_POST[paslon_108]','$_POST[paslon_109]','$_POST[paslon_110]','$_POST[paslon_111]','$_POST[paslon_112]','$_POST[paslon_113]','$_POST[paslon_114]','$_POST[paslon_115]','$_POST[paslon_116]','$_POST[paslon_117]','$_POST[paslon_118]','$_POST[paslon_119]','$_POST[paslon_120]','$_POST[paslon_121]','$_POST[paslon_122]','$_POST[paslon_123]','$_POST[paslon_124]','$_POST[paslon_125]','$_POST[paslon_126]','$_POST[paslon_127]','$_POST[paslon_128]','$_POST[paslon_129]','$_POST[paslon_130]','$_POST[paslon_131]','$_POST[paslon_132]','$_POST[paslon_133]','$_POST[paslon_134]','$_POST[paslon_135]','$_POST[paslon_136]','$_POST[paslon_137]','$_POST[paslon_138]','$_POST[paslon_139]','$_POST[paslon_140]','$_POST[paslon_141]','$_POST[paslon_142]','$_POST[paslon_143]','$_POST[paslon_144]','$_POST[paslon_145]','$_POST[paslon_146]','$_POST[paslon_147]','$_POST[paslon_148]','$_POST[paslon_149]','$_POST[ss]','$_POST[sts]','$_POST[ss_sts]') ");

	if ($simpan) {
		echo "<script>alert('Data Berhasil Disimpan');
					  document.location='dprdkota.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Disimpan');
					  document.location='dprdkota.php';
			  </script>";
	}
}


if (isset($_POST['bubah1'])) {
	
	$ubah = mysqli_query($koneksi, "UPDATE tb_dprd_kota1 SET kecamatan ='$_POST[kecamatan]', kelurahan ='$_POST[kelurahan]', tps ='$_POST[tps]', dpt ='$_POST[dpt]', p_dpt ='$_POST[p_dpt]', p_dptb ='$_POST[p_dptb]', p_dpk ='$_POST[p_dpk]', jp_pemilih ='$_POST[jp_pemilih]', surat_suara ='$_POST[surat_suara]', paslon_101 ='$_POST[paslon_101]', paslon_102 ='$_POST[paslon_102]', paslon_103 ='$_POST[paslon_103]', paslon_104 ='$_POST[paslon_104]', paslon_105 ='$_POST[paslon_105]', paslon_106 ='$_POST[paslon_106]', paslon_107 ='$_POST[paslon_107]', paslon_108 ='$_POST[paslon_108]', paslon_109 ='$_POST[paslon_109]', paslon_110 ='$_POST[paslon_110]', paslon_111 ='$_POST[paslon_111]', paslon_112 ='$_POST[paslon_112]', paslon_113 ='$_POST[paslon_113]', paslon_114 ='$_POST[paslon_114]', paslon_115 ='$_POST[paslon_115]', paslon_116 ='$_POST[paslon_116]', paslon_117 ='$_POST[paslon_117]', paslon_118 ='$_POST[paslon_118]', paslon_119 ='$_POST[paslon_119]', paslon_120 ='$_POST[paslon_120]', paslon_121 ='$_POST[paslon_121]', paslon_122 ='$_POST[paslon_122]', paslon_123 ='$_POST[paslon_123]', paslon_124 ='$_POST[paslon_124]', paslon_125 ='$_POST[paslon_125]', paslon_126 ='$_POST[paslon_126]', paslon_127 ='$_POST[paslon_127]', paslon_128 ='$_POST[paslon_128]', paslon_129 ='$_POST[paslon_129]', paslon_130 ='$_POST[paslon_130]', paslon_131 ='$_POST[paslon_131]', paslon_132 ='$_POST[paslon_132]', paslon_133 ='$_POST[paslon_133]', paslon_134 ='$_POST[paslon_134]', paslon_135 ='$_POST[paslon_135]', paslon_136 ='$_POST[paslon_136]', paslon_137 ='$_POST[paslon_137]', paslon_138 ='$_POST[paslon_138]', paslon_139 ='$_POST[paslon_139]', paslon_140 ='$_POST[paslon_140]', paslon_141 ='$_POST[paslon_141]', paslon_142 ='$_POST[paslon_142]', paslon_143 ='$_POST[paslon_143]', paslon_144 ='$_POST[paslon_144]', paslon_145 ='$_POST[paslon_145]', paslon_146 ='$_POST[paslon_146]', paslon_147 ='$_POST[paslon_147]', paslon_148 ='$_POST[paslon_148]', paslon_149 ='$_POST[paslon_149]', ss ='$_POST[ss]', sts ='$_POST[sts]', ss_sts ='$_POST[ss_sts]' WHERE id_dprdkota1 ='$_POST[id_dprdkota1]' ");

	if ($ubah) {
		echo "<script>alert('Data Berhasil Diubah');
					  document.location='dprdkota.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Diubah');
					  document.location='dprdkota.php';
			  </script>";
	}
}

if (isset($_POST['bhapus1'])) {
	
	$hapus = mysqli_query($koneksi, "DELETE FROM tb_dprd_kota1 WHERE id_dprdkota1 ='$_POST[id_dprdkota1]'");

	if ($hapus) {
		echo "<script>alert('Data Berhasil Dihapus');
					  document.location='dprdkota.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');
					  document.location='dprdkota.php';
			  </script>";
	}
}


?>


<?php
include 'koneksi.php';

if (isset($_POST['bsimpan'])) {
	
	$simpan = mysqli_query($koneksi, "INSERT INTO tb_dprd_kota(kecamatan, kelurahan, tps, dpt, p_dpt, p_dptb, p_dpk, jp_pemilih, surat_suara, paslon_1, paslon_2, paslon_3, paslon_4, paslon_5, paslon_6, paslon_7, paslon_8, paslon_9, paslon_10, paslon_11, paslon_12, paslon_13, paslon_14, paslon_15, paslon_16, paslon_17, paslon_18, paslon_19, paslon_20, paslon_21, paslon_22, paslon_23, paslon_24, paslon_25, paslon_26, paslon_27, paslon_28, paslon_29, paslon_30, paslon_31, paslon_32, paslon_33, paslon_34, paslon_35, paslon_36, paslon_37, paslon_38, paslon_39, paslon_40, paslon_41, paslon_42, paslon_43, paslon_44, paslon_45, paslon_46, paslon_47, paslon_48, paslon_49, paslon_50, paslon_51, paslon_52, paslon_53, paslon_54, paslon_55, ss, sts, ss_sts) VALUES ('$_POST[kecamatan]','$_POST[kelurahan]','$_POST[tps]', '$_POST[dpt]','$_POST[p_dpt]', '$_POST[p_dptb]', '$_POST[p_dpk]', '$_POST[jp_pemilih]', '$_POST[surat_suara]','$_POST[paslon_1]','$_POST[paslon_2]','$_POST[paslon_3]','$_POST[paslon_4]','$_POST[paslon_5]','$_POST[paslon_6]','$_POST[paslon_7]','$_POST[paslon_8]','$_POST[paslon_9]','$_POST[paslon_10]','$_POST[paslon_11]','$_POST[paslon_12]','$_POST[paslon_13]','$_POST[paslon_14]','$_POST[paslon_15]','$_POST[paslon_16]','$_POST[paslon_17]','$_POST[paslon_18]','$_POST[paslon_19]','$_POST[paslon_20]','$_POST[paslon_21]','$_POST[paslon_22]','$_POST[paslon_23]','$_POST[paslon_24]','$_POST[paslon_25]','$_POST[paslon_26]','$_POST[paslon_27]','$_POST[paslon_28]','$_POST[paslon_29]','$_POST[paslon_30]','$_POST[paslon_31]','$_POST[paslon_32]','$_POST[paslon_33]','$_POST[paslon_34]','$_POST[paslon_35]','$_POST[paslon_36]','$_POST[paslon_37]','$_POST[paslon_38]','$_POST[paslon_39]','$_POST[paslon_40]','$_POST[paslon_41]','$_POST[paslon_42]','$_POST[paslon_43]','$_POST[paslon_44]','$_POST[paslon_45]','$_POST[paslon_46]','$_POST[paslon_47]','$_POST[paslon_48]','$_POST[paslon_49]','$_POST[paslon_50]','$_POST[paslon_51]','$_POST[paslon_52]','$_POST[paslon_53]','$_POST[paslon_54]','$_POST[paslon_55]','$_POST[ss]','$_POST[sts]','$_POST[ss_sts]') ");

	if ($simpan) {
		echo "<script>alert('Data Berhasil Disimpan');
					  document.location='dprdkota.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Disimpan');
					  document.location='dprdkota.php';
			  </script>";
	}
}


if (isset($_POST['bubah'])) {
	
	$ubah = mysqli_query($koneksi, "UPDATE tb_dprd_kota SET kecamatan ='$_POST[kecamatan]', kelurahan ='$_POST[kelurahan]', tps ='$_POST[tps]', dpt ='$_POST[dpt]', p_dpt ='$_POST[p_dpt]', p_dptb ='$_POST[p_dptb]', p_dpk ='$_POST[p_dpk]', jp_pemilih ='$_POST[jp_pemilih]', surat_suara ='$_POST[surat_suara]', paslon_1 ='$_POST[paslon_1]', paslon_2 ='$_POST[paslon_2]', paslon_3 ='$_POST[paslon_3]', paslon_4 ='$_POST[paslon_4]', paslon_5 ='$_POST[paslon_5]', paslon_6 ='$_POST[paslon_6]', paslon_7 ='$_POST[paslon_7]', paslon_8 ='$_POST[paslon_8]', paslon_9 ='$_POST[paslon_9]', paslon_10 ='$_POST[paslon_10]', paslon_11 ='$_POST[paslon_11]', paslon_12 ='$_POST[paslon_12]', paslon_13 ='$_POST[paslon_13]', paslon_14 ='$_POST[paslon_14]', paslon_15 ='$_POST[paslon_15]', paslon_16 ='$_POST[paslon_16]', paslon_17 ='$_POST[paslon_17]', paslon_18 ='$_POST[paslon_18]', paslon_19 ='$_POST[paslon_19]', paslon_20 ='$_POST[paslon_20]', paslon_21 ='$_POST[paslon_21]', paslon_22 ='$_POST[paslon_22]', paslon_23 ='$_POST[paslon_23]', paslon_24 ='$_POST[paslon_24]', paslon_25 ='$_POST[paslon_25]', paslon_26 ='$_POST[paslon_26]', paslon_27 ='$_POST[paslon_27]', paslon_28 ='$_POST[paslon_28]', paslon_29 ='$_POST[paslon_29]', paslon_30 ='$_POST[paslon_30]', paslon_31 ='$_POST[paslon_31]', paslon_32 ='$_POST[paslon_32]', paslon_33 ='$_POST[paslon_33]', paslon_34 ='$_POST[paslon_34]', paslon_35 ='$_POST[paslon_35]', paslon_36 ='$_POST[paslon_36]', paslon_37 ='$_POST[paslon_37]', paslon_38 ='$_POST[paslon_38]', paslon_39 ='$_POST[paslon_39]', paslon_40 ='$_POST[paslon_40]', paslon_41 ='$_POST[paslon_41]', paslon_42 ='$_POST[paslon_42]', paslon_43 ='$_POST[paslon_43]', paslon_44 ='$_POST[paslon_44]', paslon_45 ='$_POST[paslon_45]', paslon_46 ='$_POST[paslon_46]', paslon_47 ='$_POST[paslon_47]', paslon_48 ='$_POST[paslon_48]', paslon_49 ='$_POST[paslon_49]', paslon_50 ='$_POST[paslon_50]', paslon_51 ='$_POST[paslon_51]', paslon_52 ='$_POST[paslon_52]', paslon_53 ='$_POST[paslon_53]', paslon_54 ='$_POST[paslon_54]', paslon_55 ='$_POST[paslon_55]', ss ='$_POST[ss]', sts ='$_POST[sts]', ss_sts ='$_POST[ss_sts]' WHERE id_dprdkota ='$_POST[id_dprdkota]' ");

	if ($ubah) {
		echo "<script>alert('Data Berhasil Diubah');
					  document.location='dprdkota.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Diubah');
					  document.location='dprdkota.php';
			  </script>";
	}
}

if (isset($_POST['bhapus'])) {
	
	$hapus = mysqli_query($koneksi, "DELETE FROM tb_dprd_kota WHERE id_dprdkota ='$_POST[id_dprdkota]'");

	if ($hapus) {
		echo "<script>alert('Data Berhasil Dihapus');
					  document.location='dprdkota.php';
			  </script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');
					  document.location='dprdkota.php';
			  </script>";
	}
}


?>