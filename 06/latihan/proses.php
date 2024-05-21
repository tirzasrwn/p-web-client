<?php
if (isset($_POST['fnama'])) {
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $jkel = $_POST['jkel'];
    $prodi = $_POST['prodi'];

    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "Nama: " . $fnama . "<br/>";
    echo "Alamat: " . $lalamat . "<br/>";
    echo "Jenis Kelamin: " . $jkel . "<br/>";
    echo "Program Studi: " . $prodi . "<br/>";

    echo "hobi:<br/>";
    if (!empty($_POST['cekhobi'])) {
        foreach ($_POST['cekhobi'] as $selected) {
            echo $selected . "</br>";
        }
    }
}

if (isset($_GET['fnama'])) {
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $jkel = $_GET['jkel'];
    $prodi = $_GET['prodi'];
    $komentar = $_GET['komentar'];

    echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
    echo "Nama: " . $fnama . "<br/>";
    echo "Alamat: " . $lalamat . "<br/>";
    echo "Jenis Kelamin: " . $jkel . "<br/>";
    echo "Program Studi: " . $prodi . "<br/>";

    echo "hobi:<br/>";
    if (!empty($_GET['cekhobi'])) {
        foreach ($_GET['cekhobi'] as $selected) {
            echo $selected . "</br>";
        }
    }
}
