<?php

  // write a function that will return an array of all factors of a given integer
  
  function findFactors($int) {
    // your code here
  }

  var_dump(findFactors(64));
  var_dump(findFactors(15));
  var_dump(findFactors(0));



  // one possible solution
  function findFactors($int) {
    $results = [];
  
    $half = ceil($int/2);
  
    for($i = 1; $i <= $half; $i++) {
      if($int % $i == 0) {
        $otherHalf = $int/$i;
        if(!isset($results[$otherHalf])) {  // avoid duplicate pairs
          $results[$i] = $int/$i;
        }
      }
    }
    return $results;
  }

  // another
  function findFactors($int) {
    $results = [];
  
    $max = ceil(sqrt($int));
  
    for($i = 1; $i <= $max; $i++) {
      if($int % $i == 0) {
        $results[$i] = $int/$i;        
      }
    }
    return $results;
  }
