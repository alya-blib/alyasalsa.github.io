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
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php/login/logout">LOGOUT </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php/data_barang">PRODUCT </a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php/kontak_keluhan">DAFTAR KELUHAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>
	
    <center>
	<br>
    <br>
    <br>
    <h4>DATA KELUHAN</h4>
    <button href="<?php echo base_url('kontak_keluhan/excel') ?>" type="button" class="btn btn-danger" class="list" method="get" action="<?= base_url ('kontak_keluhan'); ?>">Export To Excel</button>

<table border="1" style="border-collapse:collapse" width="50%">
	<tr style="background:gray;">
		<th>id pelanggan</th>
		<th>Nm leugkap </th>
		<th>email</th>
		<th>pesan</th>
</tr>
<?php foreach($data as $d){  ?>
	<tr>
	<td><?php echo $d['id_pelanggan']; ?></td>
	<td><?php echo $d['nm_leungkap']; ?></td>
	<td><?php echo $d['email']; ?></td>
	<td><?php echo $d['pesan']; ?></td>
<?php } ?>
</table>

</center>
</body>
</html>