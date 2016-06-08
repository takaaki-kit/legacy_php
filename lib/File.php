<?php

require_once('FizzBuzz.php');

class File
{
  public static function write($file) {
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
    return fwrite($file, $str);
  }

  public static function read($file) {
    $data = fread($file, 255);
    $datas = explode(',', $data);
    for($i = 0; $i < sizeof($datas); $i++) {
      if($i === 0) {
        echo "$datas[$i]";
      } else {
        echo " : $datas[$i]";
      }
    }
  }
}
