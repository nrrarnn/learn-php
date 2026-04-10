<?php

  function triple_trouble(string $one, string $two, string $three): string {
    $result = "";
  
    for($i = 0; $i < strlen($one); $i++){
        $result .= $one[$i] . $two[$i] . $three[$i];
    }
    
    return $result;
    
  }

?>