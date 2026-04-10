<?php

function isLulus($nilai) {
    return $nilai >= 75; 
}

if (isLulus(80)) {
    echo "Selamat, kamu lulus!";
} else {
    echo "Maaf, coba lagi.";
}

?>