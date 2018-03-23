<?php

  // count the number of each of the vowels in this string
  $string = 'the quick brown fox jumped over the lazy dogs';
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  $counts = [];


  // one solution
  $letters = str_split($string);
  foreach($vowels as $vowel) {
    foreach($letters as $letter) {
      if($letter == $vowel) {
        $counts[$vowel]++;
      }
    }
  }

  var_dump($counts);
