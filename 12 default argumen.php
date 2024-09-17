<?php

// Sintaks Argumen Default
function sapa($nama = 'pengunjung') {
    echo "Halo, $nama!";
}

sapa(); // Output: Halo, pengunjung!
echo "<br>";

sapa('Dewi'); // Output: Halo, Dewi!
echo "<hr>";

// Memanggil tanpa Argumen
sapa(); // menggunakan nilai default yang didefinisikan dalam fungsi
echo "<hr>";

// Memanggil dengan Argumen
sapa('Budi'); // menggunakan argumen yang diberikan, "Budi"
echo "<hr>";

// Argumen Non-default Setelah Default
function contohFungsi($wajib, $opsional = 'default') {
    // Kode fungsi...
}
