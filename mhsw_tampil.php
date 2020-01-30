<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

/**
 * Gosoftware Media Indonesia 2020
 * --
 * --
 * http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

$mhsw = new App\Mahasiswa();
$rows = $mhsw->tampil();

?>

<h2>
	DATA MAHASISWA
	<a href="<?php echo URL; ?>/mahasiswa/input" class="btn btn-primary float-right">TAMBAH</a>
</h2>
<table class="table table-bordered table-sm" id="dtb">
	<thead>
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=0; foreach ($rows as $row) { $no++; ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['mhsw_nim']; ?></td>
				<td><?php echo $row['mhsw_nama']; ?></td>
				<td>
					<a href="<?php echo URL; ?>/mahasiswa/edit/<?php echo $row['mhsw_id']; ?>" class="btn btn-sm btn-warning">
						<i class="fa fa-edit"></i> Edit
					</a>
					<a href="<?php echo URL; ?>/mahasiswa/detail/<?php echo $row['mhsw_id']; ?>" class="btn btn-sm btn-info">
						<i class="fa fa-info-circle"></i> Detail
					</a>
					<button type="button" class="btn btn-sm btn-danger" id="btn-delete" data-id="<?php echo $row['mhsw_id']; ?>">
						<i class="fa fa-trash"></i> Hapus
					</button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<!-- Modal hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteModalTitle"><i class="fe fe-trash"></i> KONFIRMASI HAPUS</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Apakah anda yakin menghapus data ini?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">BATAL</button>
				<button type="button" class="btn btn-danger" id="btn-delete-confirm">HAPUS</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal hapus -->

<script>	
	$(document).ready(function(){

		var mhsw_id;

		/* Proses delete */
		$(document).on('click', '#btn-delete', function(e){
			e.preventDefault();
			mhsw_id = $(this).attr("data-id");	
			$('#deleteModal').modal('show')		
		});
		
		$(document).on('click', '#btn-delete-confirm', function(){
			$.ajax({ 
				type: "POST",
				url: "<?php echo URL; ?>/mhsw_proses.php",
				data: { delete: 1, mhsw_id: mhsw_id},
				cache: false,
				success:function(data){
					$('#deleteModal').modal('hide');
					setTimeout(function(){
						location.reload();
					}, 500);	
				}  
			});  
		});	
		/* Proses delete */
	});
</script>
