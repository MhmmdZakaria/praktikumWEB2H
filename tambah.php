<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQli</title>
</head>
<body>
    <h2> DATA MAHASISWA</h2>
    <br/>>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="POST" action="tambah_aksi.php">
    <table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>NPM</td>
        <td><input type="number" name="npm"</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN"></td>
    </tr>
    </table>
    </form>
</body>
</html>