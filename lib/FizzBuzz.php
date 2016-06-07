<?php

$array = [];

function start()
{
  while (true) {
    print "好きなモードをえらんでねはぁと\n";
    print "モードがわからんとか言うな\n";
    $x = trim(fgets(STDIN));
    if ($x === '1') {
      print "FizzBuzzなんだから整数を入力しなさいよね！！\n";
      $x2 = trim(fgets(STDIN));
      if ($x2 % 15 === 0) {
        print "FizzBuzz\n";
        $array[] = $x2;
        $array[] = "FizzBuzz";
      }
      else if ($x2 % 5 === 0) {
        $array[] = $x2;
        print "Buzz\n";
        $array[] = "Buzz";
      }
      else if ($x2 % 3 === 0) {
        $array[] = $x2;
        $array[] = "Fizz";
        print "Fizz\n";
      }
      else {
        print "$x2\n";
        $array[] = $x2;
        $array[] = "$x2";
      }
    }
    else if ($x === '2') {
      for ($i = 0; $i < sizeof($array); $i += 2) {
        $j = $i + 1;
        print "$array[$i] : $array[$j]\n";
      }
    }
    else if ($x === '0') {
       break;
    }
    else {
      print "そんなモードないんだからね！！\n";
    }
  }
}
