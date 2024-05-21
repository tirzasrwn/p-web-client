<?php
if (isset($_POST['fnama'])) {
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $nohp = $_POST['nohp'];
    $tgl = $_POST['tgl'];
    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "Nama: " . $fnama . "<br/>Alamat: " . $lalamat . "</br>NO HP:" . $nohp . "</br>Tanggal Lahir:" . $tgl;
}
//
if (isset($_GET['fnama'])) {
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $nohp = $_GET['nohp'];
    $tgl = $_GET['tgl'];
    echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
    echo "Nama: " . $fnama . "<br/>Alamat: " . $lalamat . "</br>NO HP:" . $nohp . "</br>Tanggal Lahir:" . $tgl;
}
