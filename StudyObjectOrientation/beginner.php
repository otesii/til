<?php

// クラスとオブジェクト（初級）
// https://qiita.com/mpyw/items/41230bec5c02142ae691#%E3%82%AF%E3%83%A9%E3%82%B9%E3%81%A8%E3%82%AA%E3%83%96%E3%82%B8%E3%82%A7%E3%82%AF%E3%83%88%E5%88%9D%E7%B4%9A

class BeginnerRobot
{
    // private変数にするとクラス外から参照不可
    private $name = '';

    // getter
    public function setName(string $name)
    {
        $this->name = $name;
    }

    // setter
    public function getName()
    {
        return $this->name;
    }
}

// インスタンス化していないためエラーになる
// $this->setName('ロボ子');
// print($this->getName());

$a = new BeginnerRobot; // インスタンス化
$a->setName('ロボ太郎');

$b = new BeginnerRobot; // インスタンス化
$b->setName('ロゴ次郎');

print($a->getName());
print($b->getName());
