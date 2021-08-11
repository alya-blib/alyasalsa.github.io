<html>
<head>
	<meta charset="utf-8">
	<title>Data Barang</title>
</head>
<body>
<br>
<br>
<br>
<br>
<div class="container">
<h4>Edit Data</h4>
</div>
<div class="container">
<div class="row">
<table>
<form method="POST" action="<?php echo base_url()."index.php/data_barang/update"; ?>">
<tr>
	<td>kode produk</td>
	<td><input type="text" name="id_barang" value="<?php echo $id_barang; ?>"readonly/></td>
</tr>
<tr>
	<td>Nama produk</td>
	<td><input type="text" name="nm_barang"  value="<?php echo $nm_barang; ?>"/></td>
</tr>
<tr>
	<td>Harga Beli</td>
	<td><input type="text" name="harga_barang"  value="<?php echo $harga_barang; ?>"/></td>
</tr>
<tr>
	<td>deskripsi</td>
	<td><input type="text" name="deskripsi"  value="<?php echo $deskripsi; ?>"/></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="simpan"/></td>
</tr>
</table>
</div>
</div>
</body>
</html>
