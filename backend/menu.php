<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="30%">主選單名稱</td>
                    <td width="30%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                    <td width="10%"></td>

                </tr>
                <?php
                $rows=$Menu->all();

                foreach($rows as $row){
                ?>
                <tr>
                <td ><input type="text" name="acc[]" value="<?=$row['acc'];?>" style="width:95%"></td>
                <td ><input type="password" name="pw[]" value="<?=$row['pw'];?>"></td>
                <td ></td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>"> <!-- 要有這行隱藏欄位，edit.php內的switch case會用到 -->
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px">
                    <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                            value="<?=$addstr[$do];?>"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div> 