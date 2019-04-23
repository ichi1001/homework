<?php
/*
$height = 230;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} elseif ($height >= 200) {
  echo "200cm 以上の方はご乗車できません。";// code...
}else {
  echo "ご乗車になれます。";
}

$weekday = "月曜";
switch ($weekday) {
  case '月曜':
    echo "可燃ゴミの日です。";// code...
    break;
  case '水曜':
    echo "資源ゴミの日です。";// code...
    break;
  default:
    echo "回収はありません。";// code...
    break;
}
*/
$weekday = "水曜";
switch ($weekday) {
  case "月曜":
  case "木曜":
   echo "可燃ゴミの日です。";
  case "水曜":
   echo "資源ゴミの日です。";
  default:
   echo "回収はありません。";
}
/*
echo "\n";

for($i = 0; $i < 10; $i++){
  echo $i;
}

echo "\n";
$total = 0;
echo $total;

echo "\n";
for ($i = 0; $i <= 100; $i++){
  $total += $i;
}
echo $total;

echo "\n";

$fruits = array("apple","orange","lemon");
 echo count($fruits);
*/
?>
