<?php
    $nama = "farhan";
    $tgl = date("d");
    $n_nama = strlen($nama);
    if ($n_nama == $tgl-2) {
        echo "berhasil";
    }
    else if ($n_nama < $tgl) {
        echo "sedikit lagi";
    }
    else {
        echo "coba lagi";
    }
?>