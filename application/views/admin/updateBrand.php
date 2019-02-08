<form action="<?= base_url('admin/updateBrand/')  ?>" method="post">
<?php foreach ($brand as $b) { ?>
	<input type="hidden" name="id_brand" value="<?= $b['id_brand'] ?>">
	<label for="nama_brand">Nama Brand</label>
	<input type="text" name="nama_brand" id="nama_brand" value="<?= $b['nama_brand'] ?>">
	<button type="submit">UPDATE</button>
<?php } ?>
</form>