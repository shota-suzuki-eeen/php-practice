<?php
// Q1 変数と文字列
$myName = '鈴木';
echo "私の名前は「" . $myName . "」です。";

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
$dateTime = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $dateTime . "です。";

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'windows') {
  echo "使用OSは、windowsです。";
}
else {
  echo ($device === 'mac')?"使用OSは、macです。":"どちらでもありません";
}

// Q5 条件分岐-2 三項演算子
$age = 26;

echo ($age < 18)?"未成年です。":"成人です。";

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
  "神奈川県" => "横浜市",
];

foreach ($prefecture as $city) {
  echo $city . "\n";
}

// Q8 連想配列-2
foreach ($prefecture as $pref => $city) {
  if ($pref === "埼玉県") {
    echo $pref . "の県庁所在地は、" . $city . "です。";
  }
}

// Q9 連想配列-3
foreach ($prefecture as $pref => $city) {
  if ($pref === "愛知県" || $pref === "大阪府") {
    echo $pref . "は関東地方ではありません。\n";
  } else {
    echo $pref . "の県庁所在地は、" . $city . "です。\n";
  }
}

// Q10 関数-1
function hello($name)
{
  echo $name . "さん、こんにちは。\n";
}

hello("金谷");
hello("安藤");

// Q11 関数-2
function calcTaxInPrice($price)
{
  $tax = $price + ($price * 0.1);
  return $tax;
}

$price = 1000;
$tax = calcTaxInPrice($price);
echo $price . "円の商品の税込価格は" . $tax . "円です。";

// Q12 関数とif文
function distinguishNum($Num)
{
  if ($Num % 2 === 0) {
    echo $Num . "は偶数です。\n";
  } else {
    echo $Num . "は奇数です。\n";
  }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($str)
{
  switch ($str) {
    case 'A':
    case 'B':
      return "合格です。\n";
    case 'C':
      return "合格ですが追加課題があります。\n";
    case 'D':
      return "不合格です。\n";
    default:
      return "判定不明です。講師に問い合わせてください。\n";
  }
}

echo evaluateGrade('A');
echo evaluateGrade(12);
