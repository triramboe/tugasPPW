<?php
    $anggota = array (
        array("Farhan", 504834),
        array("Adi", 983549),
        array("Budi", 543482),
        array("Dani", 777463),
        array("Ahmad", 50737)
    );
    for ($i = 0; $i < count($anggota); $i++) {
        $peran = "Front-End Developer";
        if ($anggota[$i][1]%2 == 0) {
            $peran = "Back-End Developer";
        }
        echo "Nama: " . $anggota[$i][0] . "<br>";
        echo "NIM: " . $anggota[$i][1] . "<br>";
        echo "Peran: " . $peran . "<br><br>";
    }
?>