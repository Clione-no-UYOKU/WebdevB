<?php
$a = ["田中","井上"];
echo $a[0];//田中

$name = [
    0 => '佐藤',
    1 => '鈴木',
    2 => '高橋',
];

echo $name['takahashi'];

//ver_dump
//var_dump($name);
//自動的に素数の数だけループします
//ループすると、配列の要素がそれぞれasの後の変数に代入されます。
//代リがループの数だけじっこうされます。
foreach ($name as $value) {
    echo "名前は" . $value .'<br>';
}

//キーを扱う場合の書き方
foreach ($name as $key => $value) {
    echo "キーは" . $key . "、名前は" . $value . '<br>';
}


$people[0] = '亀頭';
$people[1] = '森';
$people[2] = '棚橋';

foreach($people as $key => $value){
  echo 'キーは' . $key . '、名前は' . $value . '<br>';
}

$a = ['A', 'B', 'C'];

var_dump($a);

$b[] = 'C';
$b[] = 'D';
$b[] = 'E';

var_dump($b);

$c = array('E', 'F', 'G');
//近年では、[]を使った配列の作成が一般的