<?php
session_start();
// [nama,c1,c2,c3,c4,c5,c6,c7]
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
    # code...
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body >

    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top mx-5 mt-4 " id="navbar">
                <div class="container">
                    <a href="index.php" class="navbar-brand mr-lg-5">SPK Weight Product</a>
                    <button class="navbar-toggler" type="button" 
                    data-toggle="collapse" data-target="#navigate" aria-controls="navigate" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse " id="navigate">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a href="hitung.php" class="nav-link text-white">Hitung</a>
                            </li>
        
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    

    <section class="mt-n5 head " >
        <div class="content container" style="padding: 15rem 0;">
            <h1 class="text-center text-white py-3 animate__animated animate__fadeInDown">
                Seleksi Asisten Praktikum
            </h1>
            <hr class="bg-danger">
            <p class="text-white text-center">
                Dengan Menggunakan metode Weighted Product, kita dapat menyeleksi kandidatnya sehingga kita dapat merangking
            </p>
        </div>
    </section>
    
    <section class="">
        <div class="py-5">
            <div class="container bg-white py-5 px-4 rounded">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-md-6">
                        <img src="assets/img2.png" alt="" class="img-fluid w-50">
                        <div class="text-right nt-5 mb-5 mb-md-0">
                            <img src="assets/img1.jpg" alt="" class="img-fluid w-75">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">

                        <!-- Preheading -->
                        <h6 class="mb-3 text-secondary">
                          Did You Know?
                        </h6>
            
                        <!-- Heading -->
                        <h1 class="font-weight-bold">SPPK </h1>
            
                        <!-- Text -->
                        <p class="font-size-lg text-muted">
                            Sistem Penunjang Pengambilan Keputusan atau kerap dipanggil dengan DSS. Adalah salah satu cara untuk mempertimbangkan pilihan pilihan yang ada dengan memanfaatkan metode metode yang ada. Kami Menggunakan Weighted Product, Karena dirasa cukup simple
                        </p>
                        <!-- <p class="mb-7 font-size-lg text-muted">
                          Third. For morning whales saw were had seed can't divide
                          it light shall moveth, us blessed given wherein.
                        </p> -->
            
                        <!-- Link -->
                        <!-- <a class="link-underline" href="#read_more">more</a> -->
            
                      </div>
                </div>
            </div>
        </div>
    </section>
    



    

    <footer class="bg-dark bg-cover pt-5" style="background-image: url(assets/pattern-1.svg);">
        <div class="py-lg-5 border-bottom border-secondary" >
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-3">
                        <h4 class="text-white mb-2">Universitas Jember</h4>
                        <ul class="list-unstyled list-inline mb-5 mb-md-0 text-secondary">
                            <li class="list-inline-item">
                                <a href="" class="text-secondary">
                                    <i class="fa fa-instagram"></i>
                                    <a href="" class="text-secondary">
                                        Fakultas Ilmu Komputer
                                    </a>
                                </a>
                            </li>
                           
                        </ul>
                    </div>

                   

                    <div class="col-6 col-sm">
                        <h5 class="text-white mb-2">Anggota</h5>
                        <ul class="list-unstyled mb-7 mb-sm-0">
                            <li>
                                <p class="text-secondary">Adwitya Sadhu Prayastita</p>
                            </li>
                            <li>
                                <p class="text-secondary">Yusrian Darus S.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm">
                        <h5 class="text-white mb-2"></h5>
                        <ul class="list-unstyled mb-7 mb-sm-0">
                            <li>
                                <p class="text-secondary">Anung Firdauzy</p>
                            </li>
                            <li>
                                <p class="text-secondary">Muhammad Wijayanto</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="container">
                <div class="row">
                    <div class="col md-auto">
                        <p class="mb-3 mb-md-0 font-size-xxs text-secondary">
                            @2021 All Right Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>

</body>
</html>