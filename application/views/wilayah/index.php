<h1>Data Wilayah</h1>

<table border="1px">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Wilayah</th>
			<th>Wilayah</th>
			<th>Data Wilayah</th>
			<th>Keterangan</th>
			<th><a href="<?php echo base_url(); ?>index.php/Wilayah/add">Tambah</a></th>
			
		</tr>
	</thead>
	<tbody>
	<?php $no=1; foreach ($Wilayah as $layah) {?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $layah->nama_wilayah;?></td>
			<td><?php echo $layah->wilayah;?></td>
			<td><?php echo $layah->data_wilayah;?></td>
			<td><?php echo $layah->keterangan;?></td>
			<td>
				<a href="<?php echo base_url();?>index.php/wilayah/update/<?php echo $layah->id_wilayah;?>" onclick="return confirm('Anda yakin ingin mengedit?');">Ubah</a></th>
				<a href="<?php echo base_url();?>index.php/wilayah/delete/<?php echo $layah->id_wilayah;?>" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a></th>
			</td>
		</tr>
		<?php } ?>
	</tbody>


</table>