<?php

session_start();

// usort($_SESSION['final'], function($a, $b) {
//     return $a['Vektor V'] <=> $b['Vektor V'];
// });

$columns = array_column($_SESSION['final'], 'Vektor V');
array_multisort($columns, SORT_DESC, $_SESSION['final']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

    <script src="DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script src="DataTables/DataTables-1.10.25/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>




</head>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top mx-5 mt-4 " id="navbar">
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

    <section class="hero">
        <div class="d-flex justify-content-between ">

            <div class="container">
                <div class="py-5 px-4 bg-white">
                    <table id="myTable" class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Vektor V</th>
                                <!-- <th>Ranking</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_SESSION['final'] as $data) :



                            ?>

                                <tr>
                                    <td><?= $data["nama"] ?></td>
                                    <td><?= $data["Vektor V"] ?></td>

                                </tr>

                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="container">
                <div class="py-5 px-3 bg-white">
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

                                </tr>

                            <?php endfor; ?>
                        </tbody>
                    </table>
                    <a href="hitung.php" class="btn btn-primary">Tambahkan Lagi</a>
                </div>
            </div>

        </div>


    </section>

    <!-- <section class="mt-n5 head " id="">
        
    <div class="content container" style="padding: 15rem 0;">
    <div class="container py-5 px-5 bg-white" >
            <table id="myTable" class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Vektor V</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['final'] as $data) :



                    ?>
                    
                    <tr>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["Vektor V"] ?></td>
                        
                    </tr>

                    <?php endforeach ?>
                </tbody>
            </table>
            
        </div>
    </div>
        
        

    </section> -->
    

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>