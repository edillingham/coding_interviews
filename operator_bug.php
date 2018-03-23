<?php

// find the bug
  
$amount = '3.00';
$fee = '0.00';
$total = number_format($amount + $fee, 2);

if($fee = 0)
  echo "there are no additional fees. your total is {$total}";
else
  echo "you will be charged an additional fee of {$fee}. total: {$total}";
