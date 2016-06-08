<?php

require('File.php');

class FizzBuzz
{
  public static $array = [];

  public static function func()
  {
    while(true) {
      print "好きなモードをえらんでねはぁと\n";
      print "1 -> FizzBuzzで遊ぶ\n";
      print "2 -> 今回の履歴を表示\n";
      print "3 -> 今回の履歴を保存\n";
      print "4 -> 保存した履歴を表示\n";
      $x = trim(fgets(STDIN));
      if($x === '1') {
        print "FizzBuzzなんだから整数を入力しなさいよね！！\n";
        $x2 = trim(fgets(STDIN));
        if(self::fizzbuzzCheckNum($x2)) {
          if($x2 === '0') {
            print "$x2\n";
            self::$array[] = $x2;
            self::$array[] = "$x2\n";
          }
          else if($x2 % 15 === 0) {
            print "FizzBuzz\n";
            self::$array[] = $x2;
            self::$array[] = "FizzBuzz\n";
          }
          else if($x2 % 5 === 0) {
            self::$array[] = $x2;
            print "Buzz\n";
            self::$array[] = "Buzz\n";
          }
          else if($x2 % 3 === 0) {
            self::$array[] = $x2;
            self::$array[] = "Fizz\n";
            print "Fizz\n";
          }
          else {
            print "$x2\n";
            self::$array[] = $x2;
            self::$array[] = "$x2\n";
          }
        }
      }
      else if($x === '2') {
        for($i = 0; $i < sizeof(self::$array); $i += 2) {
          print self::$array[$i];
          print " : ";
          print self::$array[$i+1];
        }
      } else if($x === '3') { // 履歴保存
        $f = fopen('data.txt', 'w');
        File::write($f); // arrayの中身をファイルに書き出す
        fclose($f);
      } else if($x === '4') { // 履歴出力
        if ($f = @fopen('data.txt', 'r')) { ;
          File::read($f); // ファイル出力用関数
          fclose($f);
        } else {
          echo "からっぽだお\n";
        }
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
  private static function fizzbuzzCheckNum($x)
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
