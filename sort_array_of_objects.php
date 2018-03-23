<?php

  $objects = [];
  
  for($i = 97; $i < 105; $i++) {
    $cls = new stdClass;
    $cls->key = -$i;
    $cls->value = str_repeat(chr($i), 8);
    $objects[] = $cls;
  }
  
  shuffle($objects);
  var_dump($objects);

  // now re-sort the array by the "value" property
  // your solution:
  
  

  var_dump($objects);

  // ideal solution:
  usort($objects, function($a, $b) {
    return $a->value <=> $b->value;
  });
