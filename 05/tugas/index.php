<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container">
        <div class="main">
            <form method="get" action="index.php" id="form">
                <h2>DATA IDENTITAS</h2>
                <hr />
                <label>Nama : </label>
                <input type="text" name="fnama" id="fnama" />
                <label>Alamat: </label>
                <input type="text" name="lalamat" id="lalamat" />
                <label>NO HP: </label>
                <input type="text" name="nohp" id="nohp" />
                <label>Tanggal lahir: </label>
                <input type="date" name="tgl" id="tgl" />
                <input type="submit" name="submit" id="submit" value="Submit">
            </form>

            <?php include "proses.php"; ?>
        </div>
    </div>
</body>

</html>
