<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
        <form method="post" action="./api/update.php?do=<?=$do;?>"> <!-- target="back"要刪掉 不然會導到已刪的iframe -->
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="45%">網站標題</td>
                        <td width="23%">替代文字</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                                value="<?=$addstr[$do];?>"></td>
                        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
</div>