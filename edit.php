<?php 
session_start();

if (isset($_POST['btn1'])) {
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
    $_SESSION['data'][$_GET['id']] = $newdata;
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
<body >
<header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top mx-5 mt-4 bg-dark" id="navbar">
                <div class="container">
                    <a href="index.html" class="navbar-brand mr-lg-5">SPK Weight Product</a>
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

    <section class="form-holder" style="padding: 15rem 0;">
    <div class="container bg-white py-5 px-4 rounded  animate__animated animate__fadeIn">
                    <div class="px-3">
                        <div class="py-4">
                            <div class="text-center">
                                <h5 class="">Edit Kandidat</h5>
                            </div>
                            <div class="container">
                                <form action="" method="post">
                                    <div class="form-row mb-2">
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="nameInput" id="nameInput" value="<?= $_SESSION['data'][$_GET['id']][0] ?>">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c1Input" id="c1Input" value="<?= $_SESSION['data'][$_GET['id']][1] ?>">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c2Input" id="c2Input" value="<?= $_SESSION['data'][$_GET['id']][2] ?>">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c3Input" id="c3Input" value="<?= $_SESSION['data'][$_GET['id']][3] ?>">
                                        </div>
                                        
                                </div>
                                <div class="form-row mb-2">
                                        <div class="col-sm">
                                        <input type="text" class="form-control" name="c4Input" id="c4Input"  value="<?= $_SESSION['data'][$_GET['id']][4] ?>">
                                        </div>
                                        <div class="col-sm">
                                        <input type="text" class="form-control" name="c5Input" id="c5Input" value="<?= $_SESSION['data'][$_GET['id']][5] ?>">
                                        </div>
                                        <div class="col-sm">
                                        <input type="text" class="form-control" name="c6Input" id="c6Input" value="<?= $_SESSION['data'][$_GET['id']][6] ?>">
                                        </div>
                                        <div class="col-sm">
                                        <input type="text" class="form-control" name="c7Input" id="c7Input" value="<?= $_SESSION['data'][$_GET['id']][7] ?>">
                                        </div>
                                </div>
                                <div class="form-row mb-2">
                                        <div class="col-sm">
                                        <input type="text" class="form-control" name="c8Input" id="c8Input" value="<?= $_SESSION['data'][$_GET['id']][8] ?>">
                                            </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" name="c9Input" id="c9Input" value="<?= $_SESSION['data'][$_GET['id']][9] ?>">
                                        </div>
                                </div>
                                <div class="form-row py-2">
                                    <div class="col-md">
                                        <input type="submit" name="btn1" value="Ubah" id="btn1" class="btn btn-primary">
                                        <!-- <input type="submit" name="btn2" value="Tambahkan" id="btn1" class="btn btn-outline-primary"> -->
                                    </div>

                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>

</body>
</html>