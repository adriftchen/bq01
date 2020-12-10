<?php
include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);

$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}

if(!empty($_POST['text'])){

    $data['text']=$_POST['text'];
}

/*新增管理者帳密
改完backend/admin.php、modal/admin.php後仍無法新增使用者
因為在這個檔案內原來的程式碼執行到最後是$data['sh']=0，沒東西
=>改成以下switch case

*/

    switch($table){
        case "title":
            $data['sh']=0;
        break;
        case "admin":
            $data['acc']=$_POST['acc'];
            $data['pw']=$_POST['pw'];
        break;
        case "menu":

        break;
        default:
        $data['sh']=1;
    }


$db->save($data);

to("../backend.php?do=$table");

?>