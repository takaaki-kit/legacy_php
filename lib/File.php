<?php

require_once('FizzBuzz.php');

class File
{
  public static function write($f) {
    $str = '';
    for ($i = 0; $i < sizeof(FizzBuzz::$array); $i++) {
      if($i % 2 === 0) {
        $str = $str.FizzBuzz::$array[$i];
        $str = $str.',';
      }
      if($i % 2 === 1) {
        $str = $str.FizzBuzz::$array[$i];
      }
    }
    print "ほぞんしますた\n";
    return fwrite($f, $str);
  }

  public static function read($f) {
    $data = fread($f, 255);
    $datas = explode(',', $data);
    if ($datas[0] === '') {
      echo "からっぽだお\n";
    }
    for($i = 0; $i < sizeof($datas); $i++) {
      if($i === 0) {
        echo "$datas[$i]";
      } else {
        echo " : $datas[$i]";
      }
    }
  }
}
