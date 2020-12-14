<?php
include_once "../base.php";

// print_r($_POST);

foreach($_POST['id'] as $key=>$id){
  if(!isset($_POST['del']) && in_array($id,$_POST['del'])){
    $Menu->del($id); //此頁面只對menu作用，不需要前面指定$table=..、$db=..然後還從 $db->del($id)
  }else{
  $sub=$Menu->find($id);
  $sub['text']=$_POST['text'][$key];
  $sub['href']=$_POST['href'][$key];
  //除錯:關掉to()，先print_r出來看，把base檔function del echo出來看，將頁面的語法丟回SQL看

  $Menu->save($sub);
  }
}

if(isset($_POST['text2'])){
  foreach($_POST['text2'] as $key=>$text){
    if(!empty($text)){

    
    $add=[];
    $add['text']=$text;
    $add['href']=$_POST['href2'][$key];
    $add['parent']=$_POST['parent'];
    $add['sh']=1;

    $Menu->save($add);

    }
  }
}

to("../backend.php?do=menu");

?>