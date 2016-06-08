<?php

require('File.php');

class FizzBuzz
{
  public static $array = [];

  public static function start()
  {
    while(true) {
      print "好きなモードをえらんでねはぁと\n";
      print "モードがわからんとか言うな\n";
      $x = trim(fgets(STDIN));
      if($x === '1') {
        print "FizzBuzzなんだから整数を入力しなさいよね！！\n";
        $x2 = trim(fgets(STDIN));
        if(checkFizzBuzz($x)) {
          if($x2 === '0') {
            print "$x2\n";
            $array[] = $x2;
            $array[] = "$x2\n";
          }
          else if($x2 % 15 === 0) {
            print "FizzBuzz\n";
            $array[] = $x2;
            $array[] = "FizzBuzz\n";
          }
          else if($x2 % 5 === 0) {
            $array[] = $x2;
            print "Buzz\n";
            $array[] = "Buzz\n";
          }
          else if($x2 % 3 === 0) {
            $array[] = $x2;
            $array[] = "Fizz\n";
            print "Fizz\n";
          }
          else {
            print "$x2\n";
            $array[] = $x2;
            $array[] = "$x2\n";
          }
        }
      }
      else if($x === '2') {
        for($i = 0; $i < sizeof($array); $i += 2) {
          $j = $i + 1;
          print "$array[$i] ";
          print ":";
          print "$array[$j]";
        }
      } else if($x === '3') { // 履歴保存
        $file = fopen('data.txt', 'w');
        File::write($file); // arrayの中身をファイルに書き出す
        fclose($file);
      } else if($x === '4') { // 履歴出力
        $file = fopen('data.txt', 'w+');
        File::read($file); // ファイル出力用関数
        fclose($file);
      }
      else if($x === '0') {
         break;
      }
      else {
        echo "そんなモードないんだからね！！\n";
      } //end if
    }
    return 0; //end fizz buzz
  }

  /* 整数チェック用 */
  private static function checkFizzBuzz($x)
  {
    if ($x === '0') {
      return true;
    } else if (intval($x) === 0) {
      print "それは整数じゃないお！！\n";
      return false;
    } else {
      return true;
    }
  }
}
