<?php
    $ar_buah = ["pepaya", "mangga", "pisang", "jambu"] ;
    // kita akan cetak buah dengan index ke 2
    echo $ar_buah[2];
    
    //cetak jumlah buah
    echo "<br/> Jumlah Buah " . count($ar_buah);

    // cetak seluruh buah
    echo "<ol>";
    foreach($ar_buah as $buah){
        echo "<li> " . $buah . "</li>" ;
    }
    echo "<ol>";

    // tambahkan buah
    $ar_buah[] ="durian";
    
    // menghapus index ke 1
    unset($ar_buah[1]);

    // ubah index ke dua menjadi manggis
    $ar_buah[2] = "manggis";
    
    // cetak seluruh buah dengan indexnya
    echo "<ul>";
    foreach($ar_buah as $k => $v) {
        echo "<li>Buah index - " .$k . " adalah : " . $v . " </li>";
    }
     echo "</ul>";   



?>