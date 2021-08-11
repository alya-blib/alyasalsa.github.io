<html>
<head>
	<meta charset="utf-8">
	<title> input Data Barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php">OUR SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php">TESTIMONIALS</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>
	
    <br>
><div class="container">
<div class="row">
<table>
<form method="POST" action="<?php echo base_url()."index.php/data_barang/insert_barang"; ?>">
<tr>
	<td>kode produk</td>
	<td><input type="text" name="id_barang"/></td>
</tr>
<tr>
	<td>Nama produk</td>
	<td><input type="text" name="nm_barang"/></td>
</tr>
<tr>
	<td>Harga produk</td>
	<td><input type="text" name="harga_barang"/></td>
</tr>
<tr>
	<td>deskripsi</td>
	<td><input type="text" name="deskripsi" class="form-control rows=5"/></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="simpan"/></td>
</tr>
</table>
</div>
</div>
<footer class="mt-5 bg-dark">
        <div class="container">
            <div class="row text-white p-4 text-justify">
                <div class="col-md-4">
                    <h4>Tentang Kami</h4>
                        web weiss adalah perusahaan perancang situs website dan internet marketing profesional yang sudah banyak dipercaya oleh berbagai macam usaha,
                        untuk memudahkan dalam marketing digital agency dengan memberikan hasil yang terbaik, jujur, profesional tepat waktu adalah prinsip kami
                </div>
                <div class="col-md-4">
                    <h4>Layanan Kami</h4>
                        Jasa Pembuatan Website<br>
                        Jasa SEO Website<br>
                        Google Adwor
                </div>
                <div class="col-md-4">
                    LANGANAN NEWSLETTER
                    <input type="text" nama="" class="form-control rounded-pill mt-3" placeholder="masukkan email anda">
                    <botton class="btn btn-outline-primary rounded-circle mr-3 mt-3">
                        <i class="fab fa-instagram"></i>
                    </botton>
                    <botton class="btn btn-outline-primary rounded-circle mr-3 mt-3">
                        <i class="fab fa-facebook-square"></i>
                    </botton>
                    <botton class="btn btn-outline-primary rounded-circle mr-3 mt-3">
                        <i class="fab fa-twitter-square"></i>
                    </botton>
                    <botton class="btn btn-outline-primary rounded-circle mr-3 mt-3">
                        <i class="fab fa-youtube"></i>
                    </botton>
                    <botton class="btn btn-outline-primary rounded-circle mr-3 mt-3">
                        <i class="fas fa-envelope"></i>
                    </botton>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>