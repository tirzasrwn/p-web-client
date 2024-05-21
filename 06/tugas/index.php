<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container">
        <div class="main">
            <form method="get" action="proses.php" id="form">
                <h2>DATA IDENTITAS</h2>
                <hr />
                <label>Nama : </label>
                <input type="text" name="fnama" id="fnama" />
                <label>Alamat: </label>
                <input type="text" name="lalamat" id="lalamat" />

                <p>
                    <label> Jenis Kelamin: </label>
                    <input type="radio" name="jkel" value="Laki-laki" />Laki-laki
                    <input type="radio" name="jkel" value="Perempuan" />Perempuan
                </p>
                <p>
                    <label> Program Studi </label>
                    <select name="prodi">
                        <option value="SI">SI</option>
                        <option value="TI">TI</option>
                        <option value="TK">TK</option>
                        <option value="KA">KA</option>
                        <option value="MI">MI</option>
                    </select>
                </p>
                <p>
                    <label>Hobi</label>
                    <input type="checkbox" name="cekhobi[]" value="Menyanyi" />
                    <label for="chkSing">Menyanyi</label>
                    <input type="checkbox" name="cekhobi[]" value="olah raga" />
                    <label for="cekhobi">Olah Raga</label>
                </p>

                <textarea rows="5" cols="33" name="komentar" id="komentar"></textarea>
                <input type="submit" name="submit" id="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
