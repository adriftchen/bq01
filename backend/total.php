<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$tstr[$do];?></p> <!-- 這裡的do來自於backend.php#93 網址get到的欄位值 -->
        <form method="post" action="./api/edit.php"> <!-- api/update.php已刪，這裡要改連結到api/edit.php -->
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="25%"></td>
                        <td width="25%">進站總人數</td>
                        <td width="25%"><input type="text" name="total" value="<?=$Total->find(1)['total'];?>"></td>
                        <input type="hidden" name="id[]" value="1"> <!-- 沿用edit的程式，設id[] -->
                        <td width="25%"></td>
                      
                    </tr>

                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <td width="200px">
                        </td>
                        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
</div>