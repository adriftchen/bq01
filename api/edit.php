<?php
include "../base.php";
// print_r($_POST); 
//要檢查可先關掉to()，先print_r出來看
$table=$_POST['table'];
$db=new DB($table);

// title.php隱藏欄位的那個id post帶過來
foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){

        $db->del($id);

    }else{

        $row=$db->find($id);
        
        switch($table){
            case"title":
                $row['sh']=($id==$_POST['sh'])?1:0;
            break;
            case"ad": /* 拿掉break，讓case ad、mvim都執行一樣的程式 */
            case"mvim":
            case"image":
                $row['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "total":
                $row['total']=$_POST['total'];
            break;

        }

        //已宣告欄位，即使沒有值還是會有該欄位，如此會有進站人數如此會有noitce，fixed>要加判斷式
        if(!empty($_POST['text'])){

        $row['text']=$_POST['text'][$key];
        }
        $db->save($row);

    }


}

to("../backend.php?do=$table");

?> 