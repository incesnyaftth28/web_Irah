<?php
// Fungsi untuk menghitung luas alas kerucut
function luasAlas($r) {
    return pi() * pow($r, 2);
}

// Fungsi untuk menghitung garis pelukis (s)
function garisPelukis($r, $t) {
    return sqrt(pow($r, 2) + pow($t, 2));
}

// Fungsi untuk menghitung luas selimut kerucut
function luasSelimut($r, $s) {
    return pi() * $r * $s;
}

// Fungsi untuk menghitung luas permukaan kerucut
function luasPermukaan($r, $t) {
    $s = garisPelukis($r, $t);
    $A_alas = luasAlas($r);
    $A_selimut = luasSelimut($r, $s);
    return $A_alas + $A_selimut;
}

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai input dari form
    $r = $_POST['jari_jari'];
    $t = $_POST['tinggi'];

    // Validasi input
    if (is_numeric($r) && is_numeric($t) && $r > 0 && $t > 0) {
        // Menghitung hasil
        $A_alas = luasAlas($r);
        $s = garisPelukis($r, $t);
        $A_selimut = luasSelimut($r, $s);
        $A_permukaan = luasPermukaan($r, $t);

        // Menampilkan hasil
        echo "<h3>Hasil Perhitungan Kerucut:</h3>";
        echo "Luas Alas Kerucut: " . number_format($A_alas, 2) . " cm²<br>";
        echo "Luas Selimut Kerucut: " . number_format($A_selimut, 2) . " cm²<br>";
        echo "Luas Permukaan Kerucut: " . number_format($A_permukaan, 2) . " cm²<br>";
    } else {
        echo "<h3>Masukkan nilai yang valid untuk jari-jari dan tinggi!</h3>";
    }
}
?>

<!-- Form Input -->
<form method="post" action="">
    <label for="jari_jari">Jari-Jari Alas (cm): </label>
    <input type="text" id="jari_jari" name="jari_jari" required><br><br>
    <label for="tinggi">Tinggi Kerucut (cm): </label>
    <input type="text" id="tinggi" name="tinggi" required><br><br>
    <input type="submit" value="Hitung">
</form>
