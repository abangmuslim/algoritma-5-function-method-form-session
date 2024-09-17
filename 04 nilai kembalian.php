<?php
function nama_bulan($bulan) {
	$nama_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	return $nama_bulan[$bulan];
}
// date('n') akan menghasilkan bulan sekarang dalam bentuk 1 digit, misal 3 untuk Januari
$bulan = nama_bulan(date('n')); // Hasil Maret 
echo $bulan . ' ' . date('Y'); // Hasil Maret 2016
