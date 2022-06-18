<?php

// 静的プロパティ / 静的メソッド / クラス定数
// https://qiita.com/mpyw/items/41230bec5c02142ae691#%E9%9D%99%E7%9A%84%E3%83%97%E3%83%AD%E3%83%91%E3%83%86%E3%82%A3--%E9%9D%99%E7%9A%84%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89--%E3%82%AF%E3%83%A9%E3%82%B9%E5%AE%9A%E6%95%B0

class ClassConstant
{
    // staticをつけると静的なものになる　→　インスタンスを生成せずに呼び出すことが可能になる
    
    const OBJECT_CONSTANT    = null;       // オブジェクト定数
    public static $propertiy = "hogehoge"; // 静的プロパティ

    // 静的メソッド
    public static function echo_method($str)
    {
        echo $str . "\n";
    }

    // // consttuctをprivate化すると外部からインスタンス化できない
    // // PHP Fatal error:  Uncaught Error: Call to private ClassConstant::__construct() from global scope in /home/otesii/projectenv/til/StudyObjectOrientation/classconstant.php:31
    // private function __construct()
    // {
    // }
}

// 静的プロパティへのアクセス
ClassConstant::echo_method("test");

// 静的メソッドへのアクセス
ClassConstant::echo_method(ClassConstant::$propertiy);

// インスタンス化してアクセスすること可能
$test = new ClassConstant();
$test->echo_method("instsance test");
