<?php



session_start();
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}
if (isset($_POST["btn2"])) {
    $newdata = [
        $_POST['nameInput'],
        $_POST['c1Input'],
        $_POST['c2Input'],
        $_POST['c3Input'],
        $_POST['c4Input'],
        $_POST['c5Input'],
        $_POST['c6Input'],
        $_POST['c7Input'],
        $_POST['c8Input'],
        $_POST['c9Input'],

    ];
    array_push($_SESSION['data'], $newdata);
} elseif (isset($_POST["btn1"])) {
    if ($_POST['nameInput'] != "") {
        $newdata = [
            $_POST['nameInput'],
            $_POST['c1Input'],
            $_POST['c2Input'],
            $_POST['c3Input'],
            $_POST['c4Input'],
            $_POST['c5Input'],
            $_POST['c6Input'],
            $_POST['c7Input'],
            $_POST['c8Input'],
            $_POST['c9Input'],

        ];
        array_push($_SESSION['data'], $newdata);
    }


    header("Location: proses.php");
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

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top mx-5 mt-4 " id="navbar">
                <div class="container">
                    <a href="index.php" class="navbar-brand mr-lg-5">SPK Weight Product</a>
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

    <section class="hero">
        <div class="d-flex justify-content-between align-items-baseline">

            <section class="form-holder container">
                <div class="content-hold bg-white py-5 px-4 rounded  animate__animated animate__fadeIn">
                    <div class="px-3">
                        <div class="py-4">

                            <div class="text-center">
                                <h5 class="">Masukkan Kandidat</h5>
                            </div>
                            <div class="container">
                                <form action="" method="post">

                                    <div class="form-row mb-2">
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="nameInput" id="nameInput" placeholder="Nama Kandidat">
                                        </div>

                                    </div>
                                    <div class="form-row mb-2">

                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c1Input" id="c1Input" placeholder="IPK">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c2Input" id="c2Input" placeholder="Nilai Rerata MK Prak">
                                        </div>

                                    </div>

                                    <div class="form-row mb-2">
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c3Input" id="c3Input" placeholder="Cara Menyampaikan Materi">
                                        </div>
                                    </div>

                                    <div class="form-row mb-2">
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c4Input" id="c4Input" placeholder="Sikap">
                                        </div>

                                    </div>

                                    <div class="form-row mb-2">

                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c5Input" id="c5Input" placeholder="Tanggung Jawab">
                                        </div>

                                    </div>

                                    <div class="form-row mb-2">

                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c6Input" id="c6Input" placeholder="Kerja Sama">
                                        </div>

                                    </div>

                                    <div class="form-row mb-2">


                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c7Input" id="c7Input" placeholder="Kesibukan">
                                        </div>
                                    </div>

                                    <div class="form-row mb-2">
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c8Input" id="c8Input" placeholder="Pengalaman Organisasi / Kepanitiaan">
                                        </div>

                                    </div>

                                    <div class="form-row mb-2">

                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c9Input" id="c9Input" placeholder="Rekomendasi Asisten">
                                        </div>
                                    </div>
                                    <div class="form-row py-2">
                                        <div class="col-md">

                                            <input type="submit" name="btn2" value="Tambahkan" id="btn1" class="btn btn-primary">
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <div class="py-5 px-5 bg-white">
                <div class="text-holder text-center">
                    <h1>Kandidat Saat Ini</h1>
                </div>
                <table id="myTable" class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama</th>
                            <th>IPK</th>
                            <th>Nilai Rerata MK Prak</th>
                            <th>Cara Penyampaian Materi</th>
                            <th>Sikap</th>
                            <th>Tanggung Jawab</th>
                            <th>Kerja Sama</th>
                            <th>Kesibukan</th>
                            <th>Kepanitiaan</th>
                            <th>Rekomendasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($_SESSION['data']); $i++) :



                        ?>

                            <tr>
                                <td><?= $_SESSION['data'][$i][0] ?></td>
                                <td><?= $_SESSION['data'][$i][1] ?></td>
                                <td><?= $_SESSION['data'][$i][2] ?></td>
                                <td><?= $_SESSION['data'][$i][3] ?></td>
                                <td><?= $_SESSION['data'][$i][4] ?></td>
                                <td><?= $_SESSION['data'][$i][5] ?></td>
                                <td><?= $_SESSION['data'][$i][6] ?></td>
                                <td><?= $_SESSION['data'][$i][7] ?></td>
                                <td><?= $_SESSION['data'][$i][8] ?></td>
                                <td><?= $_SESSION['data'][$i][9] ?></td>

                                <td>
                                    <a href="edit.php?id=<?= $i ?>" class="edit pr-3"><i class="fa fa-pencil"></i></a>
                                    <a href="delete.php?id=<?= $i ?>" class="delete "><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                        <?php endfor; ?>
                    </tbody>
                </table>
                <form action="" method="post">
                    <input type="submit" name="btn1" value="Hitung" id="btn1" class="btn btn-primary">
                </form>

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