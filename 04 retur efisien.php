<?php
function nama_bulan($bulan) {
	$nama_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	return $nama_bulan[$bulan];
}
function report($bulan) {
	if ($bulan < 3) {
		return 'Report belum tersedia';
	} else {
		return 'Report sudah tersedia';
	}
}
