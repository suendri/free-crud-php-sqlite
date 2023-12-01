<h2>Categories</h2>

<a href="<?php echo URL; ?>/categories/input" class="btn">Input Categori</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>EDIT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><a href="<?php echo URL; ?>/categories/edit/<?php echo $row['cat_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>