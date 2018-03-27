<?php

// find the bug
  
$amount = '0.00';

if(!$amount)
  echo "this item is free! enjoy.";
else
  echo "you owe {$amount}.";
