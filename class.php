<?php
require_once 'class_laporan.php';

if (isset($_POST["submit"])) {
    // Set nilai properti pada objek dari nilai yang diisi pada form
    $nim = $_POST["nim"];
    $mtkuliah = $_POST["mk"];
    $nilai = $_POST["nilai"];

    // Buat objek baru dari class LaporanMahasiswa
    $laporan = new LaporanMahasiswa($nim, $mtkuliah, $nilai);

    echo "<h2>Form Input Ujian</h2>";
    echo "<p>Nim: " . $laporan->nim . "</p>";
    echo "<p>Mata Kuliah: " . $laporan->mk . " </p>";
    echo "<p>Nilai: " . $laporan->nilai . " </p>";
    echo "<p>Grade: " . $laporan->determineGrade($nilai) . " </p>";
}
?>