<h2>Input Category</h2>

<form action="<?php echo URL; ?>/categories/save" method="post">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="cat_name" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>