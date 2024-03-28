<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Gaji Karyawan Honorer</title>
</head>
<body>
    <h2>Hasil Perhitungan Gaji Karyawan Honorer</h2>

    <?php
    // Ambil nilai input dari form
    $upah_per_jam = $_POST['upah_per_jam'];
    $jam_kerja = $_POST['jam_kerja'];

    // Hitung gaji total
    if ($jam_kerja <= 48) {
        $gaji_total = $upah_per_jam * $jam_kerja;
    } else {
        $gaji_normal = $upah_per_jam * 48;
        $lembur = $jam_kerja - 48;
        $upah_lembur = $upah_per_jam * 1.15; // Upah lembur 15% lebih besar
        $gaji_lembur = $upah_lembur * $lembur;
        $gaji_total = $gaji_normal + $gaji_lembur;
    }

    // Tampilkan hasil
    echo "<p>Jumlah upah per jam: " . $upah_per_jam . "</p>";
    echo "<p>Jumlah jam kerja: " . $jam_kerja . "</p>";
    echo "<p>Jumlah upah total: " . $gaji_total . "</p>";
    ?>

</body>
</html>
