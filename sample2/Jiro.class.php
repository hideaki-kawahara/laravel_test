<?php
class Jiro {
  public static $recipe = [
    'ニンニク' => ['無し', '少なめ', '多め'],
    '野菜' => ['無し', '普通', '増し', '増し増し']
  ];

  public static function ginger($order) {
    foreach (Jiro::$recipe as $key => $value) {
      if ($key === 'ニンニク') {
        foreach ($value as $many) {
          if ($many === $order) {
            return TRUE;
          }
        }
      }
    }
    return FALSE;
  }

  public static function categoryGenerator() {
      yield "性別";
      yield from Jiro::genderGenerator();
      yield "職業";
      yield from Jiro::jobGenerator();
      yield "wwww";
      yield from ["aa", "bb"];
  }

  public static function genderGenerator()
  {
      yield "男";
      yield "女";
  }

  public static function jobGenerator()
  {
      yield "会社員";
      yield "自営業";
      yield "無職";
  }

}
//print var_dump(Jiro::$recipe);
print (Jiro::ginger('多め'));

// foreach(Jiro::categoryGenerator() as $value) {
//     print($value."\n");
// }
