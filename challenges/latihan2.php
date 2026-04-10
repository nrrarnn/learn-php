<?php
  
function betterThanAverage(array $classPoints, int $yourPoints): bool {
  $average = array_sum($classPoints) / count($classPoints);
  
  if($yourPoints > $average) {
    return true;
  }else {
    return false;
  }
}