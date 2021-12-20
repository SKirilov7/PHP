<?php

$amount = readline();

while ($amount !== 'END'){
  if (filter_var($amount, FILTER_VALIDATE_INT)){
      echo "$amount is integer type".PHP_EOL;
  } else if (filter_var($amount, FILTER_VALIDATE_FLOAT)){
      echo "$amount is floating point type".PHP_EOL;
  } else if (filter_var($amount, FILTER_VALIDATE_BOOL)) {
      echo "$amount is boolean type".PHP_EOL;
  } else {
      if (strlen($amount) === 1) {
          echo "$amount is character type" . PHP_EOL;
      } else{
          echo "$amount is string type" . PHP_EOL;
      };
  };
  $amount = readline();
};