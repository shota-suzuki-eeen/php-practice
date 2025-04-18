<?php
// Q1 変数と文字列
$myName = '鈴木';
echo "私の名前は「" . $myName . "」です。";

// Q2 四則演算
$num = 5 * 4;
echo " " . $num . "\n";
echo $num / 2;

// Q3 日付操作
$date_time = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $date_time . "です。";

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device !== 'windows' && 'mac') {
  echo "どちらでもありません。";
}
if ($device === 'windows') {
  echo "使用OSは、windowsです。";
}
if ($device === 'mac') {
  echo "使用OSは、macです。";
}

// Q5 条件分岐-2 三項演算子
$age = 26;

if ($age < 18) {
  echo "未成年です。";
}
if ($age >= 18) {
  echo "成人です。";
}

// Q6 配列
$prefecture = ["茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県"];
echo $prefecture[2] . "と" . $prefecture[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$prefecture = [
  "茨城県" => "水戸市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "埼玉県" => "さいたま市",
  "千葉県" => "千葉市",
  "東京都" => "新宿区",
  "神奈川県" => "横浜市"
];

foreach ($prefecture as $value) {
  echo $value;
  echo "\n";
}

// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文
