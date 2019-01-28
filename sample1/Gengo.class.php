<?php
class Gengo {
  public static $gengoList = [
    ['name' => '㋿', 'timestamp' =>  1556636400],  // 2019-05-01,
    ['name' => '㍻', 'timestamp' =>  600188400],  // 1989-01-08,
    ['name' => '㍼', 'timestamp' => -1357635600], // 1926-12-25'
    ['name' => '㍽', 'timestamp' => -1812186000], // 1912-07-30
    ['name' => '㍾', 'timestamp' => -3216790800], // 1868-01-25
];

  public static function result_gengo($date) {
    $datetime = $date . '000000';
    $epoch_time = strtotime($datetime);
    foreach (self::$gengoList as $g) {
      if ($g['timestamp'] <= $epoch_time) {
        return $g['name'];
      }
    }
  }
}
?>
