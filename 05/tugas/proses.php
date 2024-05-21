<?php

$conn = new mysqli("0.0.0.0", "mysql", "mysql", "mysql", 3306);
if ($conn->connect_error) {
    echo "failed connect";
}

echo '<br>POST ARRAY:';
print_r($_POST);
echo '<br>GET ARRAY:';
print_r($_GET);
echo '<br>';

if (isset($_POST['fnama'])) {
    echo "USING POST</br>";
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $nohp = $_POST['nohp'];
    $tgl = $_POST['tgl'];

    $stmt = $conn->prepare("INSERT INTO mahasiswa (nama, alamat, nohp, tgl) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fnama, $lalamat, $nohp, $tgl);
    if ($stmt->execute()) {
        echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
        echo "Nama: " . $fnama . "<br/>Alamat: " . $lalamat . "<br/>No. HP: " . $nohp . "<br/>Tanggal: " . $tgl;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

if (isset($_GET['fnama'])) {
    echo "USING GET</br>";
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $nohp = $_GET['nohp'];
    $tgl = $_GET['tgl'];

    $stmt = $conn->prepare("SELECT nama, alamat, nohp, tgl FROM mahasiswa WHERE nama like ?");
    $stmt->bind_param("s", $_GET['fnama']);
    $stmt->execute();
    $stmt->bind_result($fnama, $lalamat, $nohp, $tgl);

    $stmt->fetch();
    echo "<span class='success'>Using <b>GET METHOD</b></span><br/>";
    echo "Nama: " . $fnama . "<br/>Alamat: " . $lalamat . "<br/>No. HP: " . $nohp . "<br/>Tanggal: " . $tgl;

    $stmt->close();
}

$conn->close();
