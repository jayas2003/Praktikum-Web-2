<?php
require_once 'form.php';
class LaporanMahasiswa
{
    public $nim, $mk, $nilai;

    function __construct($nim, $mk, $nilai)
    {
        $this->nim = $nim;
        $this->mk = $mk;
        $this->nilai = $nilai;
    }

    function determineGrade($nilai)
    {
        if ($nilai >= 90 && $nilai <= 100) {
            return 'A';
        } elseif ($nilai >= 80 && $nilai < 90) {
            return 'B';
        } elseif ($nilai >= 70 && $nilai < 80) {
            return 'C';
        } elseif ($nilai >= 60 && $nilai < 70) {
            return 'D';
        } else {
            return 'E';
        }
    }
}
?>