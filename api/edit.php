<?php
include "../base.php";

$table=$_POST['table'];
$db=new DB($table);

// title.php隱藏欄位的那個id post帶過來
foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){

        $db->del($id);

    }else{

        $row=$db->find($id);
        $row['sh']=($id==$_POST['sh'])?1:0; /* if $id==$_POST['sh']則顯示，否 則隱藏 */
        $row['text']=$_POST['text'][$key];

        $db->save($row);

    }


}

to("../backend.php?do=$table");

?> 