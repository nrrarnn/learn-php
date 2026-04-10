<?php

function solution(array $a, $x) : bool {
    for($i = 0; $i < count($a); $i++ ){
      if($a[$i] === $x){
        return true;
      }
    }

    return false;
}

$test = solution(['a', 'b', 'c', 'd', 'e', "f"], "a");

echo $test;