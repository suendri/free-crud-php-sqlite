<h2>Posts</h2>

<a href="<?php echo URL; ?>/posts/input" class="btn">Input Post</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>CATEGORI</th>
                  <th>TITLE</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['cat_name']; ?></td>
                        <td><?php echo $row['post_title']; ?></td>
                        <td><a href="<?php echo URL; ?>/posts/edit/<?php echo $row['post_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/posts/delete/<?php echo $row['post_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>