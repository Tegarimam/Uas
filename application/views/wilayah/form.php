<h1>form wilayah</h1>
<form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
	id_wilayah : <input type="text" name="id_wilayah" value="<?php echo $id_wilayah;?>"> <br> <br>
	<label>Nama Wilayah</label>
	<input type="text" name="nama_wilayah" value="<?php echo $nama_wilayah;?>">
	<br> <br>
	<label>Wilayah</label>
	<input type="text" name="wilayah" value="<?php echo $wilayah;?>">
	<br> <br>
	<label>Data Wilayah</label>
	<input type="text" name="data_wilayah" value="<?php echo $data_wilayah;?>">
	<br> <br>
	<!-- <label>wilayah json</label>
	<input type="file" name="data_wilayah" placeholder="wilayah" value="<?php echo $data_wilayah;?>">
	<br> <br> -->
	<label>Keterangan</label>
	<input type="text" name="keterangan" value="<?php echo $keterangan;?>">
	<br> 
	<button type="sumbit"><?php echo $button;?></button>

</form>