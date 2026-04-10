<?php

function accum($s) {
    // your code
  $panjang = strlen($s);
  $output= [];
  
  for($i = 0; $i < $panjang; $i++){
    $huruf = $s[$i];
    
    $bagian = strtoupper($huruf) . str_repeat(strtolower($huruf), $i);
    
    $output[] = $bagian;
  }
  
  return implode("-", $output);
  
}

$hasil = accum("ZpglnRxqenU");

echo $hasil;

?>