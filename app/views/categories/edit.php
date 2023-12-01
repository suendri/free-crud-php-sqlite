<h2>Edit Category</h2>

<form action="<?php echo URL; ?>/categories/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['cat_id']; ?>">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="cat_name" value="<?php echo $data['row']['cat_name']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>