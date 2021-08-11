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

    <title>company profile</title>
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
                        <a class="nav-link ml-3 text-white" href="http://localhost/profil2/index.php/login">LOGIN </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link ml-3 text-white" href="#home">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="#about">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="#service">OUR SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link ml-3 text-white" href="#testimony">TESTIMONIALS</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3 text-white" href="#contact">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="jumbotron" style="background-image: url('img/jumbotron2.jpg');
    background-size: cover;
    height:620px;
    margin-top: 50px;">
        <h1 class="display-4" style="margin-top: 150px;
    margin-left:520px;
    font-size:42px;
    font-weight:bold;
    color:white;">buat website anda sekarang!</h1>
        <hr class="my-4" style="margin-left: 520px;
    width: 500px; ">
        <p class="lead" style="  margin-left: 520px;
    color:white">Jasa pembuatan website dengan harga terjangkau & proses cepat</p>
    </div>
	 <br>
		 <br>
		 <br>
		 <br>
    <div class="container" align="center">
        <div class="row text-center mt-5">

        <?php foreach ($data as $d) : ?>

        <div class="card ml-6" align="center" style="width: 20rem; margin-top: -100px; margin-left: 50px;">
        <h3 class="card-title mb-3"><?php echo $d['nm_barang']; ?></h3>
        </h5><?php echo $d['deskripsi']; ?></h5>
        <span class="badge badge-pill mb-3">Rp. <?php echo number_format($d['harga_barang']), 0,',','.' ?></span>
        <a href="http://localhost/profil2/index.php/info" class="btn btn-sm btn-primary rounded-pill mb-15">info beli</a>
         <br>
		 <br>
		 <br>
		 <br>
        </div>
		<?php endforeach; ?>
        </div>
	
        </div>
       
    </div>
	
	 
	

    <h3 class="mt-5 text-center about" id="about" style="position: relative;
    display: flex;
    justify-content: space-around; 
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    height: 160px;">ABOUT US</h3>
    <hr style="width: 100px;
    border-top:3px solid #eaeaea;
    margin-top: -55px;">

    <div class="bg-light">
        <div class="container text-justify p-5">
            <div class="row">
                <div class="col-md-6">
                    Menjadi perusahaan terbuka berskala nasional terkemuka yang dikenal sebagai mitra yang dapat
                    menyediakan solusi teknologi informasi terbaik untuk masyarakat Indonesia pada umumnya dan
                    perusahaan-perusahaan pada khususnya.
                </div>
                <div class="col-md-6">
                    Mengutamakan profesionalisme dan kompetensi tim untuk menghasilkan sistem terintegrasi antara satu
                    dengan lainnya yang dapat membantu mengurangi permasalahan dan dapat meningkatkan pertumbuhan laba
                    pelanggan kami.
                    Mengubah tantangan teknologi informasi menjadi peluang dan solusi bermanfaat untuk masyarakat pada
                    umumnya dan untuk perusahaan-perusahaan pada khususnya.
                    Menjalin kerja sama dengan business partner dalam mendistribusikan produk unggulan maupun solusi
                    teknologi informasi.
                </div>
            </div>
        </div>
    </div>

    <h3 class="mt-5 text-center service" id="service" style="position: relative;
    display: flex;
    justify-content: space-around; 
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    height: 160px;">OUR SERVICE</h3>
    <hr style="width: 100px;
    border-top:3px solid #eaeaea;
    margin-top: -55px;">

    <div class="bg-light">
        <div class="container text-justify p-4">
            <div class="row text-center mt-5">
                <div class="col-md-4">
                    <i class="fas fa-pen h1"></i>
                    <h3>desain profesional</h3>
                    Website dibuat dengan desain modern dan
                    profesional yang menggambarkan karakter brand Anda
                </div>
                <div class="col-md-4">
                    <i class="fas fa-calendar-times h1"></i>
                    <h3>free demo</h3>
                    Kami menyediakan FREE DEMO dan garansi uang kembali untuk website Anda,
                    sehingga tidak ada resiko bagi Anda
                </div>
                <div class="col-md-4">
                    <i class="fas fa-users h1"></i>
                    <h3>support tim</h3>
                    Anda dapat berkonsentrasi penuh terhadap bisnis Anda tanpa perlu khawatir, karena tim kami selalu
                    siap memberikan support
                    maksimal apabila Anda membutuhkan bantuan
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-4">
                    <i class="fas fa-tablet-alt h1"></i>
                    <h3>desain marketing tools</h3>
                    Kembangkan website untuk menjadi Marketing Tools dalam bisnis
                    dengan strategi Digital Marketing (SEO, SEM, Facebook, dsb)
                </div>
                <div class="col-md-4">
                    <i class="fas fa-chart-bar h1"></i>
                    <h3>CMS</h3>
                    Dengan menggunakan Content Management Software (CMS)
                    sebagai core dari website.
                </div>
                <div class="col-md-4">

                    <i class="fas fa-crop-alt h1"></i>
                    <h3>design</h3>
                    Mudah untuk digunakan oleh pengguna dengan menggunakan strategi UI/UX dalam Web Design
                </div>
            </div>
        </div>
    </div>

    <h3 class="mt-5 text-center portfolio" id="portfolio" style="position: relative;
    display: flex;
    justify-content: space-around; 
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    height: 160px;">PORTFOLIO</h3>
    <hr style="width: 100px;
    border-top:3px solid #eaeaea;
    margin-top: -55px;">
    <div class="container text-justify p-4">
        <div class="row text-center mt-5">
            <div class="col-md-4">
                <a href="">
				<img src="img/EE.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
				<img src="img/EE1.png" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
				<img src="img/EE2.jpg" class="img-thumbnail">
                </a>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-4">
                <a href="">
                    <img src="img/EE3.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <img src="img/EE4.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <img src="img/EE5.jpg" class="img-thumbnail">
                </a>
            </div>
        </div>

    </div>
    </div>
    <h3 class="mt-5 mb-3 text-center testimony" id="testimony" style="position: relative;
    display: flex;
    justify-content: space-around; 
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    height: 160px;">TESTIMONIALS</h3>
    <hr style="width: 100px;
    border-top:3px solid #eaeaea;
    margin-top: -55px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="testimonial pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <img src="img/QQ.jpg" class="rounded-circle" width="90%">
                            </div>
                            <div class="col-md-7 text-justify font-italic">
                                <h4>Catherine Hindra <small>CEO LINE Indonesia</small></h4>
                                sangat terpercaya, respon sangat cepat dan memuaskan, jangan ragu bikin jasa website
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="testimonial pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <img src="img/QQ2.jpg" class="rounded-circle" width="90%">
                            </div>
                            <div class="col-md-7 text-justify font-italic">
                                <h4>Robert Budi Hartono <small>CEO PT.Kreatifitas Sinergisme Teknoindo (KST)</small></h4>
                                Sangat mantap desainnya...good job...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="testimonial pt-5 pb-5" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <img src="img/QQ1.jpg" class="rounded-circle" width="90%">
                            </div>
                            <div class="col-md-7 text-justify font-italic">
                                <h4>Cyntia Tenggara <small>CEO PT. Handal Consulting and Training</small></h4>
                                hosting yang mantap, murah meriah, user friendly
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h3 class="mt-5 mb-3 text-center contact" id="contact" style="position: relative;
    display: flex;
    justify-content: space-around; 
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    height: 160px;">CONTACT US</h3>
    <hr style="width: 100px;
    border-top:3px solid #eaeaea;
    margin-top: -55px;">

<div class="container">
<div class="row">
<div class="col-md-7">
<table>
<form method="POST" action="<?php echo base_url()."index.php/kontak_keluhan/insert_data"; ?>">
<tr>

	<td>Id Pelanggan</td>
	<td><input type="text" name="id_pelanggan"/></td>
</tr>
</br>
<tr>
	<td>Nama Leungkap</td>
	<td><input type="text" name="nm_lengkap"/></td>
</tr>
<tr>
	<td>Email</td>
	<td><input type="text" name="email"/></td>
</tr>
<tr>
	<td>Pesan</td>
	<td><input type="text" name="pesan" class="form-control rows=5"/></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="simpan"/></td>
</tr>
</table>
</div>

<div class="col-md-3">
    <img src="img/uu.jpg" width="200px">
    </div>
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