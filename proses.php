<?php

session_start();

$_SESSION['final'] = [];

$bk = [
    0.108108,
    0.135135,
    0.108108,
    0.135135,
    0.135135,
    -0.108108,
    0.081081,
    0.054054,
    0.135135
];

$sum_s = 0;
$temp = [];
foreach($_SESSION['data'] as $data){
    print_r($data[6]);
    echo("^");
    print_r($bk[5]);
    echo("=");

    print_r(pow($data[6],$bk[5]));
    echo(" ");
    $vektor_s = 
    ($data[1]**$bk[0])
    *($data[2]**$bk[1])
    *($data[3]**$bk[2])
    *($data[4]**$bk[3])
    *($data[5]**$bk[4])
    *($data[6]**$bk[5])
    *($data[7]**$bk[6])
    *($data[8]**$bk[7])
    *($data[9]**$bk[8]);
    // print($vektor_s);
    $new_final = [
        "nama" => $data[0],
        "Vektor S" => $vektor_s
    ];
    $sum_s += $vektor_s;
    array_push($temp , $new_final);
}
// print($sum_s);
$sumv = 0;
foreach($temp as $data){
    $vektor_v = $data['Vektor S']/$sum_s;
    $new_data = [
        "nama" => $data['nama'],
        "Vektor V" => $vektor_v
    ];
    $sumv += $vektor_v;
    array_push($_SESSION['final'],$new_data);
    // print_r($_SESSION['final']);
}


if ($sumv == 1) {
    header("location: hasil.php");
}else {
    print($sumv);
    print("Sum of V != 1");


}
