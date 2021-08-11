<html lang="en" id="home" style="scroll-behavior: smooth">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title><?php echo $judul; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#"><strong>WEISS WEB DEVELOPER</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil/index.php/login/logout">LOGOUT </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil/index.php">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil/index.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil/index.php">OUR SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil/index.php">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="http://localhost/profil/index.php">TESTIMONIALS</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil/index.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <center>
    <h4>DATA PRODUK</h4>

<table border="1" style="border-collapse:collapse" width="50%">
	<tr style="background:gray;">
		<th>ID Barang2</th>
		<th>Nama Barang</th>
		<th>Harga barang</th>
		<th>deskripsi</th>
		<th>action</th>
</tr>
<?php foreach($data as $d){  ?>
	<tr>
	<td><?php echo $d['id_barang']; ?></td>
	<td><?php echo $d['nm_barang']; ?></td>
	<td><?php echo $d['harga_barang']; ?></td>
	<td><?php echo $d['deskripsi']; ?></td>
	<td align="center">
        <a href="<?php echo base_url(). "index.php/data_barang/edit_data/".$d['id_barang']; ?>">Edit</a> ||
		<a href="<?php echo base_url(). "index.php/data_barang/delete/".$d['id_barang']; ?>">Delete</a>
	</td>
	</tr>
<?php } ?>
</table>
<a href="<?php echo base_url()."index.php/data_barang/tambah_aksi"; ?>">Tambahan Data</a>
</center>
</body>
</html>

    

    