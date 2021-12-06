<?php
session_start();

if (isset($_POST['btn1'])) {
    unset($_SESSION['data'][$_GET['id']]);
    $_SESSION['data'] = array_values($_SESSION['data']);
    header("Location: hitung.php");
    exit();
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

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top mx-5 mt-4 bg-dark" id="navbar">
                <div class="container">
                    <a href="index.html" class="navbar-brand mr-lg-5">SPK Weight Product</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigate" aria-controls="navigate" aria-expanded="false" aria-label="Toggle navigation">
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

    <section class="holder" style="padding: 15rem 0;">
        <div class="container bg-white py-5 px-4 rounded  animate__animated animate__fadeIn">
            <div class="px-3">
                <div class="py-4">
                    <div class="text-center">
                        <h5 class="">Hapus Kandidat</h5>
                    </div>
                    <h6>Yakin ingin menghapus data berikut :</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <p>Nama : <?= $_SESSION['data'][$_GET['id']][0] ?></p>
                            </div>
                            <div class="col-sm">
                                <p>IPK : <?= $_SESSION['data'][$_GET['id']][1] ?></p>
                            </div>
                            <div class="col-sm">
                                <p>Nilai Rerata MK Prak : <?= $_SESSION['data'][$_GET['id']][2] ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <p>Cara Penyampaian Materi : <?= $_SESSION['data'][$_GET['id']][3] ?></p>
                            </div>
                            <div class="col-sm">
                                <p>Sikap : <?= $_SESSION['data'][$_GET['id']][4] ?></p>
                            </div>
                            <div class="col-sm">
                                <p>Tanggung Jawab : <?= $_SESSION['data'][$_GET['id']][5] ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <p>Kerja Sama : <?= $_SESSION['data'][$_GET['id']][6] ?></p>
                            </div>
                            <div class="col-sm">
                                <p>Kesibukan : <?= $_SESSION['data'][$_GET['id']][7] ?></p>
                            </div>
                            <div class="col-sm">
                                <p>Kepanitiaan: <?= $_SESSION['data'][$_GET['id']][8] ?></p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <p>Rekomendasi: <?= $_SESSION['data'][$_GET['id']][9] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" method="post">
                <input type="submit" name="btn1" value="Hapus" id="btn1" class="btn btn-primary">
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>

</body>

</html>