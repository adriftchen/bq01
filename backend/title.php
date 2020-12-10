<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$tstr[$do];?></p> <!-- 這裡的do來自於backend.php#93 網址get到的欄位值 -->
        <form method="post" action="./api/edit.php"> <!-- api/update.php已刪，這裡要改連結到api/edit.php -->
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="45%">網站標題</td>
                        <td width="23%">替代文字</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td></td>
                    </tr>
                    <!-- 增加php程式，有些參數需寫成陣列形式如text[]，不然異動的資料會被最後的那筆蓋過去，都只顯示一筆 -->
                    <?php
                $rows=$Title->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <td width="45%"><img src="./img/<?=$row['img'];?>" style="width:300px;height:30px"></td>
                    <td width="23%"><input type="text" name="text[]" value="<?=$row['text'];?>"></td>
                    <td width="7%"><input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>"> <!-- 添加隱藏欄位，辨識id用 -->
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