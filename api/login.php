<?php


include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

// if($acc=='admin' && $pw='1234'){
//   $check=1; 確定是管理員才登入
// }else{
//     $check=$Admin->count(['acc'=>$acc,"pw"=>$pw]);
// }

//撈帳密用count，不要用find=>不會真的把資料丟出來，較安全
$check=$Admin->count(['acc'=>$acc,"pw"=>$pw]);


if($check>0){
  $_SESSION['login']=$acc;
  to("../backend.php");
}else{
  to("../index.php?do=login&err=1");
}


?>
