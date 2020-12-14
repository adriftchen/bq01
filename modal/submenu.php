<!-- 複製自modal/menu.php -->
<?php

include_once "../base.php";

echo $_GET['id']; //可看是哪一張主選單(parent)下的次選單 (此id是主選單的)

$subs=$Menu->all(['parent'=>$_GET['id']]); 

// print_r($subs);

?>
<h3>編輯次選單</h3>
<hr>
<form action="api/editsub.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>次選單文字</td>
        <td>次選單連結</td> <!-- 此行由下面tr往上移，調整版面--> 
        <td>刪除</td>
    </tr>
    <?php
    foreach($subs as $sub){
    ?>
    <tr>
        <td><input type="text" name="text[]" value="<?$sub['text'];?>"></td> <!-- 此行由上面tr往上移，調整版面--> 
        <td><input type="text" name="href[]" value="<?$sub['href'];?>"></td> 
        <td><input type="checkbox" name="del[]" id="" value="<?$sub['id']?>;"></td> <!-- 增加刪除checkbox -->
        <input type="hidden" name="id[]" value="<?$sub['id'];?>">
    </tr>
    <?php
        }
    ?>
    <tr id="btn">
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="hidden" name="parent" value="<?=$_GET['id'];?>"> <!-- 增加此行，這邊的parent id 要給api/editsub.php 內的判斷式新增與否用的 -->
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
            <input type="button" value="更多次選單" onclick="more()">
        </td>
    </tr>
</table>
</form>

<script>
funciton more(){
    let str=`

    <tr>
    
        <td><input type="text" name="text2[]" value=""></td> 
        <td><input type="text" name="href2[] value=""></td> 
        <td></td>
    </tr>
    `
    $("#btn").before(str)
}

</script>
    
    