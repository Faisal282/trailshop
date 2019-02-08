<form action="<?= base_url('admin/updateProduk/')  ?>" method="post">
<?php foreach ($produk as $p) { ?>
	<input type="hidden" name="id_produk" value="<?= $p['id_produk'] ?>">
	<input type="text" name="nama_produk" id="nama_produk" value="<?= $p['nama_produk'] ?>">
	<select name="jenis_produk" id="jenis_produk">
		<option value="bebek">bebek</option>
		<option value="metic">metic</option>
		<option value="sport">sport</option>
		<option value="street">street</option>
		<option value="trail">trail</option>
	</select>
	<select name="id_brand" id="id_brand">
	<?php foreach ($brand as $b) { ?>
		<option value="<?= $b['id_brand'] ?>"><?= $b['nama_brand'] ?></option>
	<?php } ?>
	</select>
	<input type="text" name="nama_produk" id="nama_produk" value="<?= $p['nama_produk'] ?>">
	<button type="submit">UPDATE</button>
<?php } ?>
</form>