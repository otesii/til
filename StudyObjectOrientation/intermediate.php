<?php

// クラスとオブジェクト（中級）
// https://qiita.com/mpyw/items/41230bec5c02142ae691#%E3%82%AF%E3%83%A9%E3%82%B9%E3%81%A8%E3%82%AA%E3%83%96%E3%82%B8%E3%82%A7%E3%82%AF%E3%83%88%E4%B8%AD%E7%B4%9A

class IntermediateRobot
{
    private $name = '';

    // コンストラクタ：インスタンス生成時に自動的にコールされる
    public function __construct($name)
    {
        $this->setName($name);
    }

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

$a = new IntermediateRobot('ロボ太郎');  // コンストラクタが自動でコールされるので$nameを渡す必要がある
$b = new IntermediateRobot('ロゴ次郎');

print($a->getName());
print($b->getName());
