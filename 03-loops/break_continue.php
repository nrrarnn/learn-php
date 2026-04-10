<?php

$angka = [1, 2, 3, 4, 5];

// menampilkan 1 - 3
foreach($angka as $i) {
    if($i === 4){
        break;
    }

    echo "$i <br>";
}


// menampilkan bilangan ganjil
foreach ($angka as $angka) {
    if($angka % 2 == 0) {
        continue;
    }

    echo "$angka <br>";
}

?>