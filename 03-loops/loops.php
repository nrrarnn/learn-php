<?php

$colors = ["Red", "Green", "Blue", "Yellow", "Purple"];
// for loop
for($i = 1; $i <= 10; $i++){
    echo "the number is $i <br>";
}

echo "<br><br>";

// foreach
foreach($colors as $c) {
    echo "the color is $c <br>";
}


$start = 1;

echo "mulai berhitung <br>";

// while
while($start < 10) {
    echo "ini adalah angka ke $start <br>";

    $start++;
}

echo "selesai<br>";

// do while
$j = 0;
do {
    echo "color :" . $colors[$j] . "<br>";
    $j++;
}while ($colors[$j] == 'Yellow');

?>