<h2>Input Post</h2>

<form action="<?php echo URL; ?>/posts/save" method="post">
    <table>
        <tr>
            <td>KATEGORI</td>
            <td>
                <select name="post_id_cat">
                    <?php foreach ($data['optcat'] as $opt) { ?>
                        <option value="<?php echo $opt['cat_id']; ?>"><?php echo $opt['cat_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>TITLE</td>
            <td><input type="text" name="post_title" required></td>
        </tr>
        <tr>
            <td>TEXT</td>
            <td>
                <textarea name="post_text" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>