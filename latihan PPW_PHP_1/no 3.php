<?php
    $nama = array("R", "a", "m", "b", "u");
    $kota_tujuan = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", 
                  "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");
    $kota_didapat = "";
    for ($i = 0; $i < count($nama); $i++) {
        for ($j = 0; $j < count($kota_tujuan); $j++) {
            $lower_kota = strtolower($kota_tujuan[$j]);
            $lower_char = strtolower($nama[$i]);
            if (strpos($lower_kota, $lower_char) === 0) {
                $kota_didapat = $kota_tujuan[$j];
                break;
            }
        }
        if (strlen($kota_didapat) > 0) {
            break;
        }
    }
    if ($kota_didapat == "") {
        $kota_didapat = "Jawa Timur";
    }
    echo  "Ditempatkan di " . $kota_didapat;
?>
