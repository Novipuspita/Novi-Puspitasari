<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="con">
    <div class="kol1">
    <h3>Tambah mahasiswa</h3> 
    <br><br>
    <form action="tambah_aksi.php" method='post'>
        <table align="center">
            <tr>
                <td><input type="text" name="nama" placeholder="Nama"></td>
                <td><input type="text" name="nim" placeholder="NIM"></td>
            </tr>
            <tr>
                <td>
                    <select name="jurusan" placeholder="Jurusan">
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Tehnik Informatika">Tehnik Informatika</option>
                    </select>
                </td>
                <td><input type="text" name="angkatan" placeholder="Angkatan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</body>
</html>