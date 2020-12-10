<!-- 把文字串起來
  1.撈資料
  2.特定條件的才撈 'sh'=1
  3.foreach $str=$ad['text']
 -->
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
<?php

$ads=$Ad->all(['sh'=>1]);
$str="";
// foreach($ads as $ad){
//   $str=$str . $ad['text'] ."&nbsp;&nbsp;&nbsp;";
// }
// echo $str;


//程式跑完才丟到伺服器前端，可直接echo
foreach($ads as $ad){
 echo $ad['text'] ."&nbsp;&nbsp;&nbsp;";

}

?>

</marquee>