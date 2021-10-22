<?php

include "functions.php";
$tempat_id;

if (isset($_GET["tempat_id"])) {
    $tempat_id = $_GET["tempat_id"];
    $row = readTempatDet($tempat_id);
    $tempatID = tempatID($tempat_id);
} else {
    $tempatID = tempatID();
    $row = readTempatDet();
}




require '../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$dompdf = new Dompdf();
$options = new Options();
$options->setIsRemoteEnabled(true);

$dompdf->setOptions($options);
$dompdf->output();

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .container {
            width: 90%;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            padding: 10px;
        }

        .table td {
            padding: 5 10px;
        }

        .center {
            margin: 0 auto;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            margin: 0px;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .mt-1 {
            margin-top: 15px;
        }

        .mt-2 {
            margin-top: 30px;
        }

        .mb-1 {
            margin-bottom: 15px;
        }

        .mb-2 {
            margin-bottom: 30px;
        }

        .ml-1 {
            margin-left: 15px;
        }

        .ml-2 {
            margin-left: 30px;
        }

        .mr-1 {
            margin-right: 15px;
        }

        .mr-2 {
            margin-right: 30px;
        }

        .logoKiri {
            position: absolute;
            left: 20px;
            top: 0;
        }

        .logoKanan {
            position: absolute;
            right: 20px;
            top: 0;
        }
    </style>
</head>

<body>';

$html .= '
    <div class="container">
         <div class="top">
            <div class="logoKiri"><img src="http://hagarsawor.my.id/assets/images/tutwuri.png" alt="" width="80"></div>
            <div class="kop">
                <h4 class="text-center">YAYASAN PENDIDIKAN KRISTEN DITANAH PAPUA</h3>
                <h4 class="text-center">SMP YPK KOTARAJA JAYAPURA</h3>
                <h3 class="text-center">SEKOLAH STANDAR NASIONAL MANDIRI</h2>
                <h3 class="text-center">TERAKREDITASI "A"</h2>
                <p class="text-center miring"><i>Alamat: Kompleks Pendidikan Kristen</i></p>
            </div>
            <div class="logoKanan"><img src="http://hagarsawor.my.id/assets/images/ypk.png" alt="" width="100"></div>
        </div>
    <hr> 
    <h5 class="text-center mt-1"><u>DAFTAR INVENTARIS DAN PENGGUNAAN SARAN PRASARANA</u></h5>';
foreach ($tempatID as $key => $tempat) {
    $html .= '
    <h5 class="text-center uppercase">DAFTAR INVENTARIS ' . $tempat['nm_tempat'] . '</h5>
    <table class="table center mt-1 mb-2" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Baik</th>
                <th>Sedang</th>
                <th>Rusak</th>
                <th>Ket</th>
            </tr>
        </thead>
        <tbody>';

    $no = 1;
    foreach ($row as $item) {
        if ($item['tempat_id'] === $tempat['tempat_id']) {
            $html .= "<tr>
                    <td>" . $no . "</td>
                    <td>" . $tempat['kode'] . str_pad($no, 2, '0', STR_PAD_LEFT) . "</td>
                    <td>" . $item['nm_barang'] . "</td>
                    <td>" . $item['jmlh'] . "</td>
                    <td>" . $item['baik'] . "</td>
                    <td>" . $item['sedang'] . "</td>
                    <td>" . $item['rusak'] . "</td>
                    <td>" . $item['ket'] . "</td>
                </tr>";
            $no++;
        }
    };

    $html .= '</tbody></table>';
}
$html .= '</body></html></div>';


$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream('Laporan', array('Attachment' => 0));
