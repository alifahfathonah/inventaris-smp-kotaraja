<?php

include "functions.php";
if (isset($_GET["tempat_id"]) || isset($_GET["barang_id"])) {
    $tempat_id = $_GET["tempat_id"];
    $barang_id = $_GET["barang_id"];
    $row = readTempatDet($tempat_id, $barang_id);
} else {
    $row = readTempatDet();
}

require '../../vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .text-center {
            text-align: center;
        }

        .table {
            border-collapse: collapse;
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

        h2 {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>';

$html .= '<h2 class="text-center">Laporan Inventaris Barang</h2>
    <table class="table center" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tempat</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Baik</th>
                <th>Sedang</th>
                <th>Rusak</th>
            </tr>
        </thead>
        <tbody>';

$no = 1;
foreach ($row as $item) {
    $html .= "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $item['nm_tempat'] . "</td>
                    <td>" . $item['nm_barang'] . "</td>
                    <td>" . $item['jmlh'] . "</td>
                    <td>" . $item['baik'] . "</td>
                    <td>" . $item['sedang'] . "</td>
                    <td>" . $item['rusak'] . "</td>
                </tr>";
};

$html .= '</tbody></table>';

$html .= '</body></html>';

// echo $html;


$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream('Laporan', array('Attachment' => 0));
