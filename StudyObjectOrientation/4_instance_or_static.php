<?php

/**
 * 2_intermediate.phpでインスタンス化について
 * 3_class_constant.phpで静的メソッドについて勉強したが
 * それぞれ、どのような利点があるのかが分からなかったので深掘り
 */

// 説明が分かりやすかった
// 【PHP入門】staticプロパティとstaticメソッド
// https://medium-company.com/php-static/

// コードを参考にした
// 概念を理解！PHPでstatic変数を使う方法【初心者向け】
// https://techacademy.jp/magazine/18797

class Human
{
    public $name;                         // インスタンス変数
    public static $static_name = "human"; // static変数、クラス変数とも言う
}

// インスタンス毎に管理されているので色々な人を生成できる
$aoki = new Human();
$aoki->name = "aoki";

$yamada = new Human();
$yamada->name = "yamada";

// static変数はインスタンスに関係なく共通で管理している上書きされてしまう
Human::$static_name = "sakai";
Human::$static_name = "tanaka";

print($aoki->name . "\n");          // aoki
print($yamada->name . "\n");        // yamada
print(Human::$static_name . "\n");  // tanaka
