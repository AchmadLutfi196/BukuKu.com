<?php
session_start();
require_once 'config.php';
// Cek apakah pengguna sudah login
$isLoggedIn = isset($_SESSION['username']);


// Ambil data buku berdasarkan ID

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuKu.com</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/detilProduk.css">

</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>


<div>
    <?php include 'buku.php'?>
</div>



    <!--  Buku terbaru Section -->
    <?php include 'bukuterbaru.php';?>
    
    <!-- BUku rekomendasi -->
    <?php include 'bukurekomendasi.php';?>


    <!-- menu container -->
    <section class="container">
        <!-- <div class="row">
            <div class="col">
                <h4 class="mb-4 font-weight-bold">Testimonial</h4>
            </div>
            <div class="col-2">
                <h4 class="mb-4 font-weight-bold">Alamat</h4>
            </div>
            <div class="col-7">
                <h4 class="mb-4 font-weight-bold">Toko Terdekat</h4>
            </div>
        </div>     -->
        <div class="row">
            <div class="col-md-4">
                <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cardmenu2">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Testimonial</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-quote-left fa-lg"></i>
                                            <span class="ml-2">Pelayanan bagus, packing rapi, pengiriman cepat, terimakasih Bukuku.com</span>
                                        </div>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cardmenu2">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Testimonial</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-quote-left fa-lg"></i>
                                            <span class="ml-2">Layanan yang sangat baik dan cepat.</span>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="shippingCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cardmenu2">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <span class="ml-2">
                                        elvita | 08123456789
                                        <br>
                                        Jl. mertajasah No. 79,
                                        <br>
                                        Socah, Kab. Bangkalan,
                                        <br>
                                        Jawa Timur, 69191
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cardmenu2">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <span class="ml-2">
                                        andi | 082334567890
                                        <br>
                                        Jl. mangga No. 89,
                                        <br>
                                        Surabaya, Jawa Timur, 60189
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Add more shipping items here -->
                    </div>
                    <a class="carousel-control-prev" href="#shippingCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#shippingCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>                    
                </div>
            </div>
            <div class="col-md-4">
                <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cardmenu2">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Toko Terdekat</h5>
                                </div>
                                <div class="card-body">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9156099904684!2d112.74625451477555!3d-7.287122594736444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fea09dccc25f%3A0x303f6e1f1f57d8fe!2sGramedia%20Expo%20Surabaya!5e0!3m2!1sen!2sid!4v1623224452020!5m2!1sen!2sid" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cardmenu2">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Toko Terdekat</h5>
                                </div>
                                <div class="card-body">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.799355112598!2d-122.08424968468826!3d37.42206577982562!2m3!1f0!2f0!3f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb24c2c8e72d1%3A0x1dff7a39f7a42a64!2sGoogleplex!5e0!3m2!1sen!2sus!4v1623224486351!5m2!1sen!2sus" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- Add more store items here -->
                    </div>
                    <a class="carousel-control-prev" href="#storeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#storeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>                    
                </div>
            </div>
        </div>
    </section>
    


    
    
    
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-expand-lg footer-custom bg-custom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="home.php">Home</a></li>
                        <li class="list-inline-item"><a href="#Rekomendasi Buku">Buku Rekomendasi</a></li>
                        <li class="list-inline-item"><a href="#Buku Terbaru">Buku Terbaru</a></li>
                        <li class="list-inline-item"><a href="#">Tentang Kami</a></li>
                        <li class="list-inline-item"><a href="#">Kebijakan & Privasi</a></li>
                        <li class="list-inline-item"><a href="#">Hubungi Kami</a></li>
                        <li class="list-inline-item"><a href="#">Bantuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-bold">Metode Pembayaran</h5>
                    <img src="https://i.ibb.co.com/WDKRtNn/metode-Pembayaran.png" alt="Metode Pembayaran" width="500px" height="200px">
                </div>
                <div class="col-md-6">
                    <h5 class="font-weight-bold">Metode Pengiriman</h5>
                    <img src="https://i.ibb.co.com/v3w2sGR/Kurir.png" alt="kurir" width="350px" height="250px">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>&copy; 2024 Bukuku.com Company. All Rights Reserved.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Sosial media ikon (contoh) -->
                    <a href="#" class="mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/detailproduk.js"></script>
</body>
</html>